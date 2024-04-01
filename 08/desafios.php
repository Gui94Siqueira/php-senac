<?php
    //// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 2;
$B = 5;
$C = 7;

// Implementação da Verificação de Soma

    $soma = $A + $B;
    if($soma == $C) {
        echo "parabens a soma dos numeros $A e $B é igual a $C <br>";
    } else {
        echo "a soma dos numeros não esta correta <br>";
    }
 


// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;
$resultado = 0;
// Implementação do Cálculo do Quadrado
for($i = 0; $i <= $numero; $i++) {
    $resultado = $i * $i;
    
}
echo "<hr>";
echo "o quadrado de $numero é $resultado";
echo "<hr>";
// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 20;

// Implementação da Verificação de Paridade
$eh_par = $numero % 2;
    if($eh_par !== 1) {
        echo "O numero é par";
    } else {
        echo "O numero é impar";
    }

// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
echo "<hr>";
$N1 = 8;
$N2 = 6;
$N3 = 9;

// Implementação do Cálculo da Média
$media = ($N1 + $N2 + $N3) / 3;

echo round($media);

// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numero1 = 2;
$numero2 = 8;
$numero1_tabuada = [];
echo "<hr>";
// Implementação da Verificação de Múltiplo
for($i = 0; $i <= 10; $i++) {
    $numero1_tabuada[$i] = $numero1 * $i;
    if($numero1_tabuada[$i] == $numero2) {
        echo "Numero $numero1 é multiplo de $numero1_tabuada[$i] <br>";
    } 
}



//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/
$n = 1;
$m = 90;
echo "<hr>";
echo "Atividade numeros Primos <br>";
// Implementação de Números Primos em um Intervalo
function ehprimo($numero) {
    if($numero <= 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($numero); $i++) {
    if($numero % $i === 0) {
        return false;
    }
    }
    return true;
}

for($n; $n <= $m; $n++) {
    if(ehprimo($n)) {
        echo $n . " ";
    }
}


//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
echo "<hr>";
echo "Atividade transformando horas em minutos. <br>";
$hora = "01:20";

// Implementação de Conversão de Horas em Minutos

$array_hora = explode(":", $hora);
$minutos = ((int)$array_hora[0] * 60) + ((int)$array_hora[1]);
echo $minutos;


/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
echo "<hr>";
echo "Desenho piramide <br>";
$numero = 5;
// Implementação de Desenho de Pirâmide
for($i = 1; $i <= $numero; $i++){
    linhas($i);
    espacos($i);
    espacos($i);
    linhas($i);  
    echo "<br>";
}


function linhas($numero) {
    for($i = 5; $numero <= $i; $i--) {
        echo "/ ";
    }
   }

function espacos($numero) {
    for($i = 1; $i <= $numero; $i++) {
        echo "*";
    }
}



//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/

// Implementação de Contagem de Dígitos em um Número




//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/

// Implementação de Verificação de Palíndromo




//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/

// Implementação de Ordenação de Números





//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/

// Implementação de Soma de Dígitos




//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica
?>