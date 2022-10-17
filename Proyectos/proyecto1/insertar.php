<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$asignatura=$_POST['asignatura'];
$tarea=$_POST['tarea'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO agenda(nombre, apellido, asignatura, tarea, fecha) VALUES('$nombre','$apellido','$asignatura','$tarea','$fecha')";
$query= mysqli_query($con,$sql);

if($query){

    Header("Location: agenda.php");
    
}else {
    
}

?>