<?php
session_start();
include_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($email)) {
        echo "Por favor, ingrese su email";
    } elseif (empty($password)) {
        echo "Por favor, introduce tu contraseña.";
    } else {   

        $query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $email;
            header("Location: ../index.html");
            exit();
        } else {
            echo "Email o contraseña incorrectos.";
        }
    }
}
?>
