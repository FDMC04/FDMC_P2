<?php
include '../conexion/conexion.php';
$datos=[];
$cadena="SELECT id, nombre, descripcion, fechahora, activo, usuario FROM perfiles WHERE activo = '1'";
$consulta=mysqli_query($conexion,$cadena);
while($row=mysqli_fetch_array($consulta)){
    $btnEliminar="<button type='button' class='btn btn-danger' onclick='eliminar($row[0])'>
        <i class='fa fa-trash' aria-hidden='true'></i>
    </button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "descripcion"=>$row[2],
        "fechahora"=>$row[3],
        "activo"=>$row[4],
        "usuario"=>$row[5],
        "opciones"=>$btnEliminar
    ];
}
echo json_encode($datos);
?>