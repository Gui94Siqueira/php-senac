<?php

    function teste() {
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    echo "Teste estático <br>";
    function testeStatic() {
        static $a = 0;
        $a++;
        
        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
?>