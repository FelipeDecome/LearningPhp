<?php

    require_once 'global.php';

    try{
        $id = filter_input(INPUT_GET, 'id');
        $categoria = new Categoria($id);
        $categoria->deletar();
        header("location:categorias.php");
    } catch(Exception $e) {
        Erro::trataErro($e);
    }

