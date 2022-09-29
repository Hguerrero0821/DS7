<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.3</title>
</head>

<body>
    <form name="formularioDatos" method="POST" action="lab83.php">
        <p>CALCULO DEL VOLUMEN DE UN CILINDRO</p>
        <br/> Introduzca el diametro en metros: <input type="text" name="diam" value="">
        <br/> <br/> Introduzca el diametro en metros: <input type="text" name="altu" value="">
        <br/> <br/>
        <input value="calcular" type="submit">
    </form>

    <?php

        include 'class_lib.php';

        $sacar_volu = new volumen();
        $sacar_volu -> calcularVolumen($_POST['diam'],$_POST['altu']);

    ?>

</body>

</html>