<?php 

    echo "Olá Mundo!<br>";

    // isso é um comentario

    # isso tambem é um comentario

    /* 
        Isso é um comentario de multiplas linhas
        eu disse, multiplas linhas
    */

    // Declaração de Variaveis

    $nome = "Guilherme";
    $sobrenome = "Siqueira";
    $nome_completo = $nome ." ". $sobrenome;

    // echo $nome;
    // echo $sobrenome;

    echo $nome ." ". $sobrenome . "<br>";
    echo $nome_completo. "<br>";

    // Variáveis numéricas
    $idade = 25;
    $ano = 2024;

    echo $idade. "<br>";
    echo $ano - $idade. "<br>"; // Operações matemáticas

    echo 'Esse é um texto em aspas simples <br>';
    echo "Esse é um texto em aspas duplas <br>";

    // Trabalhando com aspas simples e duplas
    echo 'Dom Pedro disse: "Independencia ou Morte!"<br>';

    echo "$nome tem $idade anos de idade <br>";
    echo '$nome tem $idade anos de idade <br>';

    // Testando do case sensitive - Palavras reservadas
    echo "Texto 1 <br>";
    ECHO "Texto 2 <br>";

    // Testando case sensitive - Variáveis
    $primeiroNome = "Carlos";

    echo $primeiroNome;
    ECHO $PRIMEIRONOME;

    
?>