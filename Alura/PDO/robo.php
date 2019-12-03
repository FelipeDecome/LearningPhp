<?php 

require_once 'global.php';

try {
    
    for($i = 0; $i < 10; $i++){
        $tipo_roupa = ['Blusa', 'Camisa', 'Camiseta', 'Bermuda', 'Calça', 'Jaqueta'];
        $sexo_roupa = ['Masculina', 'Feminina'];
        $cor_roupa  = ['Preta', 'Vermelha', 'Azul', 'Amarela', 'Verde', 'Branca', 'Marrom', 'Rosa'];

        $tipo_index = rand(0, 5);
        $sexo_index = rand(0, 1);
        $cor_index  = rand(0, 7);
        $preco = rand(40, 80);
        $quantidade = rand(10, 250);

        $roupa = $tipo_roupa[$tipo_index] . ' ' . $sexo_roupa[$sexo_index] . ' ' . $cor_roupa[$cor_index];

        $produto = [
            'nome' => $roupa,
            'preco' => $preco,
            'quantidade' => $quantidade,
            'categoria_id' => 8
        ];

        $newProduto = new Produto();

        foreach ($produto as $field => $value) {
            $newProduto->$field = $value;
        }

        //$newProduto->inserir();
    }

} catch (Exception $e) {
    Erro::trataErro($e);
}