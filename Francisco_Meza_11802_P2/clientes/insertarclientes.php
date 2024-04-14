<?php
    include '../conexion/conexion.php';

    // Variables post
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];
    $telefono=$_POST['telefono'];
    $codigopostal=$_POST['codigopostal'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $fechanacimiento=$_POST['fechanacimiento'];

    $cadenaInsert="INSERT INTO clientes (nombre, apaterno, amaterno, telefono, codigopostal, direccion, correo, fechanacimiento, fechaalta, activo,usuario)VALUES('$nombre', '$apaterno', '$amaterno', '$telefono', '$codigopostal', '$direccion', '$correo', '$fechanacimiento', '$fecha', '1', '1')";

    $insertar=mysqli_query($conexion,$cadenaInsert);
    echo "ok";
?>