<?php

require './ConnDatabase/CrudSystem.class.php';

$data = [

	'name' => 'escadinha',
	'type' => 'moldura',
	'description' => 'calha de beiral',
	'reference' => 'abcdefg',
	'material' => 'galvanizado'

];

//$request = new CrudSystem('INSERT', 'calhas', $data, '', '');

//var_dump($request->Result);

//$newConn = new DbConnection();
//$conn = $newConn->connDB();

//var_dump(mysqli_query($conn, "INSERT INTO calhas (name, type, description, reference, material) VALUES (escadinha, moldura, calha de beiral, abcdefg, galvanizado)"));
