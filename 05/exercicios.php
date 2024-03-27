<?php
/*
    Exercício 1 - Acesso a Elementos:
    Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
*/
    $semana = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");

    echo "O terceiro dia da semana deste Array é: " . $semana[2] . "<br>";
/*
    Exercício 2 - Alteração de Elementos:
    Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".
*/
    $meses = array("janeiro", "Março", "junho", "Novembro");
    $i = count($meses);
    $meses[$i-1] = "Dezembro";
    echo "exibindo meses do Array: ";
    foreach($meses as $mes) {
        echo $mes . " ";
    }

/*
    Exercício 3 - Adição de Elementos:
    Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.
*/
    echo "<br>";

    $numeros = [];

    for($i = 1; 5 >= $i; $i++) {
        $numeros[] = $i;
    }
    
    $numeros[] = 6;

    foreach($numeros as $numero) {
        echo $numero . " ";
    }


/*
    Exercício 4 - Percorrendo um Array:
    Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.
*/
    $meses_ano = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    echo "<br>";
    echo "Exibindo os meses do ano: <br>";
    
    foreach($meses_ano as $mes) {
        echo $mes . " ";
    }
/*
    Exercício 5 - Contagem de Elementos:
    Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.
*/
    echo "<br>A semana tem: ";
    echo count($semana) . "dias";
     

/*
    Exercício 6 - Busca de Elemento:
    Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.
*/
  $sabado = array_search("Sábado", $semana);
  echo "<br>Sábado esta na posição de numero " . $sabado . " no array.<br>";  
/*
    Exercício 7 - Reversão de Array:
    Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.
*/

    $numeros = [];

    for($i = 1; 10 >= $i;$i++) {
        $numeros[] = $i;
    }

    $numeros_invertidos = array_reverse($numeros);

    print_r($numeros_invertidos);

?>