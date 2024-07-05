<?php //conexion a la base de datos
$host="";
$user="";
$pass="";
$baseDatos="";

$connect = mysqli_connect($host, $user, $pass, $baseDatos);

if(!$connect){
    echo "conexion fallida";
}
?>