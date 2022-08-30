<?php
require_once("cabecalho.php");
require_once("conexao.php");
require_once("logica-usuario.php");

verificaUsuario();

// $categorias = listaCategorias($conexao);


?>


<h1 class="text-center" >Faça o cadastro dos produtos</h1>
<form action="adiciona-produtos.php" method="post">
    <table class="table table-striped ">
        <tr>
            <td>Nome do produto:</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>Descrição do produto:</td>
            <td><input type="text" name="descricao" class="form-control"></td>
        </tr>
        <tr>
            <td>Preço do produto:</td>
            <td><input type="number" name="preco" class="form-control"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td>
                
                <select name="categoria" class="form-control">
                <option name ="categoria-id" value="1">Esporte</option>
                <option name ="categoria-id" value="2">Tecnologia</option>
                <option name ="categoria-id" value="3">Mobilidade</option>
                <option name ="categoria-id" value="4">Escolar</option>
                <option name ="categoria-id" value="5">Outros</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><button type="submit" class="btn btn-primary">Cadastrar produto</button></td>
        </tr>
    </table>
</form>