<?php
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
$cargo=$_POST['cargo'];
$documento=$_FILES['documento'];

// var_dump($documento);

// $tipo=$documento['type'];
// $categoria=explode('.',$documento['name'])[1];
// echo '<br>';
//  var_dump($categoria);

 $tmp_name=$documento['tmp_name'];
 $contenido_archivo=file_get_contents($tmp_name);
 $documentoBLOB=addslashes($contenido_archivo);
 //echo $documentoBLOB;

 include '../acciones/bd.php';
 $conexion=conexion();
 $query=insertar($conexion, $cedula,$nombre,$contrasena,$cargo,$documentoBLOB);
 if($query)
 {
    header('location: ../administracion.php?insertar=success');
 }
 else{header('location: ../administracion.php?insertar=error');}
?>