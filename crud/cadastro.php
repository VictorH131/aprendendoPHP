<?php

    $obj_mysqli = new mysqli("127.0.0.1", "root", "", "tutocrudphp");

    if ($obj_mysqli->connect_errno)
    {
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    mysqli_set_charset($obj_mysqli, 'utf8');

    $id = -1;
    $nome = "";
    $email = "";
    $cidade = "";
    $uf = ";"

    //validando a existencia dos dados
    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["cidade"]) && isset($_POST["uf"])) 
    {
        if(empty($_POST["nome"]))
            $erro = "campo nome obrigatorio";
        else
        if(empty($_POST["email"]))
            $erro = "campo e-mail obrigatorio";
        else
        {
            //vamos realizar o cadastro ou alteração dos dados enviados.
            $id = $_POST["id"];
            $nome = $_POST{"nome"};
            $email = $_POST{"email"};
            $cidade = $_POST{"cidade"};
            $uf = $_POST{"uf"};

            if($id == -1)
            {
                $stmt = $obj_mysqli-> prepare("insert into 'client' ('nome', 'email','cidade','uf') values (?,?,?,?)");
                $stst->bind_param('ssss', $nome, $email, $cidade, $uf);

                if(!$stmt->execute())
                {   
                    $erro = $stmt->error; 
                }
                else
                {
                 header("location:cadastro.php");
                 exit;
                }
            }
            else
            if(is_numeric($id) && $id >= 1)
            {
                $stmt = $obj_mysqli->prepare("UPDATE `cliente` SET `nome`=?, `email`=?, `cidade`=?, `uf`=? WHERE id = ? ");
                $stmt->bind_param('ssssi', $name, $email, $cidade, $uf, $id);

                if(!$stmt->execute())
                {
                    $erro = $stmt->error;
                }
                else
                {
                    header("location:cadastro.php")
                    exit;
                }
            }
            else
            {
                $erro = "numero invalido";
            }
        }
    }    
    else
    //incluimos este bloco, onde vamos verificar a existencia do id passado...
    if(isset($_GET["id"]) && is_numeric($_GET["id"]))
    {
        //..,pegamos aqui o id passado...
        $id = (int)$_get["id"];

        //...montamos a consulta que será realizada




    }



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP, de forma simples e facil</title>
</head>
<body>
    <?php
    if(isset($erro))
        echo '<div style="color:#f00">'.$erro.'</div><br/><br/>';
    else
    if(isset($sucesso))
        echo '<div style="color:#f00">'.$esucesso.'</div><br/><br/>';

    ?>
    <form action="<?=$_server["PHP_SELF"]?>" method="POST">
        Nome:<br/>
        <input type="text" name="nome" placeholder="Qual seu nome?"><br/><br/>
        E-mail:<br/>
        <input type="email" name="email" placeholder="Qual seu E-mail?"><br/><br/>
        Cidade:<br/>
        <input type="text" name="cidade" placeholder="Qual sea cidade?"><br/><br/>
        UF:<br/>
        <input type="text" name="uf" size="2" placeholder="UF?">
        <br/><br/>
        <input type="hidden" value="-1" name="id">
        <botton type="submit">Cadastrar</button>
    </form>
    <br>
    <br>
    <table width="400px" border="0" cellspacing="0"> 
        <tr>
            <td><strong>#</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Cidade</strong></td>
            <td><strong>UF</strong></td>
            <td><strong>#</strong></td>
        </tr>
    <?php
    $result = $obj_mysqli->query("Select * From 'client'");
    while ($aux_query = $result->fetchassoc())
    {
        echo '<tr>';
        echo '  <td>'.$aux_query["id"].'</td>';
        echo '  <td>'.$aux_query["Nome"].'</td>';
        echo '  <td>'.$aux_query["Email"].'</td>';
        echo '  <td>'.$aux_query["Cidade"].'</td>';
        echo '  <td>'.$aux_query["UF"].'</td>';
        echo '  <td><a href="'.$_server["PHP_SELF"].'?id='.$aux_query["id"].'">Editar</a></td>';
        echo '</tr>';   
    }
    ?>
    </table>
</body>
</html>