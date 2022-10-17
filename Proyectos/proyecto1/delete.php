<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM agenda  WHERE $nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agenda.php");
    }
?>