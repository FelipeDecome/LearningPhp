<?php

require_once 'functions.php';
$contaCorrentes = 
[
	'123.456.789-10' => [
		'titular' => 'Ricardo',
		'balance' => 4560
	],

	'123.456.789-11' => [
		'titular' => 'Esmael',
		'balance' => 2260
	],

	'123.456.789-12' => [
		'titular' => 'Roberto',
		'balance' => 830
	]

];

$contaCorrentes['123.456.789-12'] = depositar($contaCorrentes['123.456.789-12'], -1200);

$contaCorrentes['123.456.789-10'] = saque($contaCorrentes['123.456.789-10'], 2300);
//var_dump($contaCorrentes);

//caseUP($contaCorrentes['123.456.789-10']);

//unset($contaCorrentes['123.456.789-10']);

//var_dump($contaCorrentes);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Contas Correntes</h1>
<hr>
<dl>
	<?php foreach ($contaCorrentes as $cpf => $conta) { ?>
	
	<dt>
		<h3><?php echo "{$conta['titular']} - $cpf;" ?><h3>
	</dt>
	<dd><?php echo "Saldo: {$conta['balance']}"; ?></dd>
	
	<?php }?>
</dl>

	
</body>
</html>
