<?php


date_default_timezone_set('America/Monterrey');
$fecha=date('Y-m-d H:i:s');

$servername="localhost";//o la IP del servidor de base de datos
$username="root";
$password="";
$dbname="idgs8";

//creamos la conexion a la base de datos
$conexion=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
    printf(mysqli_connect_error());
}
mysqli_set_charset($conexion, 'utf8');
?>