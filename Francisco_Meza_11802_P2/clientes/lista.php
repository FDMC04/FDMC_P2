<?php
include '../conexion/conexion.php';
$datos=[];
$cadena="SELECT id,nombre,apaterno,amaterno,telefono,codigopostal,direccion, correo, fechanacimiento, fechaalta, activo, usuario FROM clientes where activo = '1'";
$consulta=mysqli_query($conexion,$cadena);
while($row=mysqli_fetch_array($consulta)){
    $btnEliminar="<button type='button' class='btn btn-danger' onclick='eliminar($row[0])'>
        <i class='fa fa-trash' aria-hidden='true'></i>
    </button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "apaterno"=>$row[2],
        "amaterno"=>$row[3],
        "telefono"=>$row[4],
        "codigopostal"=>$row[5],
        "direccion"=>$row[6],
        "correo"=>$row[7],
        "fechanacimiento"=>$row[8],
        "fechaalta"=>$row[9],
        "activo"=>$row[10],
        "usuario"=>$row[11],
        "opciones"=>$btnEliminar
    ];
}
echo json_encode($datos);
?>