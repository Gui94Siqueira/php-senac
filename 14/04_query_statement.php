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

    // Definido o ID que você deseja buscar
    $id = 3;
    // definindo o ID qie você quer buscar
    $sql = "SELECT * FROM contatos_info WHERE Id = ?";
    $stmt = $connection->prepare($sql);

    if($stmt) {
        // Associando o parametro a consulta preparada
        $stmt->bind_param("i", $id);

        // Exeutando a consulta
        $stmt->execute();

        // Armazenando o resultado da consulta em uma variavel
        $result = $stmt->get_result();

        // Verificando se a resultados
        if($result->num_rows > 0) {
            // Obtendo a linha resultante
            $row = $result->fetch_assoc();

            echo "ID: " . $row["Id"] . "<br>";
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "<hr>";
        } else {
            echo "Nenhum registro encontrado";
        }

        // fechando a consulta preparada
        $stmt->close();
    } else {
        echo "Erro na consulta preparada: " . $connection->error;
    }

    // fechando a conexão
    $connection->close();

?>