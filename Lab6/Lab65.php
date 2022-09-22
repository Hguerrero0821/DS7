<?php
    class ClaseBase {
        
        public function test() {

            echo "ClaseBase::test() llamada\n";
        }
        
        final public function masTests() {

            echo "ClaseBase::masTests() llamada\n";
        }
    }

    class ClaseHijo extends ClaseBase {

            public function masTests() {

            echo "ClaseHijo::masTests() llamada\n";
        }
    }

    // Explicación de la salida:
        /*
            El método masTests pertenece al tipo final además de la clase padre,
            Entonces no puede anular los métodos finales en las subclases. 
        */


?>