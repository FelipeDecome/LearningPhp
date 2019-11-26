<?php 

namespace exception;

class OperacaoNaoRealizadaException extends \Exception
{

    public function __construct($message, $cod = null, $ex = null){

        parent::__construct($message, $cod, $ex);

    }

    public function __toString()
    {
        return $this->getCode() . ":" . $this->getMessage();
    }

}


?>