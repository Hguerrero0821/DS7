<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>
<body>
    <h2>Calculo de un factorial de acuerdo a un valor de entrada</h2>
    <form name="formFactorial" method="post" action="lab82.php">
        <p>Ingrese un número <input type="text" name="num" value=""></p>
        <input type="submit" value="Calcular">
    </form>

    <?php

         include 'class_lib.php';

        $sacar_factorial = new Factorial();
        $sacar_factorial -> sacarFactorial($_POST['num']);

    ?>


</body>
</html>