<?php 
    
    require_once 'global.php';

    try {
        $atualizar = [
            'id' => filter_input(INPUT_POST, 'id'),
            'nome' => filter_input(INPUT_POST, 'nome'),
            'preco' => filter_input(INPUT_POST, 'preco'),
            'quantidade' => filter_input(INPUT_POST, 'quantidade'),
            'categoria_id' => filter_input(INPUT_POST, 'categoria_id')
        ];

        $produto = new Produto();

        foreach ($atualizar as $field => $value) {
            $produto->$field = $value;
        }
        
        $produto->atualizar();
        header("location:produtos.php");      
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
