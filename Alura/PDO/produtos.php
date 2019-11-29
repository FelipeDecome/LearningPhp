<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>

<?php 

    try {
        $lista = Produto::listar();
        //var_dump($lista);
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>

<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Crair Novo Produto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th class="acao">Editar</th>
                <th class="acao">Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $item): ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['nome'] ?></td>
                    <td><?php echo $item['preco'] ?></td>
                    <td><?php echo $item['quantidade'] ?></td>
                    <td><?php echo $item['categoria_nome'] ?></td>
                    <td><a href="/produtos-editar.php?id=<?php echo $item['id'] ?>" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>
