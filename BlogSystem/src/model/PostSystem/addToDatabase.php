<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	
	//echo "Ola Mundo";
}

$postData = [
	'name' 		=> 	(filter_input(INPUT_GET, 'name') != null) ? filter_input(INPUT_GET, 'name') : null,
	'desc' 		=> 	(filter_input(INPUT_GET, 'desc') != null) ? filter_input(INPUT_GET, 'desc') : null,
	'type' 		=> 	(filter_input(INPUT_GET, 'type') != null) ? filter_input(INPUT_GET, 'type') : null,
	'reference' => 	(filter_input(INPUT_GET, 'reference') != null) ? filter_input(INPUT_GET, 'reference') : null,
	'material' 	=> 	(filter_input(INPUT_GET, 'material') != null) ? filter_input(INPUT_GET, 'material') : null
];

//Verifica quais entradas estão vazias
foreach ($postData as $key => $value) {
	if (isEmpty($value)){
		$err_msg[$key] = "A entrada $key está vazia!"; //Verificar antes do final da postagem
	}
}

//var_dump(clearStringArr($postData), $err_msg);
//echo str_replace('|', ' ', $postData['name']);

/**
 * [clearStringArr Limpa as strings ou arrays, remove tags e espaços substituindo por '|'.]
 * @param  [String/Array] $string [String ou Array que terá os espaços e as tags removidas.]
 * @return [string/Array] $output [String ou Array limpo.]
 */
function clearStringArr($data){
	if (!is_array($data)) {
		$str = str_replace(' ', '|', $data);
		$output = strip_tags(trim($str));
		return $output;
	} else {
		foreach ($data as $key => $value) {
			$val = str_replace(' ', '|', $value);
			$output[$key] = strip_tags(trim($val));
		}
		return $output;
	}
}

//Verifica se a string está vazia
function isEmpty($string) {
	if ($string === null || $string === "" || empty($string)) {
		return true;
	} else {
		return false;
	}
}

//Verifica se a String contém apenas Letras
function verifyOnlyLetters($string) {
	if (ctype_alpha($string)){
		return true;
	} else {
		return false;
	}
}