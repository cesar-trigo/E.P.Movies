<?php //conexion a la base de datos
$host="localhost";
$user="root";
$pass="";
$baseDatos="codoacodo";

//variablees de la base de datos HOST
/* $host="localhost";
$user="id22368874_tinto01";
$pass="Php@4457";
$baseDatos="id22368874_cacphp"; */


$connect = mysqli_connect($host, $user, $pass, $baseDatos);

if(!$connect){
    echo "conexion fallida";
}
?>