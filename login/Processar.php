<!DOCTYPE html>
<?php
 $conexao = mysqli_connect("localhost", "root", ""); // cria uma variavel que armazena uma conexão com o mysqli
 mysqli_select_db($conexao, "tutocrudphp"); // essa conexão se encontra com outar conexão com o banco de dados
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"]; // cria uma variavel que armazena o valor recebido através do post
        $user = $_POST["user"]; // nome de usuario
        $pass = $_POST["pass"]; // senha

        $inserir = "insert into usuario (id, nome, usuario, senha) values (null, '$nome', '$user', '$pass');"; // variavel criada para armazenar uma linha de código de mysql

        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao)); 
        //cria uma consulta no banco de dados (mysqli_query($conexao, $inserir)), 
        //já o "or die" é uma forma de tratar o código caso ocorra um erro no mysqli_query, puxando a conexão novamente e apresentado uma mensagem de erro
        echo "Você foi cadastrado com sucesso. Clique <a href='login.html'>aqui</a> para fazer log-in.";
    ?>
</body>
</html>