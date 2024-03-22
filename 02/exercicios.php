<?php
/*
    Exercício 1 - Concatenação de Strings:
    Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".
*/
    $nome = "Guilherme";
    $proficao = "Desenvolvedor Jr<br>";

    echo "Nome:". $nome  . " é " . $proficao;
/*
    Exercício 2 - Comprimento de uma String:
    Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.
*/
    $senha = "Root@123";

    if (strlen($senha) >= 8) {
        echo "senha válida<br>";
    } else {
        echo "senha não contem a quantidade de caracteres exigida<br>";
    }

/*
    Exercício 3 - Substituição de Caracteres:
    Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.
*/
    $texto = "O nome do meu cachorro é Tom <br>";
    $nova_frase = str_replace("cachorro", "gato", $texto);

    echo $nova_frase;

/*
    Exercício 4 - Conversão de Case:
    Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.
*/
    $palavra = "falcão";
    $palavramaiuscula = strtolower($palavra);
    $palavraminuscula = strtoupper($palavra);

    echo $palavramaiuscula ."<br>". $palavraminuscula ."<br>". $palavra ."<br>";


/*
    Exercício 5 - Remoção de Espaços em Branco:
    Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

*/
    $url = "http://localhost/php-senac/02/exercicios.php<br>";
    $url_sem__espacos = trim($url);

    echo $url_sem__espacos;
/*
    Exercício 6 - Posição da Primeira Ocorrência:
    Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.
*/
    $lista_compras = "arroz, feijão, leite, café";
    $leite = strpos($lista_compras, "leite");

    echo $leite."<br>";

/*
    Exercício 7 - Inversão de uma String:
    Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
*/

    $texto = "não me subestume, tá querendo me humilhar?";
    $texto_invertido = strrev($texto);
    
    echo $texto_invertido;
?>