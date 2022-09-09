<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>

    <form method="post" action="Lab4.1.php">
        <h3>Aplicación web con imagen dinámica</h3>
         <p>Desempeño de ventas realizadas <input type="text" name="valorV" />
         <input type="submit" value="Calcular" /></p>
    </form>

    <?php 
        echo "<br>";
        $valor = (int)$_POST['valorV'];
        $porcentaje = ($valor / 100) * 100;
        echo "<br>";
        if($porcentaje >= 81){

            echo "<img src='/desarrollo7/Lab4/Lab41/img/green.PNG'>";

        }elseif($porcentaje <=80 && $porcentaje>60){

            echo "<img src='/desarrollo7/Lab4/Lab41/img/yellow.PNG'>";
            
        }elseif($porcentaje<=60){

            echo "<img src='/desarrollo7/Lab4/Lab41/img/red.PNG'>";
        }
    ?>
    
</body>
</html>