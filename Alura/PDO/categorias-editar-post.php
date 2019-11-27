<?php

require_once 'global.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');

$categoria = new Categoria($id);
$categoria->nome = $nome;
$categoria->atualizar();

header("location:categorias.php?");