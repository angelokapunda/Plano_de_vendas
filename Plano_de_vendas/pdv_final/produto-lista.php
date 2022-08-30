<?php
require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-produto.php");

?>

<?php 

    mensagem("success");

    $sql = "SELECT * FROM cadastro_produtos ORDER BY id DESC";
    $query=mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC); 
    
    
?>

<form action="produto-lista.php" method="post">
<table class="table table-striped table-bordered">
    <tr>
        <th>Nome</th>
        <th>Descriçao</th>
        <th>Preço</th>
    </tr>
    <?php 
     
        foreach ($resultado as $produto) :
            $nome = $produto['nome'];
            $descricao = $produto['descricao'];
            $preco = $produto['preco'];   
    ?>
    <tr>
        <td><?=$nome?></td>
        <td><?=$descricao?></td>
        <td><?=$preco?></td>
        <td><a class="btn btn-primary" href="altera-produto-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
        <td>
        <form action="remove-produto.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
        </td>
    </tr>
        <?php
        endforeach
        ?>
</table>
</form>
    

<? include("rodape.php"); ?>