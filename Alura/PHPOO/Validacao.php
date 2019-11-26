<?php

class Validacao{

    public static function protegeAtributo($atributo)
    {
        if($atributo == 'titular' || $atributo == "saldo"){             
            throw new \Exception("Você não pode alterar/ler o $atributo diretamente.");  

        }
    }

    public static function isNumber($valor)
    {
        if(!is_numeric($valor)){

            throw new \InvalidArgumentException("O valor passado precisa ser um número.");

        }
    }

    public static function isNegative($valor)
    {

        if ($valor < 0) {

            throw new \InvalidArgumentException("O Valor inserido é negativo. Valor: $valor");

        }

    }

}