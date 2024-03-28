<?php
    // ESTRUTUTRAS CONDICINAIS EM PHP


    // Exemplo 1: IF-ELSE
    $numero = 10;
    if($numero > 5) {
        echo "O numero é maior que 5. <br>";
    } else {
        echo "O numero é menor ou igual a 5. <br>";
    }

    // Exemplo 2: IF-ELSEIF-ELSE
    $hora = (int)date("H");
    if($hora < 10) {
        echo "Bom Dia!. <br>";
    } elseif($hora < 19) {
        echo "Boa Tarde!. <br>";
    } else {
        echo "Boa Noite!. <br>";
    }

    echo "São $hora horas agora.<br>";

    // Exemplo 3: Operador ternário
    $idade = 18;
    $mensagem = $idade >= 18 ? "Maior de idade" : "Menor de idade";
    echo "Mensagem $mensagem <br>";

    // Exemplo 4: SWITCH-CASE;
    $dia_semana = date("D");
    switch($dia_semana) {
        case "Mon":
            echo "Hoje é segunda-feira. <br>";
            break;
        case "Tue":
            echo "Hoje é terça-feira. <br>";
            break;
        case "Wed":
            echo "Hoje é quarta-feira. <br>";
            break;
        case "Thu":
            echo "Hoje é quinta-feira. <br>";
            break;
        case "Fri":
            echo "Hoje é sexta-feira. <br>";
            break;
        case "Sat":
            echo "Hoje é sábado-feira. <br>";
            break;
        case "Sun":
            echo "Hoje é domingo-feira. <br>";
            break;
        default:
            echo "Erro ao obter o dia da semana. <br>";
    }
?>