<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_contatos');
    define('DB_PASSWORD', 'senha123');
    define('DB_NAME', 'contatos');

    // conecta a apicação ao banco de dados
     $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

     // Quuery para selecionar contatos
     $consulta = "SELECT * FROM contatos_info";

     // Executa a query e armazena em uma variável
     $result = $connection->query($consulta);

     // exibe os resultados em tela 
     print_r($result);

     // Fecha a conexão
     $connection->close();

     
?>