<?php 

namespace exception;

class SaldoInsuficienteException extends \Exception
{

    private $valor;
    private $saldo;

    public function __construct($mensagem, $valor, $saldo, $cod = null, $ex = null)
    {

        $this->valor = $valor;
        $this->saldo = $saldo;

        parent::__construct($mensagem, $cod, $ex);

    }

    public function __get($param) 
    {

        return $this->$param;

    }

}

?>