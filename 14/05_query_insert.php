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

?>