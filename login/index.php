<!DOCTYPE html>
<?php
     $conexao = mysqli_connect("localhost", "root", "");
     mysqli_select_db($conexao, "tutocrudphp"); // puxa uma conexão com o banco de dados
     session_start(); // inicia uma sessão

     if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) { 
        // cria uma condição na qual se o usuario ou a senha que estiver armazenado na variavel sessão for adiferente de setada(ou existente) ela envia diretamente para a página de login 
        header("Location: login.html");
        exit;
     }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h3> Logado. <a href="logout.php">Logout</a></h3>
</body>
</html>