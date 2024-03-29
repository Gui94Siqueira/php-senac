<?php
// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

// Solução com for
$termos = 13;
$anterior = 0;
$atual = 1;
echo "Solução com for: <br>";
echo "$anterior $atual ";
for($i = 2;$i < $termos; $i++) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
}

// Solução com while
$anterior = 0;
$atual = 1;
$i = 2;
$termos = 13;
echo "<hr>Solução com while: <br>";
echo "$anterior $atual ";
while($i < $termos) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
    $i++;
}

// Solução com do-while
$anterior = 0;
$atual = 1;
$i = 2;
$termos = 13;
echo "<hr>Solução com do-while: <br>";
echo "$anterior $atual ";
do {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
    $i++;
} while ($i < $termos)
?>