<?php

declare(strict_types = 1);

class Conexao
{

	public static function pegarConexao()
	{
		$conexao = new PDO(Config::DB_DRIVE . ":host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=" . Config::DB_CHARSET, Config::DB_USER, Config::DB_PASS);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexao;
	}

}
