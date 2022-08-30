<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("mensagem.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Venda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/meu_estilo.css">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Plano de Vendas</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="produto-formulario.php">Cadastrar produtos</a></li>
                <li><a href="produto-lista.php">Lista de produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="principal">

<?php 
mensagem("success");
mensagem("danger");
?>