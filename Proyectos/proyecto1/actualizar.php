<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM agenda WHERE nombre='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" name="nombre" class="form-control mb-3" placeholder="Agregue su nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" name="apellido" class="form-control mb-3" placeholder="Agregue su apellido" value="<?php echo $row['apellido']  ?>">
                                <input type="text" name="asignatura" class="form-control mb-3" placeholder="Agregue el nombre de la asignatura" value="<?php echo $row['asignatura']  ?>">
                                <input type="text" name="tarea" class="form-control mb-3" placeholder="Agregue la tarea de la asignatura" value="<?php echo $row['tarea']  ?>">
                                <input type="date" name="fecha" class="form-control mb-3" placeholder="Agregue la fecha de la asignatura" value="<?php echo $row['fecha']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>