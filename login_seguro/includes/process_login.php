<?php
    include_once 'db_connect.php';
    include_once 'functions.php';

    sec_session_start(); //Nossa segurança personalizada para iniciar uma sessão php

    if(isset($_POST['email'],$_POST['p'])) {
        $email = $_POST['email'];
        $password = $_POST['p']; // the hashrd password

        if(login($email, $password, $mysql)== true) {
            //login com sucesso
            header('location:../protected_page.php');
        }else{
            //falha de login
            header('location:../index.php?error=1');
        }
    }else {
        //as variáveis POST corretas não foram enviadas para esta página. 
        echo 'invalid Request';
    }
