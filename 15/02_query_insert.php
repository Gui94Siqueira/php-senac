<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_lista_compras');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'lista_compras');

    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    $produto = "Feijão";
    $quantidade = 2;

    
    $meu_insert = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (?, ?)";
    $stmt = $connection->prepare($meu_insert);

    // Verifica se a consulta foi bem-sucedida
    if($stmt) {
        // Associa os parametros a consulta preparada
        $stmt->bind_param("si", $produto, $quantidade);

        // Executa a consulta
        if($stmt->execute()) {
            echo "Produto inserido com sucesso.";
        } else {
            echo "Erro ao inserir o produto: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na consulta preparada: " . $connection->error;
    }

    // Fecha a conexão com o banco de dados
    $connection->close();

?>