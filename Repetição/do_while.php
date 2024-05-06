<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doumecnt</title>
</head>
<body>
<?php   
    $rodrigo = 1;
    $antonio = $_POST ['num'];    
    Echo "<p>Resultados da Tabuada </p>";
    do {
        echo $antonio;
        echo ' x ';
        echo $rodrigo;
        echo ' = ';
        echo $rodrigo * $antonio;
        $rodrigo++;
           echo '<p>';
    } while ($rodrigo <= 10);

?>
</body>
</html>