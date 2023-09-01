<?php

require_once "BaseController.php";

class QuizController extends BaseController
{
    public function index() 
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $view_usuario_logado = $session->obterUsuarioLogado($conn);
        $view_proximo = false;
        $view_options = array();

        if (isset($_GET["opcao"])) {
            $view_proximo = true;
        }

        for ($i = 1; $i <= 4; $i++) {
            $aditional_classes = "";

            if ($view_proximo) {
                $opcao = isset($_GET["opcao"]) ? $_GET["opcao"] : 0;
                $acertou = isset($_GET["acertou"]) ? $_GET["acertou"] : 0;

                if ($opcao == $i) {
                    $aditional_classes = $acertou ? "correta" : "errada";
                }
            }
            
            $option_html = "<input type='button' class='option $aditional_classes' value='Option $i' data-value='$i' />";

            array_push($view_options, $option_html);
        }

        
        // if (!$view_usuario_logado)
        // {
        //     header("location:login");
        // }

        include "views/quiz/index.php";
    }

    public function verificarResposta()
    {
        $opcao_escolhida = $_POST["opcao_escolhida"];
        $resposta_correta = rand(1, 4);
        $acertou_resposta = ($opcao_escolhida == $resposta_correta ? 1 : 0);
        header("location:../quiz?opcao=$opcao_escolhida&acertou=$acertou_resposta");
    }
}