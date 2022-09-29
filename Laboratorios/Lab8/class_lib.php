<?php

	class Porcentaje {

		public function sacarPorcentaje($valor) {

			if($valor >= 81){
				echo "<img src='/desarrollo7/Laboratorios/Lab8/img/green.PNG'>";

	        }elseif($valor <=80 && $valor>60){

	            echo "<img src='/desarrollo7/Laboratorios/Lab8/img/yellow.PNG'>";
	            
	        }elseif($valor<=60){

	            echo "<img src='/desarrollo7/Laboratorios/Lab8/img/red.PNG'>";
	        }

		}	

	}


	class Factorial {

		public function sacarFactorial($numero) {

				$factorial = 1;

			    for($i = 1; $i<=$numero; $i++) {

			        $factorial = $factorial  * $i;
			    }

			    		echo "<br/> El factorial de ".$numero." es de: ".$factorial;

					}
	}


	class volumen {

		public function calcularVolumen($diametro,$altura) {

			    $radio = $diametro / 2;
			    $pi = 3.141593;
			    $volumen = $pi * $radio * $radio * $altura;
			    echo "<br/> El volumen del cilindro es de ".$volumen." metro cubicos";
		}

	}



?>