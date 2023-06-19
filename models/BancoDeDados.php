<?php

require_once "Resultado.php";

class BancoDeDados
{
    private $host;
    private $login;
    private $senha;
    private $banco;

    public function __construct($host, $login, $senha, $banco)
    {
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->banco = $banco;
    }

    private function conectar()
    {
        try {
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->login, $this->senha);
            return Resultado::dir($conexao);
        } catch (Exception $e) {
            $err = "NÃO FOI POSSÍVEL CONECTAR AO BANCO ->" . $e;
            return Resultado::esq($err);
        }
    }

    // apenas executa queries
    public function execute($sql, $params = [])
    {
        try {
            $result = $this->conectar();

            if ($result->isLeft()) {
                $error = "$result->value";
                throw new Exception($error);
            }

            /** @var PDO */
            $pdo = $result->value;

            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute($params);

            if ($result == false) {
                $err = $pdo->errorInfo();
                return Resultado::esq($err);;
            }

            return Resultado::dir($result);
        } catch (Exception $e) {
            $err = "NÃO FOI POSSÍVEL EXECUTAR O COMANDO -> " . $e;
            return Resultado::esq($err);
        }
    }

    // execute queries e retorna uma lista de resultados
    public function fetchAll($sql, $params = [])
    {
        try {
            $result = $this->conectar();

            if ($result->isLeft()) {
                $error = "$result->value";
                throw new Exception($error);
            }

            /** @var PDO */
            $pdo = $result->value;

            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute($params);

            if ($result == false) {
                $err = $pdo->errorInfo();
                return Resultado::esq($err);
            }

            return Resultado::dir($stmt->fetchAll());
        } catch (Exception $e) {
            $err = "NÃO FOI POSSÍVEL EXECUTAR O COMANDO -> " . $e;
            return Resultado::esq($err);
        }
    }

    // executa a querie e retorna um valor
    public function fetch($sql, $params = [])
    {
        try {
            $result = $this->conectar();

            if ($result->isLeft()) {
                $error = "$result->value";
                throw new Exception($error);
            }

            /** @var PDO */
            $pdo = $result->value;

            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute($params);

            if ($result == false) {
                $err = $pdo->errorInfo();
                return Resultado::esq($err);
            }

            return Resultado::dir($stmt->fetch());
        } catch (Exception $e) {
            $err = "NÃO FOI POSSÍVEL EXECUTAR O COMANDO -> " . $e;
            return Resultado::esq($err);
        }
    }
}
