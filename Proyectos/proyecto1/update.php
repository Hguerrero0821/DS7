<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$asignatura=$_POST['asignatura'];
$tarea=$_POST['tarea'];
$fecha=$_POST['fecha'];

$sql="UPDATE agenda(nombre, apellido, asignatura, tarea, fecha) SET nombre='$nombre',apellido='$apellido', asignatura ='$asignatura', tarea='$tarea', fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        
        Header("Location: agenda.php");
    }
?>