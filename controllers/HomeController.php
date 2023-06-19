<?php

require_once "BaseController.php";

class HomeController extends BaseController
{
    public function index()
    {
        $conn = $this->conectarBD();
        $session = new Session();
        $view_usuario_logado = $session->obterUsuarioLogado($conn);
        include "views/home/index.php";
    }
}
