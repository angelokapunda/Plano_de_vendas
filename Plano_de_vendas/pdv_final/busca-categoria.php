<?php

/*function listaCategorias($conexao) {
    $categorias = [];
    $query = "select * from categorias";
    $resulatado = mysqli_query($conexao, $query);
    while ($categorias = mysqli_fetch_assoc($resulatado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}