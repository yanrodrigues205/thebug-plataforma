<?php

require_once "models/BancoDeDados.php";
require_once "models/Resultado.php";

class BaseController
{
    private function getDB($bd = null, $host = null, $user = null, $password = null)
    {
        if ($bd == null) $bd = "deubug";
        if ($user == null) $user = "root";
        if ($password == null) $password = "root";
        if ($host == null) $host = "127.0.0.1";

        return new BancoDeDados($host, $user, $password, $bd);
    }

    protected function changeRequestToGET()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
    }

    protected function requestIsGET()
    {
        return $_SERVER['REQUEST_METHOD'] == "GET";
    }

    protected function requestIsPOST()
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    protected function requestIsPUT()
    {
        return $_SERVER['REQUEST_METHOD'] == "PUT";
    }

    protected function requestIsDELETE()
    {
        return $_SERVER['REQUEST_METHOD'] == "DELETE";
    }

    protected function conectarBD()
    {
        return $this->getDB();
    }
}
