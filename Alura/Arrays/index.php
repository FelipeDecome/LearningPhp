<?php declare(strict_types=1);

namespace Alura;

require_once 'Autoload.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine($correntistas, $saldos);

echo "O saldo do Giovanni é: {$relacionados['Giovanni']}";

$resultado = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

var_dump($resultado);

?>