<?php
require_once("cabecalho.php");
require_once("conexao.php");
require_once("busca-produto.php");
require_once("logica-usuario.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucesso!"; 
header("location: produto-lista.php");
die();
?>
