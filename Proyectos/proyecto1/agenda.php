<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM agenda";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agenda</title>
	<link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-5">

		<div class="row">

			<div class="col-md-3">
				<h1>Agenda estudiantil</h1>
				<form action="insertar.php" method="POST">

					<input type="text" name="nombre" class="form-control mb-3" placeholder="Agregue su nombre">
					<input type="text" name="apellido" class="form-control mb-3" placeholder="Agregue su apellido">
					<input type="text" name="asignatura" class="form-control mb-3" placeholder="Agregue el nombre de la asignatura">
					<input type="text" name="tarea" class="form-control mb-3" placeholder="Agregue la tarea de la asignatura">
					<input type="date" name="fecha" class="form-control mb-3" placeholder="Agregue la fecha de la asignatura">
					<input type="submit" value="AGREGAR" class="btn btn-primary">

				</form>
			</div>

			<div class="col-md-8">

				<h1 align="center">Tareas pendientes</h1> <br> <br>

				<table class="table">

					<thead class="table-success table-striped">

						<tr>

							<th>Nombre</th>
							<th>Apellido</th>
							<th>Asignatura</th>
							<th>Tarea</th>
							<th>Fecha</th>
							<th></th>
							<th></th>
						</tr>

					</thead>

					<tbody>
						<?php 

							while ($row=mysqli_fetch_array($query)) {

						?>
						<tr>

							<th> <?php echo $row['nombre'];?> </th>
							<th> <?php echo$row['apellido'];?> </th>
							<th> <?php echo$row['asignatura'];?> </th>
							<th> <?php echo$row['tarea'];?> </th>
							<th> <?php echo$row['fecha'];?> </th>
							<th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>	
						</tr>
						<?php

							}

						?>
					</tbody>

				</table>

			</div>

		</div>
		
	</div>

	<form>
		
	</form>
</body>
</html>