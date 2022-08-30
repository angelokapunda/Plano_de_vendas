<?php
require_once("conexao.php");
require_once("busca-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if($usuario==null) {
    $_SESSION["danger"] = "Usuário ou senha invalida!";
    header("location: index.php");
}else {
    $_SESSION["success"] = "Usuário logado com sucesso!";
    logaUsuario($usuario["email"]); 
    header("location: index.php");
}
dei();