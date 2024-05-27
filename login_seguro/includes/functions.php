<?php

include_once 'psl-config.php';

function sec_session_starr(){

    $session_name='sec_session_id'; // Estabeleça um nome personalizado para a sessão

    $secure= SECURE; 
    
    // Isso impede que o JavaScript possa acessar a identificação da sessão.

    $httponly = TRUE; 
    
    // Assim você força a sessão a usar apenas cookies.

    if (ini_set('session.use_only_cookies',1)=== FALSE){
        header ("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit():
    }

    // Obtém params de cookies atualizados.

    $cookieParams = session_get_cookie_params();



}





?>