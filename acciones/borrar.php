<?php
$cedula=$_GET['cedula'];
include '../acciones/bd.php';
$conexion=conexion();
$query=eliminar($conexion,$cedula);
if($query)
{
    header('Location: ../administracion.php?eliminar=success');
}
else{header('Location: ../administracion.php?eliminar=error');}
?>