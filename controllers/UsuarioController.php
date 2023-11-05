<?php

require_once "BaseController.php";
require_once "models/Usuario.php";
require_once "models/Session.php";

class UsuarioController extends BaseController
{
    public function info()
    {
        $rotas = file_get_contents('routes.json');
        $json = "{ \"rotas\": $rotas }";

        echo $json;
    }

    public function cadastro()
    {
        $view = 'views/usuarios/cadastrar.php';

        if ($this->requestIsPOST()) {
            $this->changeRequestToGET();

            if (empty($_POST["login"]) || empty($_POST["email"]) || empty($_POST["senha"])) {
                $view_msg_erro = "Preencha todos os campos corretamente";
                include $view;
                return;
            }

            $conn = $this->conectarBD();
            $usuario = new Usuario($_POST["login"], $_POST["senha"], $_POST["email"]);

            $resultado = $usuario->salvar($conn);

            if ($resultado->isRight()) { // sucesso
                $session = new Session();
                $session->setarUsuarioLogado($usuario);

                header("location:perfil");
                exit;
            }

            $view_previous_login = $_POST["login"];
            $view_previous_email = $_POST["email"];
            $view_msg_erro = "Não foi possível cadastrar o usuário";
            // ... agora ele executará o `include $view;`
        }

        include $view;
    }

    public function login()
    {
        $view = 'views/usuarios/autenticar.php';

        if ($this->requestIsPOST()) {
            $this->changeRequestToGET();

            if (empty($_POST["login"]) || empty($_POST["senha"])) {
                $view_msg_erro = "Você precisa fornecer o login e a senha";
                include $view;
                return;
            }

            $conn = $this->conectarBD();
            $busca = Usuario::buscarUsuarioPorLogin($conn, $_POST["login"]);

            if ($busca->isRight()) { // sucesso
                /** @var Usuario */ $usuario = $busca->value;

                if ($usuario->getSenha() != $_POST["senha"]) {
                    $view_msg_erro = "A senha está incorreta";
                    include $view;
                    return;
                }

                $session = new Session();
                $session->setarUsuarioLogado($usuario);

                header("location:perfil");
                exit;
            }

            $view_msg_erro = "Não foi realizar a autenticação do usuário";
            $view_previous_login = $_POST["login"];
            // ... agora ele executará o `include $view;`
        }

        include $view;
    }

    public function perfil()
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $view_usuario_logado = $this->garantirUsuarioLogado($conn, $session);
        $quiz_pontos = Usuario::buscarPontosQuiz($conn, $view_usuario_logado->getId());
        $view_quiz_pontos = 0;
        
        if ($quiz_pontos->isRight()) {
            $view_quiz_pontos = $quiz_pontos->value["pontos"];
        }
        
        include 'views/usuarios/perfil.php';
    }

    public function deslogar()
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $usuario_logado = new Usuario("huggon", "12345678", "hug@email.com", UUID::gerar());
        //$usuario_logado = $this->garantirUsuarioLogado($conn, $session);
        $view_usuario_deslogado = $usuario_logado->getLogin(); // $login é usado na mensagem de deslogamento
        $session->setarUsuarioLogado(null);

        include 'views/usuarios/deslogar.php';
    }

    public function excluir() // este recurso retorna um json
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $usuario_logado = $this->garantirUsuarioLogado($conn, $session);

        if ($this->requestIsDELETE()) {
            return json_encode(array(
                "resultado" => false,
                "erro" => "Não foi possível realizar a exclusão da conta",
                "erro_debug" => "O método da requisição deve ser DELETE, mas outro tipo foi enviado"
            ));

            $resultado = $usuario_logado->excluir($conn);

            if ($resultado->isLeft()) {
                return json_encode(array(
                    "resultado" => false,
                    "erro" => "Não foi possível realizar a exclusão da conta",
                    "erro_debug" => "Erro inesperado: " . $resultado->value
                ));
            }

            return json_encode(array(
                "resultado" => true
            ));
        } else {
            $resultado = $usuario_logado->excluir($conn);

            if ($resultado->isLeft()) {
                header("location:perfil");
                exit;
            }

            header("location:login");
        }
    }

    public function avatar()
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $usuario_logado = $this->garantirUsuarioLogado($conn, $session);

        if ($this->requestIsPOST()) { //cadastro
            if (!$usuario_logado) {
                header("location:login");
            }
           
            $imagemTmp = file_get_contents($_FILES["avatar"]["tmp_name"]);
            $imagemBase64 = base64_encode($imagemTmp);

            $usuario_logado->saveAvatar($conn, $imagemBase64);

            header("location:perfil");
            
        } else if ($this->requestIsGET()) {
            $resultado = $usuario_logado->getAvatar($conn);
            var_dump($resultado);
            
        } else if ($this->requestIsDELETE()) {
            // deleta o arquivo
            echo "DELETE";
        }
        else {
                echo "O método da requisição precisa ser GET, POST ou DELETE";
        }
    }

    /** 
     * @param BancoDeDados $conn
     * @param Session $session 
     * */
    private function garantirUsuarioLogado($conn, $session)
    {
        $usuario_logado = $session->obterUsuarioLogado($conn);

        if (!$usuario_logado) {
            header("location:login");
            exit;
        }

        return $usuario_logado;
    }
}
