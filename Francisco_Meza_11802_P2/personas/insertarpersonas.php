<?php
    include '../conexion/conexion.php';

    // Variables post
    $nombre=$_POST['nombre'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $sexo=$_POST['sexo'];
    $curp=$_POST['curp'];

    $cadenaInsert="INSERT INTO personas (NOMBRE, AP_PATERNO, AP_MATERNO, SEXO, CURP, FECHAHORA, ACTIVO, USUARIO)VALUES('$nombre', '$ap_paterno', '$ap_materno', '$sexo', '$curp', '$fecha', '1', '1')";

    $insertar=mysqli_query($conexion,$cadenaInsert);
    echo "ok";
?>