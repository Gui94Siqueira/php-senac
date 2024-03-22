<?php
    // STRINGS

    // Para unir duas ou mais String em php, usamos o operador de concatenação
    $nome = "Guilherme";
    $sobrenome = "Siqueira <br>";

    echo $nome ." ". $sobrenome; // Saida: Guilherme Siqueira

    // Para obter o comprimento de uma string m PHP, usamos a função strlen()
    $texto = "Olá, mundo!";
    echo strlen($texto); // Saida: 12
    echo "<br>";

    // Para substituir partes de uma String, Usamos a função str_replace()
    $texto = "O rato roeu a roupa do rei.<br>";
    $novo_texto = str_replace("rato", "gato", $texto);
    echo $novo_texto; // Saida: O gato roeu a roupa do rei.

    // strtolower(): Converte uma string para letras minúsculas,
    // strtoupper(): Converte uma string para letras maiusculas.
    $texto = "Olá, mundo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);

    echo $texto_minusculo. "<br>";
    echo $texto_maiusculo."<br>";
    echo $texto."<br>";

    // trim(): Remove espaços e braco no inicio e no final de um string.
    $texto = "Olá, Mundo!      ";
    $texto_sem_espacos = trim($texto);
    echo $texto_sem_espacos."<br>";

    // strpos(): Encontra a posição da primeira ocorrência de uma substring em uma string
    $texto = "O rato roeu a roupa do rei";
    $posicao = strpos($texto, "rato"); // Saida: 2 (Posição da primeira letra sa palavra "rato")

    echo $posicao."<br>";

    // strrev(): Inverte uma string
    $texto = "socorram-me subi no onibus em Marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido; // Saida: socorraM me subino on ibus em-marrocos


?>