<?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    
    sec_session_start();
    
    if (login_check($mysqli) == true) {    
        $logged = 'in';
    } else {    
        $logged = 'out';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />        
        <script type="text/JavaScript" src="js/sha512.js"></script>         
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php          
            if (isset($_GET['error'])) {            
            echo '<p class="error">Erro ao fazer o login!</p>';        
            }
        ?>

        <form action="includes/process_login.php" method="post" name="login_form">                                  
        
            Email: <input type="text" name="email" />            
        
            Password: <input type="password"                              
                name="password"                              
            id="password"/>            
            <input type="button"                    
                value="Login"                    
            onclick="formhash(this.form, this.form.password);" />         
        </form>

        <p>if you don't have a login, please <a href="register.php">register</a></p> 
        <p>if you are done, please <a href="includes/logout.php">logout</a>.</p>
        <p>you are currently logger<?php echo $logged ?>.</p>

    </body>
</html>