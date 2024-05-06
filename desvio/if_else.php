<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $rodrigo1 = $_POST ['nota1'];
    $rodrigo2 = $_POST ['nota2'];
    $rodrigo3 = $_POST ['nota3'];
    $rodrigoT = 0 ;
    
    $rodrigoT = $rodrigo1 + $rodrigo1 + $rodrigo1; 

    if ($rodrigoT >= 6 ) {
        echo 'aprovado!!' ;
        echo '<p> A sua media foi: ' . $rodrigoT; 
    } else if ($rodrigoT = 5){
        echo 'recuperação, melhore' ;
        echo '<p> A sua media foi: ' . $rodrigoT; 
    } else {
        echo 'reprovado';
        echo '<p> A sua media foi: ' . $rodrigoT; 

    }





?>
</body>
</html>