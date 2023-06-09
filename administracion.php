<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <title>Administrador</title>
</head>
<body>    
      <!-- Barra de navegacion -->
      <div>
        <nav class="navbar bg-white">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/Logo.jpeg" alt="Logo" width="200" height="90" class="d-inline-block align-text-top">
            </a>
            <h2>admin</h3>
          </div>
        </nav>
      </div>
      <!-- Cuerpo de pagina -->
      <!-- formulario -->
      <div class="card m-auto mb-3 w-25">
      <form class="m-5 mt-3" method="POST" enctype="multipart/form-data" action="acciones/registro.php">
        <h2 class="text-center " >Registro</h2>
        <div class="mt-1 mb-1 w-50">
            <label for="cedula">Cedula</label>
            <input name="cedula" type="number" min=0 placeholder="Numero de cedula">
       </div>     
        <div class="mt-1 mb-1 w-50">
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" placeholder="Su nombre">
        </div>
        <div class="mt-1 mb-1 w-50">
            <label for="contrasena">Contraseña</label>
            <input name="contrasena" type="text" placeholder="Su contraseña">
        </div>
        <div class="mt-3 mb-1 w-50">
            <select name="cargo">
            
              <option value="abogado" selected>Abogado</option>
              <option value="aux">Auxiliar</option>
            </select>
        </div>
        <div class="mt-1 mb-1 w-50">
            <label for="documento">documento</label>
            <input name="documento" type="file" >
        </div> 

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
      </form>
      </div>
      <!-- tabla -->
      <div class="container-fluid">
        <table class="table table-light table-striped">
            <thead>
                <tr>
                <th>Activo</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>cargo</th>
                <th>Documentos</th>
                <th>Acciones</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
              <?php 
                include "acciones/bd.php";
                $conexion=conexion();
                $query=listar($conexion);
                  while($fila=mysqli_fetch_row($query))
                  {
                    $activo=$fila[0];
                    $cedula=$fila[1];
                    $nombre=$fila[2];
                    $contrasena=$fila[3];
                    $cargo=$fila[4];
                    $documento=$fila[5];

                    $documento="<img width='50' src='img/expediente.png'>";
              ?>
                <tr>
                <td><?php echo $activo?></td>
                <td><?php echo $cedula?></td>
                <td><?php echo $nombre?></td>
                <td><?php echo $contrasena?></td>
                <td><?php echo $cargo?></td>
                <td><?php echo $documento?></td>
                <td><a class="btn btn-primary" href="editar.php?cedula=<?php echo $cedula?>">editar</a></td>
                <td><a class="btn btn-danger" href="acciones/borrar.php?cedula=<?php echo $cedula?>">desactivar</a></td>
                </tr>

                <?php 
                  }
                ?>
            </tbody>
        </table>
      </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>