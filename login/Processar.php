<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db ($conexao, "tutocrudphp");
?>
<html lang="pt-br">    
    <head>
        <meta charset="UTF-8">
        <title>cadastro</title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $inserir = "INSERT INTO usuarios (id, nome, usuario , senha) values (null, '$nome', '$user', '$pass');";
            mysqli_query ($conexao, $inserir) or die (mysqli_error($conexao));
            echo "Você foi cadastrado com sucesso. Clique <a href='login.html'>aqui</a>. para fazer log-in.";
        ?>    
    </body>
</html>