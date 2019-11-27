<?php

class Erro
{

    public static function trataErro(Exception $e)
    {
        if(Config::DEBUG){
            echo "<pre>";
            print_r($e);
            echo "</pre>";
        } else {
            echo $e->getMessage();
        }
        exit;        
    }

}