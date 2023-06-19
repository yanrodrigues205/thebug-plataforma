<?php

/**
 * @template T
 */
class Resultado
{
    /**
     * @var T
     */
    public $value;

    /**
     * @var bool
     */
    private $isError;

    private function __construct($value, $isError)
    {
        $this->value = $value;
        $this->isError = $isError;
    }

    /** 
     * retorna um resultado que deu erro (ex: Resultado::esq("Ocorreu um erro"))
     * @param E $value
     * @return Resultado<E>
     * */
    public static function esq($value)
    {
        return new Resultado($value, true);
    }

    /**
     * retorna um resultado que deu bão (ex: Resultado::dir($user))
     * @param D $value
     * @return Resultado<D>
     */
    public static function dir($value)
    {
        return new Resultado($value, false);
    }

    /**
     * retorna se deu erro
     * @return bool
     */
    public function isLeft()
    {
        return $this->isError;
    }

    /**
     * retorna se deu bão
     * @return bool
     */
    public function isRight()
    {
        return !$this->isError;
    }
}
