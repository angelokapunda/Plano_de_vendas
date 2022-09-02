<?php

function insereProduto($conexao, $nome, $descricao, $preco)  {
    $query = "insert into cadastro_produtos (nome, descricao, preco, data)values ('{$nome}', '{$descricao}',{$preco} ,NOW())";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "delete from cadastro_produtos where id = {$id}";
    return mysqli_query($conexao, $query);
} 

function buscaProduto($conexao, $id) {
    $query = "select * from cadastro_produtos wher id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}