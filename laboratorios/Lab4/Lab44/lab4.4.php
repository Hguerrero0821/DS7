<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
    <h3>Manejo de Arreglos P2</h3>
    <?php
        $x = 1;
        do{
     ?>

        <form method = "POST" action="lab4.4.php">
             <p>Ingrese un número <input type="text" name="valorP"></p>
        </form>
    
    <?php
        
            echo "<br>";
            $valor = (int)$_POST['valorP'];
            $arregloPar = new SplFixedArray($contador);
    
            if(($valor / 2) == 0){

                    for($i = $contador; $i<=$arregloPar->getSize(); $i++){
                    $arregloPar = $valor;
                }
                
    ?>

            <p>¿Desea añadir otro número S/N? <input type="text" name="resp" /></p>

    <?php
            
                $resp = $_POST['resp'];
                $contador = $contador + 1;
            }else{
                $resp = 'S';
            }
            
        }while($resp == 'S');
        
        for($i = 0; $i<=$arregloPar->getSize(); $i++){
            echo $arregloPar."<br>";
        }

    ?>
    
 


</body>
</html>