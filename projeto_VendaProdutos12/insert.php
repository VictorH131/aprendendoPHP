<?php

    include_once "connect.php"; 
  
    $sql = "INSERT INTO clientes (name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);