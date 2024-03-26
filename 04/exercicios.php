<?php
/*
    FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.
*/
    $altura = 1.70;
    $peso = 69.8;

    $IMC = $peso / ($altura * $altura);

    echo "Seu IMC é: " . $IMC . "<br>";

    if($IMC < 18.5) {
        echo " Vocẽ esta a baixo <br>";
    }

    if($IMC < 24.9 && $IMC > 18.5) {
        echo "Seu peso é Normal <br>";
    }

    if($IMC > 24.9) {
        echo "Você esta acima so peso <br>";
    }

/*

    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.
*/
    $tem_saldo = true;
    if($tem_saldo) {
        $fazer_compra = true;
        if($fazer_compra) {
            $saldo_disponivel = 500.0;
            $valor_compra = 350.0;
            if($valor_compra <= $saldo_disponivel) {
                echo "Transação concluida com sucesso. <br>";
            } else {
                echo "saldo insuficiente para compra. <br>";
            }
        } else {
            echo "Não deseja realizar a compra";
        }
    } else {
        echo "Não tem saldo";
    }
/*
    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.
*/
    $temperatura = 37.5;

    $fahrenheit = ($temperatura * 9/5) + 32;

    echo "A temperatura em celsios é: $temperatura e em fahrenheit é: " . $fahrenheit . "<br>";

/*
    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
*/
  
    $tem_idade = true;
    $tem_autorizacao = false;

    if($tem_idade || $tem_autorizacao) {
        echo "Acesso liberado ao conteudo restrito <br>";
    } else {
        echo "Acesso negado ao conteudo restrito <br>";
    }

/*
    Exercício 6 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
*/

    $numero = 1;
        

?>
