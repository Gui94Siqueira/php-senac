<?php
    // Conexão direta com o banco de dados
    $connection = new mysqli("localhost", "usuario_contatos", "senha123", "contatos");

    // verificando a conexão
    if(!$connection->connect_errno) {
        echo "Você esta conectado ao banco de dados <br>";
    }

    // verificando a conexão
    if($connection->connect_errno) {
        echo "Erro ao conecar no banco de dados <br>";
        echo "Erro: " . mysqli_connect_error();
    }
?>