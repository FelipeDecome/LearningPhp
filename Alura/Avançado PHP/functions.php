
<?php

function saque(array $conta, float $value) : array
{
	if($conta['balance'] < $value) {
		showMessage('Não foi possível sacar, pois o valor à ser sacado é maior que o saldo.');
	} else {
		$conta['balance'] -= $value;
		return $conta;
	}
}

function depositar(array $conta, float $value) : array
{
	if ($value > 0)	{
		$conta['balance'] += $value;
	} else {
		showMessage('Depositos precisam ser de um valor positivo.');
	}
	return $conta;
}

function caseUP(array &$conta)
{
	$conta['titular'] = mb_strtoupper($conta['titular']);
}

function showConta(array $conta) 
{
	['titular' => $titular, 'balance' => $balance] = $conta;
	echo "<li>Titular: $titular. Saldo: $balance.</li>";
}

function showMessage($message) 
{
	echo "$message </br>";
}