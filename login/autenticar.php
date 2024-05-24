<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "tutocrudphp");
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script language="javascript">

            funcion sucesso() {
                setTimeout("windows.location='index.php'", 4000);
            }
            function failed()(
                setTimeout("windows.location='login.html'", 4000);
            )
        </script>
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));

            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"O login falhou. Você será redirecionado para a página de login em 4 segundos.";
                echo"<script language='javascrip'>failed()</script>";

            } else {
                $_SESSION["usuario"]=$_POST["user"];

                $_SESSION["senha"]=$_POST["pass"];
                echo"Voce foi logado com sucesso. Redirecionamento em 4 segundos.";
                echo"<script language='javascrip'>sucesso()</script>";
            }
        ?>
    </body>
</html>