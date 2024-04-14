<?php
include '../conexion/conexion.php';
$datos=[];
$cadena="SELECT id,nombre,direccion,telefono,fecha,activo,usuario FROM sucursal where activo = '1'";
$consulta=mysqli_query($conexion,$cadena);
while($row=mysqli_fetch_array($consulta)){
    $btnEliminar="<button type='button' class='btn btn-danger' onclick='eliminar($row[0])'>
        <i class='fa fa-trash' aria-hidden='true'></i>
    </button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "direccion"=>$row[2],
        "telefono"=>$row[3],
        "fecha"=>$row[4],
        "activo"=>$row[5],
        "usuario"=>$row[6],
        "opciones"=>$btnEliminar
    ];
}
echo json_encode($datos);
?>