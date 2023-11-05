<?php

require_once "models/UUID.php";
require_once "models/Resultado.php";
require_once "models/Usuario.php";

class Usuario
{
    private $id;
    private $login;
    private $senha;
    private $email;

    public function __construct(
        $login,
        $senha,
        $email,
        $id = null
    ) {
        if ($id == null) $id = UUID::gerar();
        $this->id = $id;
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
    }

    /** 
     * @param BancoDeDados $conn 
     * @param string $login */
    public static function buscarUsuarioPorLogin($conn, $login)
    {
        $resultado = $conn->fetch(
            "SELECT usu_login, usu_senha, usu_email, usu_id FROM usuario WHERE usu_login=?",
            [$login]
        );

        if ($resultado->isLeft()) {
            return Resultado::esq($resultado->value);
        }

        $data = $resultado->value;

        if (!$data) {
            return Resultado::esq("Usuário não encontrado");
        }

        $login = $data["usu_login"];
        $senha = $data["usu_senha"];
        $email = $data["usu_email"];
        $id = $data["usu_id"];

        $usuario = new Usuario($login, $senha, $email, $id);

        return Resultado::dir($usuario);
    }

    /** 
     * @param BancoDeDados $conn 
     * @param string $id */
    public static function buscarPorId($conn, $id)
    {
        $resultado = $conn->fetch(
            "SELECT usu_id, usu_login, usu_senha, usu_email FROM usuario WHERE usu_id=?",
            [$id]
        );

        if ($resultado->isLeft()) {
            return Resultado::esq($resultado->value);
        }

        $data = $resultado->value;
        $usuario = new Usuario($data["usu_login"], $data["usu_senha"], $data["usu_email"], $data["usu_id"]);

        return Resultado::dir($usuario);
    }
    
    /** 
     * @param BancoDeDados $conn 
     * @param string $user_id
     * */
    public static function buscarPontosQuiz($conn, $user_id) {
        $resultado = $conn->fetch(
            "SELECT count(*) as pontos FROM quiz_resposta qr
                LEFT OUTER JOIN usuario u ON u.usu_id = qr.usu_id AND qr_acertou = true
                WHERE u.usu_id = ?",
            [$user_id]
        );

        return $resultado;
    }

    /** 
     * @param BancoDeDados $conn 
     * @param string $quiz_id
     * @param string $user_id
     **/
    public static function salvarRespostaQuiz($conn, $quiz_id, $user_id, $acertou)
    {
        $resultado = $conn->execute(
            "INSERT INTO quiz_resposta (qr_id, q_id, usu_id, qr_acertou) VALUES (?, ?, ?, ?)",
            [UUID::gerar(), $quiz_id, $user_id, $acertou]
        );

        return $resultado;
    }

    /** @param BancoDeDados $conn */
    public function salvar($conn)
    {
        $resultado = $conn->execute(
            "INSERT INTO usuario (usu_id, usu_login, usu_email, usu_senha) VALUES (?, ?, ?, ?)",
            [$this->id, $this->login, $this->email, $this->senha]
        );

        return $resultado;
    }

    /** 
     * @param BancoDeDados $conn
     * @param string $img
     * */
    public function saveAvatar($conn, $img){
        $resultado = $conn->execute(
            "UPDATE usuario SET usu_avatar = '$img' WHERE usu_id = ? ",[$this->id]
        );
        return $resultado;
    }
    
    /** @param BancoDeDados $conn */
    public function getAvatar($conn){
        $resultado = $conn->fetch(
            "SELECT usu_avatar FROM usuario WHERE usu_id = ? ",[$this->id]
        );

        if ($resultado->isLeft()) {
            return Resultado::esq("Usuário não tem avatar");
        }
        
        return $resultado;
    }
    
    /** @param BancoDeDados $conn */
    public function excluir($conn)
    {
        $resultado = $conn->execute("DELETE FROM usuario WHERE usu_id=?", [$this->id]);
        return $resultado;
    }

    //GETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    //SETTERS
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
