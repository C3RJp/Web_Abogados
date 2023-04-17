<?php
$cedula=$_GET['cedula'];
include 'acciones/bd.php';
$conexion=conexion();
$datos=datos($conexion,$cedula);
$datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
      <form method="POST" enctype="multipart/form-data" action="acciones/registro.php">
        <h3 class="text-center"></h3>
        <table>
            <td>
            <label for="cedula">Cedula</label>
            <input name="cedula" type="number" min=0 placeholder="Numero de cedula">
            </td>
            <td>
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" placeholder="Su nombre">
            </td>
            <td>
            <label for="contrasena">Contraseña</label>
            <input name="contrasena" type="text" placeholder="Su contraseña">
            </td>
            <td>
            <label for="cargo">Cargo</label>
            <input name="cargo" type="text" placeholder="Su cargo">
            </td>
            <td>
            <label for="documento">documento</label>
            <input name="documento" type="file" placeholder="Su documento"><bd>
            </td>            
        </table>
        <a class="btn btn-primary " type="submit" href="">Registrar</a>
        <a class="btn btn-secondary" href="administracion.php">Regresar</a>
      </form>
      </div>
      <div class="m-auto w-75 mt-2 text-center">
        <?php
        
        ?>
      </div>
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>