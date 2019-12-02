<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>

<?php 

    try {
        $categoriaLista = Categoria::listar();
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>
<div class="row">
    <div class="col-md-12">
        <h2>Criar Novo Produto</h2>
    </div>
</div>
<?php if (count($categoriaLista) > 0): ?>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input name="preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input name="quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria do Produto</label>
                <select name="categoria_id" class="form-control">
                    <?php foreach ($categoriaLista as $categoria): ?>
                    <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php else: ?>
<div class="row">
    <div class="col-md-4">
        <p>Nenhuma categoria cadastrada. </p>
         <a href="categorias-criar.php" class="btn btn-info btn-block">Criar nova categoria</a>
    </div>
</div>
<?php endif ?>

<?php require_once 'rodape.php' ?>
