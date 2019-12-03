<?php

class Produto
{

    public $id;
    public $nome;
    public $quantidade;
    public $preco;
    public $categoria_id;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

    public static function listar()
    {
        $query = 
        "SELECT p.id, p.nome, p.preco, p.quantidade, c.nome as categoria_nome
        FROM produtos p
        INNER JOIN categorias c ON p.categoria_id = c.id
        ORDER BY p.id";
        $conexao = Conexao::pegarConexao();
        $result = $conexao->query($query);
        $lista = $result->fetchAll();

        return $lista;
    }

    public static function listByCat($categoria_id)
    {
        $query = 
        "SELECT id, nome, preco, quantidade, categoria_id 
        FROM produtos 
        WHERE categoria_id = :categoria_id
        ORDER BY nome";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':categoria_id', $categoria_id);
        $stmt->execute();
        return $stmt->fetchAll();

    }    

    public function inserir()
    {
        $query = 
        "INSERT INTO produtos (nome, preco, quantidade, categoria_id) 
        VALUES (:nome, :preco, :quantidade, :categoria_id)";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        $stmt->execute();
    }

    public function carregar()
    {
        $query = "SELECT nome, preco, quantidade, categoria_id FROM produtos WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
        $resultado = $stmt->fetch();

        foreach ($resultado as $field => $value) {
            if (!is_numeric($field)){
                $this->$field = $value;
            }
        }
    }

    public function atualizar()
    {
        $query = 
        "UPDATE produtos 
        SET nome = :nome, preco = :preco, quantidade = :quantidade, categoria_id = :categoria_id 
        WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':quantidade', $this->quantidade);
        $stmt->bindValue(':categoria_id', $this->categoria_id);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM produtos WHERE id = :id";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
    }
}
