<?php

    session_start();
    include_once('../connect.php'); // incluyo el archivo connect de la base de datos

    function normalize ($info){ //toma la info del dato y lo limpia

        $info=trim($info); //elimina espacios en blanco al principio y al final
        $info=stripslashes($info);//elimina las barras inveritdas
        $info=htmlspecialchars($info); //evita que los caracteres especiales sean interpretados como codigo html

        return $info;
    }

    if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['email']) &&isset($_POST['password']) ){ // verifica si estos campos han sido enviados
        
        $name= normalize($_POST['name']);
        $lastName= normalize($_POST['lastName']);
        $email= normalize($_POST['email']);
        $password= normalize($_POST['password']);

        //confirman si los campos estan vacios o no, si estan vacios les saltara un msj de error
        if(empty($name)){
            header("Location: ../../page/signUp.php?error=name, is empty");
            exit();
        }elseif(empty($lastName)){
            header("Location: ../../page/signUp.php?error=last name, is empty");
            exit();
        }elseif(empty($email)){
            header("Location: ../../page/signUp.php?error=email, is empty");
            exit();
        }elseif(empty($password)){
            header("Location: ../../page/signUp.php?error=password, is empty");
            exit();
        }else{
            $consultaSQL= "SELECT*FROM usuarios WHERE email='$email'";
            $query= $connect->query($consultaSQL);

            if(mysqli_num_rows($query)>0){ // con mysqli_num_rows se obtiene la cantidad de filas de la consulta, si la consulta devuelve mas de una fila, el email ya existe
                header("Location: ../../page/signUp.php?error=email is already registered");
                exit();
            }

            else{// sino prepara la consulta y la ejecuta para insertarla en la base de datos
                $consultaSQL2="INSERT INTO usuarios (name, lastName, email, password) VALUES ('$name','$lastName','$email','$password')";
                $query2=mysqli_query($connect,$consultaSQL2);

                if($query2){
                    header("Location: ../../page/signIn.html");
                    exit();
                }else{
                    header("Location: ../../page/signUp.php?error=Error...");
                    exit();
                }
            }
        }

    }else{
        header("Location: ../../page/signUp.php");
        exit();
    }
?>