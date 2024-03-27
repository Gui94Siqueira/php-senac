<?php
    // VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS


    // verificação de tipos de dados 
    $numero = 10;
    $string = "Olá, Mundo!";
    $booleano = true;
    $array = [1, 2, 3];

    echo 'Tipo de dado da variavel $numero: ' . gettype($numero) . "<br>";
    echo 'Tipo de dado da variavel $string: ' . gettype($string) . "<br>";
    echo 'Tipo de dado da variavel $booleano: ' . gettype($booleano) . "<br>";
    echo 'Tipo de dado ca varivale $array: ' . gettype($array) . "<br>";

    echo "<hr>";
    // Verificação de Tipo de Dados com Funções
    echo 'Tipo de dado da variavel $numero: ' . (is_int($numero) ? "Sim" : "Não") . "<br>";
    echo 'Tipo de dado da variavel $string: ' . (is_string($string) ? "Sim" : "Não") . "<br>";
    echo 'Tipo de dado da variavel $booleano: ' . (is_bool($booleano) ? "Sim" : "Não") . "<br>";
    echo 'Tipo de dado ca varivale $array: ' . (is_array($array) ? "Sim" : "Não") . "<br>";

    echo "<hr>";
    // Converção de Tipos de Dados
    $numero_string = "456";
    $numero_convertido = (int)$numero_string;

    echo 'Convertendo a variavel $numero_string em inteiro: ' . gettype($numero_convertido) . "<br>";

    // Demais converções:
    $Numero = 456;
    $string_numero = (string)$numero;

    echo "Convertendo variavel int para string: " . gettype($string_numero) . "<br>";

    $bool_string = "true";
    $bool_convertido = (bool)$bool_string;

    echo "Convertendo  varival estring em bool: " . gettype($bool_convertido) . "<br>";

    echo "<hr>";

    $array_string = "1,2,3";
    $array_convertido = explode(",", $array_string);

    echo "numeros em uma string antes da converção: $array_string <br>";
    echo "Array convertido de string para array: ";
    print_r($array_convertido) . "<br>";

    # Exemplo adicional 1 -conversão para array
    $hora = "20:02:56"; // hora lida de um log
    $array_hora_minuto = explode(":", $hora);

    echo "<br>Evento ocorreu as $array_hora_minuto[0] horas e $array_hora_minuto[1] minutos e $array_hora_minuto[2] segundos. <br>";

    # Exemplo adicional 2 -conversão para array
    $contatos = "Aecio-Nerildo-JS-Celso-Luana";
    echo "A lista de contatos é: $contatos <br>";

    $contatos_array = explode("-", $contatos);
    print_r($contatos_array);

    echo "<hr>";

    // Palavras Reservadas e Funções Comuns
    echo "Exemplo de uso da fução strtoupper para converter uma string em maiúsculas: " . strtoupper($contatos) . "<br>";

    echo "Exemplo  de uso da palavra reservada require para incluir um arquivo";
    // require 'arquivo.php'; // comentar para ão exibri erro;
    echo "<br>";

    echo "emplo de uso da palavra reservada private para definir um método privado em uma classe: ";

    class MinhaClasse {
        private $atributo;

        private function metodoPrivado() {
            // Implementação do método
        }
    }

    echo "<br>";
    echo "Exemplo de uso da constante Mágica __DIR__ para obter o diretório atual: " . __DIR__ . "<br>";
    echo "Exemplo de uso da constante Mágica __FILE__ para obter o caminho completo do arquivo atual: " . __FILE__ . "<br>";
?>  