<?php

if (isset($_GET["id"])){
  require("connect.php");
    
  if (!empty($_GET["id"])){

    $id=$_GET["id"];
    $query= "DELETE FROM usuarios WHERE id='$id'"; 
    mysqli_query($connect,$query);
    header('Location: ../page/usersTable.php');

  }else{
    echo "No existe el registro";
  header('Location: ../page/signIn.html'); 
  }
}else{
  echo "No existe el id";
  header('Location: ../page/signIn.html'); 
}