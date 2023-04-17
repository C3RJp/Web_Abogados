<?php
function conexion()
{
$localhost="localhost";
$user="root";
$pass="";
$BD="empresa";
$con=mysqli_connect($localhost,$user,$pass,$BD);
return $con;
}

function listar($conexion)
{
    $sql="SELECT * FROM `empleados`";
    $query=mysqli_query($conexion,$sql);
    return($query);
}

function insertar($conexion,$cedula,$nombre,$contrasena,$cargo,$documentoBLOB)
{
$sql="INSERT INTO `empleados`(`cedula`, `nombre`, `contrasena`, `cargo`, `documento`) VALUES ('$cedula','$nombre','$contrasena','$cargo','$documentoBLOB')";
$query=mysqli_query($conexion,$sql);
return $query;
}

function eliminar($conexion, $cedula)
{
    $sql="DELETE FROM `empleados` WHERE cedula=$cedula";
    $query=mysqli_query($conexion,$sql);
    return($query);
}

function datos($conexion,$cedula)
{
    $sql="SELECT `documento` FROM `empleados` WHERE cedula=$cedula";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return($datos);
}
?>