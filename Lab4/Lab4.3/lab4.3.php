<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <h3>Manejo de Arreglos P1</h3>

    <?php
        $vector = array();

        for($i = 0; $i<20; $i++){
            $vector = $i;
        }
        $eleMayor = max($vector);
        $eleMayorId = $grades_index[max($vector)];
        echo "El elemento mayor del array es: ".$eleMayor." y su posición es la #".$eleMayorId;
    ?>


</body>
</html>