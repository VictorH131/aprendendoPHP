<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprendendo php</title>
</head>
<body>
    <?php
        echo "<h1>Ola mundo</h1>";
        
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $data = $_POST['data'];
        $genero = $_POST['genero'];



        echo $nome;
        echo '<P>do email  ' . $email;
        echo '<P>voce mora na '. $endereco;
        echo '<P> seu cpf é ' . $cpf;
        echo '<P> seu genero é ' . $sexo;
        echo '<P> a sua data de nacimento é ' . $data;
        echo '<P> a sua data de nacimento é ' . $generoo;


    ?>
</body>
</html>
