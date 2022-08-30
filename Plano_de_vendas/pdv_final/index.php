<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");
?>
 

<h1>Bem Vindo!</h1>

<?php if(usuarioEstaLogado()){ ?>
    <p class="text-success">Voce está logado como <?=usuarioLogado()?>. <a href="logout.php">Deslogar</a></p>
<?php } else {?>

<h2>Faça o login </h2>

<form action="login.php" method="post">
        <table class = "table">
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" class="form-control"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Iniciar Sessão</button></td>
            </tr>
            <tr>
            <td><a href="cadastro.php" class="link_cadastro ">cadastrar usuario</a></td>
            </tr>
        </table>
    </form>
    <?php }?>

<?php require_once("rodape.php");