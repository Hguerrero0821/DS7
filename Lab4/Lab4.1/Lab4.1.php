<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
    <h3>Aplicación web con imagen dinámica</h3>
    <p>Desempeño de ventas realizadas <input type="text" name="valorV" /></p>
    
    <?php 
        echo "<br>";
        $valor = (int)$_POST['valorV'];
        $porcentaje = ($valor / 100) * 100;
        Header (Content-type: imgage/png);
        echo "<br>";
        if($porcentaje >= 80){
            
            $img = imagecreatefrompng(img/green.PNG);
            imagepng ($img);
        }elseif($porcentaje >= 50 && $porcentaje<=79){
            $img = imagecreatefrompng(img/yellow.PNG);
            imagepng ($img);
        }else{
            $img = imagecreatefrompng(img/red.PNG);
            imagepng ($img);
        }
    ?>
    
</body>
</html>