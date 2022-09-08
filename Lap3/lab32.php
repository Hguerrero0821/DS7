<?php
    $precio1 = $_POST['precio1'];
    $precio2 = $_POST['precio2'];
    $precio3 = $_POST['precio3'];
    $media = ($precio1 + $precio2 + $precio3) / 3;
    echo "<br/> DATOS RECIBIDOS";
    echo "<br/> Precio producto establecimiento 1: ".$precio1." Dolares";
    echo "<br/> Precio producto establecimiento 2: ".$precio2." Dolares";
    echo "<br/> Precio producto establecimiento 3: ".$precio3." Dolares <br/>";
    echo "<br/> El precio medio del producto es de: ".$media." Dolares";
 ?>   