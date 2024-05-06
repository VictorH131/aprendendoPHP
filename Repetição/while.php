<<?php

    $quant = $_POST ['quant'];
    $i = 0;

    echo 'Digite o email das pessoas';

    while ($i <= $quant ){
        echo " Email do convidado ".$i.": <input type='email' name='email'/><br><br>";
        echo "<input type='submit' value='enviar'> "
        $i++;
    }





?>