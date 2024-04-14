<?php
include '../conexion/conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$cadenaUpdate="UPDATE perfiles SET nombre = '$nombre', descripcion = '$descripcion', fechahora = '$fecha', activo = '1', usuario = '1' WHERE id = '$id'";

$actualizar=mysqli_query($conexion,$cadenaUpdate);
echo "Ok";
?>