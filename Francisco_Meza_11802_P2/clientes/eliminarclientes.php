<?php
    include '../conexion/conexion.php';

    $id=$_POST['id'];

    $cadenaEliminar="UPDATE clientes SET activo='0' WHERE id = '$id'";
    $eliminar=mysqli_query($conexion,$cadenaEliminar);

    echo "ok";
?>