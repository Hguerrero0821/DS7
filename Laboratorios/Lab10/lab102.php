<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL= "stylesheet" TYPE="text/css" HREF="css/estilo.css">
    <title>Laboratorio 10.2</title>
</head>
<body>
    <H1>Encuesta. Resultados de la Votación</H1>
<?php
    require_once("class/votos.php");

    $obj_votos = new votos();
    $result_votos = $obj_votos->listar_votos();

    foreach($result_votos as $result_voto){
        $votos1 = $result_voto['votos1'];
        $votos2 = $result_voto['votos2'];
    }
    $totalVotos = $votos1 + $votos2;
    echo "Total: ".$totalVotos ;
    print("<TABLE>\n");

    print("<TR>\n");
    print("<TH>Respuesta</TH>\n");
    print("<TH>Votos</TH>\n");
    print("<TH>Porcentaje</TH>\n");
    print("<TH>Representación Gráfica</TH>\n");
    print("</TR>\n");

    $porcentaje = round(($votos1/$totalVotos)*100,2);
    print("<TR>\n");
    print("<TD CLASS='izquierda'>Si</TD>\n");
    print("<TD CLASS='derecha'>$votos1</TD>\n");
    print("<TD CLASS='derecha'>$porcentaje%</TD>\n");
    print("<TD CLASS='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='".
    $porcentaje*4 ."'></TD>\n");
    print("</TR>\n");

    $porcentaje = round(($votos2/$totalVotos)*100,2);
    print("<TR>\n");
    print("<TD CLASS='izquierda'>No</TD>\n");
    print("<TD CLASS='derecha'>$votos2</TD>\n");
    print("<TD CLASS='derecha'>$porcentaje%</TD>\n");
    print("<TD CLASS='izquierda' width='400'><img src='img/puntoamarillo.gif' height='10' width='".
    $porcentaje*4 ."'></TD>\n");
    print("</TR>\n");

    print("</TABLE>\n");
    print("<p>Numero Total de votos emitidos: $totalVotos</p>\n");
    print("<p><a href='lab101.php'>Página de Votación</a></p>\n");
?>
</body>
</html>