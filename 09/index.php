<?php
    function nomeDaFuncao() {
        // bloco de código da função
    
    }
    // Declaração de funçã sem parametros e sem retorno
    function saudacao() {
        echo "Olá, TII04! <br>";
    }

    saudacao(); // Chamada da função;
    
    
    
    
    function saudacao_retorno() {
        return "Olá, TII04! <br>";
    }

    echo saudacao_retorno(); // Chamada da função;

    // Declaração de uma função que recebe parametro
    function saudacao_parametro($nome) {
        echo "Olá, $nome! <br>";
    }

    saudacao_parametro("TII04");

    function soma($valor1, $valor2) {
        return $valor1 + $valor2;
    }

    echo soma(10, 2);

    $mensagem = "Ólá; <br>";

    function mostrarMensagem() {
        $mensagem = "Mundo <br>"; // Variavel local
        echo $mensagem; // Saida: Mundo
    }

    mostrarMensagem();
    echo $mensagem; // saida: Olá
?>