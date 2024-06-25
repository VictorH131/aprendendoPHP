<?php

    include_once "connect.php"; 
    
    if(isset($_POST['register'])){
      if (empty($_POST['nome']) || empty($_POST['telefone']) || empty($_POST['rua']) || empty($_POST['cidade']) || empty($_POST['cpf'])) {
        echo "Por favor, preencha todos os campos necessarios.";
      } else {
        
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $genero = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $cpf = $_POST['cpf_cnpj'];

        $sql = "INSERT INTO `clientes` (nome_cli, telefone, rua, genero, cidade, cpf) VALUES ('$nome', '$telefone', '$rua', '$genero', '$cidade', '$cpf')";
        
        if (mysqli_query($conn, $sql)) {
          echo "cliente registrado";
        } else {
          echo "Error";
        }
      }
    }