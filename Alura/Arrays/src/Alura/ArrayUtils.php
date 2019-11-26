<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{

    public static function remover(string $elemento, array &$array)
    {
        $position = array_search($elemento, $array, true);
        if(is_int($position)){
            unset($array[$position]);
        } else {
            echo "<p> Não foi encontrado no Array.</p>";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $key => $value) {
            if($value > $saldo) {
                $correntistasComSaldoMaior[] = $key;
            }
        }

        return $correntistasComSaldoMaior;
    }

}

?>