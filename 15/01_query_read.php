<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_lista_compras');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'lista_compras');



    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    $query = "SELECT * FROM itens_compra";

    $resposta = $connection->query($query);

    if($resposta->num_rows > 0) {
        while($dado = $resposta->fetch_assoc()) {
            // Exibe os valores dos campos utilizando o método fetch_assoc
            echo "ID: " . $dado["id"] . "<br>";
            echo "Nome do produto: " . $dado["nome_produto"] . "<br>";
            echo "Quantidade: " . $dado["quantidade"] . "<br>";
            echo "Comprado: " . $dado["comprado"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum registro encontrado";
    }

    $connection->close();

?>