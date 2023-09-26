<?php

require_once "models/UUID.php";
require_once "models/Quiz.php";
require_once "models/Opcao.php";
require_once "models/Resultado.php";

class Quiz 
{
    private $id;
    private $pergunta;
    private $opcoes;
    private $tipo_pergunta_id;

    public function __construct(
        $pergunta,
        $opcoes,
        $id = null
    ) {
        if ($id == null) $id = UUID::gerar();
        $this->id = $id;
        $this->pergunta = $pergunta;
        $this->opcoes = $opcoes;
    }

    /** @param BancoDeDados $conn */
    public static function buscarTodosIds($conn)
    {
        $resultado = $conn->fetchAll("SELECT q_id FROM quiz", []);
        
        if ($resultado->isLeft()) {
            return Resultado::esq($resultado->value);
        }

        $opcao_ids = array();
        $data = $resultado->value;

        foreach ($data as $d) {
            array_push($opcao_ids, $d["q_id"]);
        }

        return Resultado::dir($opcao_ids);
    } 

    /** 
     * @param BancoDeDados $conn 
     * @param string $id */
    public static function buscarPorId($conn, $id) 
    {
        $resultado = $conn->fetchAll(
            "SELECT 
                q.q_id, 
                q.q_pergunta, 
                q.tp_id,
                qo.qo_id,
                qo.qo_descricao,
                qo.qo_correta
            FROM quiz q
                LEFT OUTER JOIN quiz_opcao qo ON qo.q_id=q.q_id
            WHERE q.q_id=?",
            [$id]
        );

        if ($resultado->isLeft()) {
            return Resultado::esq($resultado->value);
        }

        $data = $resultado->value;

        if (count($data) == 0) {
            return Resultado::esq("Nenhum registro encontrado.");
        }

        $opcoes = array();

        foreach ($data as $d) {
            $opcao = new Opcao($d["qo_descricao"], $d["qo_correta"] == 1, $d["qo_id"]);
            array_push($opcoes, $opcao);
        }
        $quiz = new Quiz($data[0]["q_pergunta"], $opcoes, $data[0]["q_id"]);

        return Resultado::dir($quiz);
    }

    /** @return Opcao|null */
    public function obterOpcaoCorreta() {
        foreach ($this->opcoes as $opcao) {
            if ($opcao->getCorreta()) 
                return $opcao;
        }

        return null;
    }

    /** @param BancoDeDados */
    public function salvar($conn)
    {
        $resultado = $conn->execute(
            "INSERT INTO quiz (q_id, q_pergunta, tp_id) VALUES (?, ?, ?)",
            [$this->id, $this->pergunta, $this->tipo_pergunta_id]
        );
        return $resultado;
    }

    /** @param BancoDeDados */
    public function excluir($conn) 
    {
        $resultado = $conn->execute("DELETE FROM quiz WHERE q_id=?", [$this->id]);
        return $resultado;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPergunta() 
    {
        return utf8_encode($this->pergunta);
    }

    public function getOpcoes() 
    {
        return $this->opcoes;
    }

    public function getTipoPerguntaId() {
        return $this->tipo_pergunta_id;
    }

    public function adicionarOpcao($opcao) {
        array_push($this->opcoes, $opcao);
    }

    public function removerOpcao($opcao_id) {
        $this->opcoes = array_filter($this->opcoes, function($opcao) {
            return $opcao.getId() != $opcao_id;
        });
    }

    public function setPergunta($descricao)
    {
        $this->pergunta = $descricao;
    }

    public function setTipoPerguntaId($pergunta_id) {
        $this->tipo_pergunta_id = $pergunta_id;
    }
}