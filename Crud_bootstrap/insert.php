<?php
    // conectando a outras paginas
    require_once 'connet.php';
    require_once 'header.php';
?>

<div class="conteiner"> <!--colocando para poder adicinar novos usuarios -->
    <?php
       
        if(isset($_POST['addnew'])){
            if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']) ){
                echo "Please fillout all required fields";    
            }else{
                $firstname = $_POST['firtsname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
            
                $sql = "INSERT INTO users (firstname, lastname, address, contact) 
                values ('$firstname', '$lastname', '$address', '$contact') ";    
                
                if($con->query($sql)=== TRUE){
                    echo "<div class='alert alert-success'>Successfully added new user</div>";
                }else{
                    echo "<div class='alert alert-danger'> Error: THERE was an error while adding new user</div>";
                }
            }                                             
        }
    ?>
    <div class="row">
        <div class="col-md-6-col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphipon-plus"></i>&nbsp;Add New User</h3>
                <form action="" method="POST">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="Firstname" name="firstname" class="form-control"><br>

                    <label for="lastname">lastname</label>
                    <input type="text" id="lastname" name="lastname" class="form-control"><br>

                    <label for="address">Address</label>
                    <textarea rows="4" name="address" class="form-control"></textarea><br>
                    
                    <label for="contact">contact</label>
                    <input type="text" id="contact" name="contact" class="form-control"><br>
                    <br>
                    <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                </form>
            </div>
        </div>
    </div>    
</div>
<?php

        require_once "footer.php";
    