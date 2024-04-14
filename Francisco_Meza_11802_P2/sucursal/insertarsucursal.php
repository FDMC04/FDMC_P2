<?php
    include '../conexion/conexion.php';

    // Variables post
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    $cadenaInsert="INSERT INTO sucursal (nombre, direccion, telefono, fecha, activo, usuario)VALUES('$nombre', '$direccion', '$telefono', '$fecha', '1', '1')";

    $insertar=mysqli_query($conexion,$cadenaInsert);
    echo "ok";
?>