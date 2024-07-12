<?php
session_start();
require("connect.php");

if (isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $edad = $_POST['edad'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (empty($name) || empty($lastName) || empty($password)) {
        echo "You must complete all fields";
    } else {
        $updateUser = "UPDATE usuarios SET name='$name', lastName='$lastName', password='$password' WHERE id='$id'";
        mysqli_query($connect, $updateUser);
        header('Location: ../index.html');
        exit;
    }
} else {
    echo "The fields are empty";
}
?>
