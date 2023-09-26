<?php

require_once "models/UUID.php";
require_once "models/Resultado.php";

class Opcao {
    private $id;
    private $descricao;
    private $correta;

    public function __construct(
        $descricao,
        $correta,
        $id = null
    ) {
        if ($id == null) $id = UUID::gerar();
        $this->id = $id;
        $this->correta = $correta;
        $this->descricao = $descricao;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getCorreta() {
        return $this->correta;
    }

    public function getDescricao() 
    {
        return utf8_encode($this->descricao);
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}