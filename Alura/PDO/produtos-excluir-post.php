<?php 

    require_once 'global.php';

    try {
        $id = filter_input(INPUT_GET, 'id');
        $produto = new Produto($id);
        $produto->deletar();

        header("location:produtos.php");
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
