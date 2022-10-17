<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL= "stylesheet" TYPE="text/css" HREF="css/estilo.css">
    <title>Laboratorio 10.1</title>
</head>
<body>
<?php
    require_once("class/votos.php");

    if(array_key_exists('enviar', $_POST)){
        print("<H1> Encuesta. Voto Registrado </H1>\n");
        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach($result_votos as $result_voto){
            $votos1 = $result_voto['votos1'];
            $votos2 = $result_voto['votos2'];
        }
        $voto = $_REQUEST['voto'];
        
        if($voto == "si"){
            $votos1 = $votos1 + 1;
        }else{
            $votos2 = $votos2 + 1;
        }

        $obj_votos = new votos();
        $result_votos = $obj_votos->actualizar_votos($votos1, $votos2);

        if($result_votos){
            print("<p>Su voto ha sido registrado. Gracias por particiar</p>\n");
            print("<a HREF='lab102.php' >Ver Resultados</a>\n");
        }else{
            print("<a HREF='lab101.php' >Error al actualizar su voto</a>\n");
        }
    }else{
?>  
    <H1>Encuesta</H1>
    <p>¿Cree ud. que el precio de la vivienda seguiria subiendo en el ritmo actual?</p>
    <FORM ACTION="lab101.php" METHOD="post">
        <INPUT TYPE="RADIO" NAME="voto" VALUE="si" CHECKED>Si<br>
        <INPUT TYPE="RADIO" NAME="voto" VALUE="no">No<br><br>
        <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="votar"><br><br>
    </FORM>
    <a href="lab102.php">Ver Resultados</a>
<?php
    }
?>  
</body>
</html>