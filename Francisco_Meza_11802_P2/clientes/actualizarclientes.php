<?php
    include '../conexion/conexion.php';

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];
    $telefono=$_POST['telefono'];
    $codigopostal=$_POST['codigopostal'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $fechanacimiento=$_POST['fechanacimiento'];

    $cadenaUpdate="UPDATE clientes SET nombre ='$nombre', apaterno = '$apaterno', amaterno = '$amaterno', telefono = '$telefono', codigopostal = '$codigopostal', direccion = '$direccion', correo = '$correo', fechanacimiento = '$fechanacimiento', fechaalta = '$fecha', activo = '1', usuario = '1' WHERE id = '$id'";

    $actualizar=mysqli_query($conexion, $cadenaUpdate);
    echo "Ok";
?>