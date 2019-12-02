<?php

    require_once 'global.php';

    try {
        $produto = [
            'nome' => filter_input(INPUT_POST, 'nome'),
            'preco' => filter_input(INPUT_POST, 'preco'),
            'quantidade' => filter_input(INPUT_POST, 'quantidade'),
            'categoria_id' => filter_input(INPUT_POST, 'categoria_id')
        ];

        $newProduto = new Produto();
        foreach ($produto as $field => $value) {
            $newProduto->$field = $value;
        }
    
        $newProduto->inserir();
        header("location:produtos.php");

    } catch (Exception $e) {
        Erro::trataErro($e);
    }
