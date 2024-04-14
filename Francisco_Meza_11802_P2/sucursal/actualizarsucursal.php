<?php
    include '../conexion/conexion.php';

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $activo=$_POST['activo'];
    $usuario=$_POST['usuario'];

    $cadenaUpdate="UPDATE sucursal SET nombre ='$nombre', direccion = '$direccion', telefono = '$telefono', activo = '$activo', usuario = '$usuario', FECHAHORA = '$fecha', ACTIVO = '1', USUARIO = '1' WHERE ID = '$idSucursal'";

    $actualizar=mysqli_query($conexion, $cadenaUpdate);
    echo "Ok";
?>