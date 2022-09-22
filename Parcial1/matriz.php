    <html>
        <head>
            <title>Parcial 1</title></head>
        
        <body>

            <h1>Matriz en X</h1>
            <FORM ACTION="matriz.php" METHOD="POST">

                Ingrese el tamaño de la matriz : <input type="text" name="num"><br><br>
                <input type="submit" name= "enviar" value="Ingresar"> <br><br>

            </FORM>

            <?php
                $rand = rand(1,100);
                $suma1 = 0;
                $suma2 = 0;
                $i=1;
                if(array_key_exists('enviar', $_POST)){
                    
                    if($_REQUEST['num']!=""){

                        $m_size = $_REQUEST['num'];

                        if($m_size>1){
                            $unit = 1;
                            $unit2 = $m_size;
                            echo "<table border=1>";
                            
                            for ($n1=1; $n1<=$m_size; $n1++)
                            {
                                echo "<tr>";
                            
                            for($n2=1;$n2<=$m_size;$n2++){   
                                if($unit==$n2){

                                    echo"<td bgcolor=#bdc3d6>",$rand,"</td>";
                                     $suma1 = $suma1 + $rand;
                                     $rand = rand(1,100);

                                }elseif ($unit2==$n2) {
                                    echo"<td bgcolor=#bdc3d6>",$rand,"</td>";
                                     $suma2 = $suma2 + $rand;
                                     $rand = rand(1,100);
                                }
                                else{
                                    echo "<td>",0,"</td>";
                                }   
                            }
                                

                            $unit = $unit +1;
                            $unit2 = $unit2 - 1;
                            echo "</tr>";
                            }
                            echo "</table>";

                            echo "<b><br>La suma de la diagonal izquierda es: </b>".$suma1;
                            echo "<b> <br> La suma de la diagonal derecha es: </b>".$suma2;

                        }
                        else{
                            echo "Ingrese un Numero mayor a 1!";
                        }
                    }
                }
                ?>
            
      
        </body>

    </html>