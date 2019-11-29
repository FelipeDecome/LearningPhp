<?php

class Produto
{

    public $id;
    public $nome;
    public $quantidade;
    public $preco;
    public $categoria_id;

    public function listar()
    {
        $query = 
        "SELECT p.id, p.nome, p.preco, p.quantidade, c.nome as categoria_nome
        FROM produtos p
        INNER JOIN categorias c ON p.categoria_id = c.id";
        $conexao = Conexao::pegarConexao();
        $result = $conexao->query($query);
        $lista = $result->fetchAll();

        return $lista;
    }

}