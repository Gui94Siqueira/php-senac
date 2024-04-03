<?php
    class Calculadora {
        public static function somar($a, $b) {
            return $a + $b;
        }

        public static function multiplicar($a, $b) {
            return $a * $b;
        }
    }

    echo Calculadora::multiplicar(5, 5);
    echo "<br>" . Calculadora::somar(5, 2);
?>