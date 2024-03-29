<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5;
echo "Contagem regressiva <br>";

// Solução com for
for($i = $numero; $i >= 0; $i--) {
    echo "Faltam $i segundos.<br>";
}

// Solução com while
echo "<hr>Contagem regressiva usando while<br>";

$i = $numero;
while($i >= 0) {
    echo "Faltam $i segundos. <br>";
    $i--;
}


// Solução com do-while
echo "<hr>Contagem regressiva usando do-while <br>";
$i = $numero;
do {
    echo "Faltam $i segundos. <br>";
    $i--;
} while ($i >= 0);



?>