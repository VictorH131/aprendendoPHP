<?php
    //add variavels
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "samueldb";
    $con = mysqli_connect ($localhost, $username, $password, $dbname); //conectando com o db
    if($con->connect_error){    die("connection failed:".$con->connect_error); } //se de erro falhar
