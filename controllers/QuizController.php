<?php

require_once "BaseController.php";
require_once "models/Quiz.php";

class QuizController extends BaseController
{
    public function index() 
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $view_usuario_logado = $session->obterUsuarioLogado($conn);
        $view_proximo = false;
        $view = "views/quiz/index.php";
        
        if (!$view_usuario_logado)
        {
            header("location:login");
        }

        if (!is_null($session->getCache("opcao_escolhida")) && 
            !is_null($session->getCache("acertou_resposta")) && 
            !is_null($session->getCache("quiz_id"))) {
            
            $view_proximo = true;
            $view_opcao_escolhida = $session->getCache("opcao_escolhida");
            $view_acertou_resposta = $session->getCache("acertou_resposta");

            $quiz = Quiz::buscarPorId($conn, $session->getCache("quiz_id"));

            if ($quiz->isLeft()) {
                $view_error = "Não foi possível obter informações do Quiz.";
                include $view;
                exit;
            }

            $view_quiz = $quiz->value;
        }
        else {
            $quiz_id_list = Quiz::buscarTodosIds($conn);
            
            if ($quiz_id_list->isLeft()) {
                $view_error = "Não foi possível obter as perguntas.";
                include $view;
                return;
            }
            
            $id = $quiz_id_list->value[array_rand($quiz_id_list->value)];
            $quiz = Quiz::buscarPorId($conn, $id);

            if ($quiz->isLeft()) {
                $view_error = "Não foi possível obter informações do Quiz.";
                include $view;
                exit;
            }

            $view_quiz = $quiz->value;
        }
        
        $session->setCache("quiz_id", $view_quiz->getId());
        $session->setCache("opcao_escolhida", null);
        $session->setCache("acertou_resposta", null);

        include $view;
    }

    public function verificarResposta()
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $ultimo_quiz = Quiz::buscarPorId($conn, $session->getCache("quiz_id"));

        if ($ultimo_quiz->isLeft() || !isset($_POST["opcao_escolhida"])) {
            header("location:../quiz");
            exit;
        }

        $opcao_escolhida = $_POST["opcao_escolhida"];
        $acertou_resposta = $ultimo_quiz->value->obterOpcaoCorreta()->getId() == $opcao_escolhida;
        
        $session->setCache("opcao_escolhida", $opcao_escolhida);
        $session->setCache("acertou_resposta", $acertou_resposta);

        header("location:../quiz");
    }
}