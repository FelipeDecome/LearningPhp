<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

//require_once 'Validacao.php';
//require_once 'ContaCorrente.php';

require_once "autoload.php";

$contaJoao = new ContaCorrente("João", "1212", "343434-4", 580.00);
$contaMaria = new ContaCorrente("Maria", "1212", "343565-5", 4000.00);
$contaMarta = new ContaCorrente("Marta", "1212", "343445-5", 2000.00);
$contaRicardo = new ContaCorrente("Ricardo", "1212", "343742-5", 6000.00);
$contaJose = new ContaCorrente("José", "1212", "343245-5", 1000.00);
$contaRoberto = new ContaCorrente("Roberto", "1212", "343525-5", 11000.00);
$contaMichele = new ContaCorrente("Michele", "1212", "343585-5", 200.00);

echo ContaCorrente::$totalDeContas . "<br>";
echo ContaCorrente::$taxaOperacao . "<br>";

try{

    $contaJoao->transferir(600, $contaJose);

}catch(\exception\SaldoInsuficienteException $error){

    echo $error->getMessage() . "Valor: $error->valor, Saldo: $error->saldo" . "<br>";

} catch (\Exception $error) {

    //var_dump($error->getPrevious());
    echo $error->getPrevious()->getMessage() . "<br>";
    //echo $error->getPrevious()->getTraceAsString();
    echo $error->getMessage() . "<br>";

}

echo ContaCorrente::$operacaoNaoRealizada;

var_dump($contaJoao);