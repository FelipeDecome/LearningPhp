<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>
<?php 

    try {
        $id = filter_input(INPUT_GET, 'id');
        $categoria = new Categoria($id);

        $categoria->carregarProdutos();

        $produtos = $categoria->produtos;
    } catch (Exception $e) {
        Erro::trataErro($e);
    }


 ?>
<div class="row">
    <div class="col-md-12">
        <h2>Detalhe da Categoria</h2>
    </div>
</div>

<dl>
    <dt>ID</dt>
    <dd><?php echo $categoria->id ?></dd>
    <dt>Nome</dt>
    <dd><?php echo $categoria->nome ?></dd>
    <dt>Produtos</dt>
    <?php if (count($produtos) > 0): ?>
    <dd>
        <ul>
            <?php foreach ($produtos as $produto): ?>
                <li><a href="produtos-editar.php?id=<?php echo $produto['id'] ?>"><?php echo $produto['nome'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </dd>
    <?php else: ?>
        <p>Nenhum Produto Cadastrado nessa Categoria.</p>
    <?php endif ?>
</dl>
<?php require_once 'rodape.php' ?>
