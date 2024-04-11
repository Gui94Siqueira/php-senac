<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_lista_compras');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'lista_compras');



    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    $id = 3;
   
    $query = "SELECT * FROM itens_compra WHERE id = ?";
    $stmt = $connection->prepare($query);

    if($stmt) {
        $stmt->bind_param("i", $id);

        $stmt->execute();

        $resposta = $stmt->get_result();

        // Verificando se a resultados
        if($resposta->num_rows > 0) {
            // Obtendo a linha resultante
            $dado = $resposta->fetch_assoc();

            echo "ID: " . $dado["id"] . "<br>";
            echo "Produto: " . $dado["nome_produto"] . "<br>";
            echo "Quantidade: " . $dado["quantidade"] . "<br>";
            echo "Comprado: " . $dado["comprado"] . "<br>";
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