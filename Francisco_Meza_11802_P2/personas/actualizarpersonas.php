<?php
    include '../conexion/conexion.php';

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $sexo=$_POST['sexo'];
    $curp=$_POST['curp'];

    $cadenaUpdate="UPDATE personas SET NOMBRE ='$nombre', AP_PATERNO = '$ap_paterno', AP_MATERNO = '$ap_materno', SEXO = '$sexo', CURP = '$curp', FECHAHORA = '$fecha', ACTIVO = '1', USUARIO = '1' WHERE ID = '$idPersona'";

    $actualizar=mysqli_query($conexion, $cadenaUpdate);
    echo "Ok";
?>