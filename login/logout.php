<?php
    session_start(); // starta uma sessão
    session_destroy(); // destroi uma sessão
    header("Location: login.html"); // envia diretamente para a página de login
?>