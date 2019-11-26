<?php

require_once 'autoload.php';

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\sistemaInterno\GerenciadorBonificacao;

$diretor1 = new Diretor("123.456.789-10");
$diretor1->senha = 123456;
$designer1 = new Designer("123.456.789-11", 2500.00);

var_dump($designer1, $diretor1);

exit;

$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($diretor1, 123456);

$gerenciador->registrar($diretor1);
$gerenciador->registrar($designer1);

var_dump($gerenciador->getTotalBonificacoes(), $designer1, $diretor1);


$designer1->aumSalario();
$diretor1->aumSalario();

var_dump($designer1, $diretor1);

?>