<?php
// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/
    $numero = 3;
    echo "<hr>Tabuada de multiplicação de 1 a 10<br>";
    // Solução com for
    echo "Tabuada usando for <br>";
    for($i = 1; $i <= 10; $i++) {
        $resultado = $i * $numero;
        echo "$i X " .  $numero . " é igual a " . $resultado . "<br>";
    }
    
    
    // Solução com while
    echo "<hr>Tabuada usando while <br>";
    $i = 1;
    while($i <= 10) {
        $resultado = $i * $numero;
        echo "$i X " .  $numero . " é igual a " . $resultado . "<br>";
        $i++;
    }
    
    // Solução com do-while
    echo "<hr>Tabuada usando do-while <br>";
    $i = 1;
    do {
        $resultado = $i * $numero;
        echo "$i X " .  $numero . " é igual a " . $resultado . "<br>";
        $i++;
    } while ($i <= 10);

?>