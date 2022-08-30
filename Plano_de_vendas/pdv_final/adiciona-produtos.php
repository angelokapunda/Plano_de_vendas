<?php
require_once("cabecalho.php");
require_once("conexao.php");
require_once("busca-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];


if (insereProduto($conexao, $nome, $descricao, $preco, $categoria) ) { ?>
    <p class="alert-success">Produto <?= $nome?>, adicionado com sucesso!</p>
<?php
} else { 
    $msg = mysqli_error($conexao); ?>
    <p class="alert-danger">Produto <?= $nome?>, nao foi adicionado: <?= $msg ?></p>
<?php }

?>


<?php require_once("rodape.php"); ?>