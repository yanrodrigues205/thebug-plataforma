<?php

require_once "models/BancoDeDados.php";

class Session
{
    private static $USUARIO_LOGADO = "usuario_logado";

    public function __construct()
    {
        Session::start();
    }

    /** @param Usuario|null $usuario */
    public function setarUsuarioLogado($usuario)
    {
        if ($usuario) {
            Session::set(Session::$USUARIO_LOGADO, $usuario->getId());
            return;
        }
        Session::remove(Session::$USUARIO_LOGADO);
    }

    /**
     * @param BancoDeDados $conn 
     * @return Usuario|null 
     * */
    public function obterUsuarioLogado($conn)
    {
        $usuario_id = Session::get(Session::$USUARIO_LOGADO);

        if (!$usuario_id) {
            return null;
        }

        $resultado = $conn->fetch("SELECT usu_id, usu_login, usu_email, usu_senha FROM usuario WHERE usu_id=?", [$usuario_id]);

        if ($resultado->isLeft()) {
            echo "$resultado->value";
            return null;
        }

        $data = $resultado->value;
        $usuario_logado = new Usuario($data["usu_login"], $data["usu_senha"], $data["usu_email"], $data["usu_id"]);

        return $usuario_logado;
    }

    public static function destroy()
    {
        session_destroy();
    }

    private static function start()
    {
        session_start();
    }

    private static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    private static function get($key, $default = null)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }

    private static function remove($key)
    {
        unset($_SESSION[$key]);
    }
}
