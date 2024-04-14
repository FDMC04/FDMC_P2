<?php
include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$cadenaInsert="INSERT INTO perfiles (nombre, descripcion, fechahora, activo, usuario)VALUES('$nombre','$descripcion','$fecha','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsert);
echo "ok";
?>