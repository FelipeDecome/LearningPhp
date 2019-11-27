<?php

declare(strict_types = 1);

require "Config.php";

class Conexao
{

	public static function pegarConexao()
	{
		$conexao = new PDO(
			Config::DB_TYPE . ":host=" . Config::DB_HOST. ";dbname=" .Config::DB_NAME, 
			Config::DB_USER, 
			Config::DB_PASS
		);

		return $conexao;
	}

}
