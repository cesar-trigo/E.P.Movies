<?php

    session_start();
    if (isset($_SESSION["email"])){
        session_unset();
        session_destroy();
        header("location: ../index.html");
    }else{
        echo "You have not loged in yet";
        header("location: ../page/signIn.html");
    }

?>