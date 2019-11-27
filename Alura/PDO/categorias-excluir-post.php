<?php

require_once 'global.php';

$id = filter_input(INPUT_GET, 'id');
$categoria = new Categoria($id);
$categoria->deletar();

header("location:categorias.php");
