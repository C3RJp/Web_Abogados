<?php
$localhost="localhost";
$user="root";
$pass="";
$BD="empresa";

$nombre=$_POST['nombre'];
$nombre = preg_replace('([^A-Za-z0-9])', '', $nombre);
$contra=$_POST['cont'];
$contra = preg_replace('([^A-Za-z0-9])', '', $contra);

$conexion=mysqli_connect($localhost,$user,$pass,$BD);
$read="SELECT * FROM `empleados`";
$datos=mysqli_query($conexion,$read);

while ($fila = mysqli_fetch_row($datos)) 
{
    //echo $fila[0],"/",$fila[1],"/",$fila[2],"/",$fila[3],"/",$fila[4],"<br>";

    if ($nombre == $fila[2] && $contra == $fila[3]) 
    {
        switch ($fila[4]) 
        {
            case $fila[4]=="administrador":
                echo"paso";
                header('Location: ../administracion.php');
                break;
            case $fila[4]=="abogado":
                header('Location: ../abogado.php');
                break;
        } 
        exit();
    }
    else
    {
        header('Location: ../Index.html');
    }
}
mysqli_close($conexion);
?>