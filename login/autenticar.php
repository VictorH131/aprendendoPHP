<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tutocrudphp"); // puxa uma conexão com o banco de dados
    session_start(); // inicia uma sessão
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script language="javascript"> // abertura de um script para a linguagem de javascript

        function sucesso(){ // abertura e criação de uma função chamada sucesso
            setTimeout("window.location='index.php'", 4000); 
            // se esta função for chamada após uma série de fatores, o timer de 4 segundos será iniciado para a pagina determinada
        }
        function failed(){ // abertura e criação de uma função chamada failed
            setTimeout("window.location='login.html'", 4000);  
            // se esta função for chamada após uma série de fatores, o timer de 4 segundos será iniciado para a pagina determinada
        }
    </script>
</head>
<body>
    <?php
        $user = $_POST["user"]; // armazena o nome de usuario 
        $pass = $_POST["pass"]; // armazena a senha

        $consulta = mysqli_query($conexao, "select * from usuario where usuario = '$user' and senha = '$pass'") or die (mysqli_error($conexao));
        // cria uma variavel que chama a variavel conexão e junto um select como consulta, e caso der erro chama uma mensagem de erro

        $linhas = mysqli_num_rows($consulta); 
        // cria uma variavel que armazena um numero de linhas que sera retornada através da consulta

        if($linhas == 0) { // cria uma condição na qual se o valor de linhas for igual a 0 gera uma mensagem de erro caso o login falhe
            echo "O login falhou. Você será redirecionado para a página de login em 4 segundos.";
            echo "<script language='javascript'>failed()</script>";
        } else { // cria uma coondição que se na anterior não for verdadeira,
            // então cria uma variavel chamada sessão que armazena o post do nome de usuario e a senha e redireciona para uma página de sucesso se o nome de usuario e a senha forem aceitas
            $_SESSION["usuario"]=$_POST["user"];

            $_SESSION["senha"]=$_POST["pass"];
            echo "Você foi logado com sucesso. Redirecionando em 4 segundos.";
            echo "<script language='javascript'>sucesso()</script>";
        }
    ?>
</body>
</html>