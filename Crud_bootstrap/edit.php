<?php
    require_once 'connect.php';
    require_once 'header.php';
?>

<div class="conteiner">
    <?php
        // da a opção de modificar/updatear
        if(isset($_POST['update'])){
            if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address'])) || empty($_POST['contact']){
                echo "Please fillout all required fields";
            }else{
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];

                $sql="UPDATE user SET firstname='{$firstnam}', lastname='{$lastname}', 
                 address='{$address}', contact='{$contact}' WHERE user_id=" . $_POST['userid'];
                
                if($con->query($sql) === TRUE){
                    echo "<div class='alet alert-success'>Successfully updated user</div>";
                }else{
                    echo "<div class='alert alert-danger'>Error: There was an error while updating user info </div>";
                }
            }
        }
        $id=isset($_GET['id']) ? (int) $_GET['id'] : 0;

        $sql="SELECT * FROM users WHERE user_id=($id)";
        $result= $con->query($sql);
        
        if($result->num_rows<1){
            header('Location: index.php');
            exit;
        }

        $row=$result->fetch_assoc();
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">



