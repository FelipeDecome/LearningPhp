<?php

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '96578396');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('". $this->nome . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '96578396');
        $conexao->exec($query);
    }
}