<?php
    include '../conexion/conexion.php';

    $id=$_POST['id'];

    $cadenaEliminar="UPDATE PERSONAS SET ACTIVO='0' WHERE ID = '$id'";
    $eliminar=mysqli_query($conexion,$cadenaEliminar);

    echo "ok";
?>