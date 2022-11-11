<?php 

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['senha']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha) VALUES ('$nome','$senha')");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dark</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
     <section class="area-login">
        <div class="login">
            <div>
                <img src="imagens/logo.png" alt="Logo">
            </div>
            <form action="index.php" method="post">
                <input type="text" name="nome" placeholder="nome de usuário" autofocus>
                <input type="password" name="senha" placeholder="sua senha">
                <input type="submit" name="submit" value="entrar">
            </form>
            <p>Ainda não tem uma conta?<a href="#">Criar conta</a></p>
        </div>
     </section>
</body>
</html>