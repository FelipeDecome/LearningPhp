<?php 

namespace Alura;

class Calculadora
{

    public function calculaMedia(array $notas): ?float
    {

        $soma = 0;

        if(sizeof($notas) > 0){
            for ($i = 0; $i < sizeof($notas); $i++) {
            $soma = $soma + $notas[$i];
            }

            $media = $soma / sizeof($notas);

            return $media;
        } else {
            return null;
        }

    }

}
