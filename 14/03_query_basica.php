<?php

    // Definindo constantes para a conexão com o banco de dados
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_contatos');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'contatos');


    // Criar uma nova conexão com o banco de dados
    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // verificando se ocorreu algum erro de conexão
    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    // Exemplo de consulto SQL para selecionar todos os registros da tabela
    $sql = "SELECT * FROM contatos_info";

    //método 1: Utilizando fecht_assoc()
    $result = $connection->query($sql);

    // print_r($result);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Exibe os valores dos campos utilizando o método fetch_assoc
            echo "ID: " . $row["Id"] . "<br>";
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum registro encontrado";
    }


?>