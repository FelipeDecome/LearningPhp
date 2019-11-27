<?php

declare(strict_types = 1);

class Conexao
{

	public static function pegarConexao()
	{
		$conexao = new PDO(
			Config::DB_DRIVE . 
			":host=" . 
			Config::DB_HOST. 
			";dbname=" . 
			Config::DB_NAME, 
			Config::DB_USER, 
			Config::DB_PASS
		);

		return $conexao;
	}

}
