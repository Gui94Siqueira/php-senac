<?php
    // INTRODUÇÃO A ARRAYS EM PHP


    // definição de arrays - CREATE
    $frutas = array("Maçã", "Banana", "Laranja", "Morango");
    $numeros = [1, 2, 3, 4, 5];
    $alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);

    // Acesando Elementos do Array - READ
    echo "A seguna fruta é: " . $frutas[1] . "<br><br>";
    echo "O terceiro numero é: " . $numeros[2] . "<br><br>";
    echo "A idade de João é: " . $alunos["João"];

    // Alterar Elementos do Array - UPDATE
    $frutas[0] = "Pera";
    $numeros[4] = 10;
    $alunos["Maria"] = 21;

    // adicionando elementos ao Array - ADD
    $frutas[] = "Abacaxi";
    $numeros[] = 6;
    $alunos["Ana"] = 22; 

    // Percorrendo um array com um foreach
    echo "<br><br>Lista de frutas: ";
    foreach($frutas as $fruta) {
        echo "<br>";
        echo $fruta . ".";
    }

    echo "<br><br>";

    echo "Lista de Numeros: ";
    foreach($numeros as $numero) {
        echo $numero . " ";
    }

    echo "<br><br>";

    echo "Lista de Alunos: ";
    foreach($alunos as $nome => $idade) {
        echo "<br>";
        echo $nome . " tem " . $idade . " anos. ";
    }

    // Funções uteis prara Arrays
    echo "<br><br>Numero de elementos no Array de frutas: " . count($frutas) . "<br>";
    echo "Indice da fruta 'Laranja' no array: " . array_search("Laranja", $frutas) . "<br>";
    echo "Última fruta do array: " . end($frutas) . "<br>";
    print_r($frutas);
    echo "<br><br>";
    echo "Array de frutas deposi de reverter: ";
    $frutas_revertidas = array_reverse($frutas);
    echo "<br>";
    print_r($frutas_revertidas);


?>