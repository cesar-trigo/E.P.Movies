
<?php
session_start();
 require ("connect.php");

     if( isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) ){    
       
        $id= $_POST['id'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $edad = $_POST['edad'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($name) || empty($lastName) || empty($password)  ){

            echo "YOU MUST COMPLETE ALL FIELDS"; ?>
<?php 
    
        }else{
           

            $updateUser = "update usuarios set  name='$name', lastName='$lastName', password='$password' where id='$id'";

            mysqli_query($connect,$updateUser);
            header('Location: ../index.html');

                exit;

        }
    }else{
       
       echo "THE RECORD COULD NOT BE MODIFIED";?>
 <?php
 
    }