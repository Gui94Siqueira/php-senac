<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'usuario_lista_compras');
    define('DB_PASSWORD', 'Senha@123');
    define('DB_NAME', 'lista_compras');

    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
   
    if($connection->connect_error) {
        die("Erro de conexão: " . $connection->connect_error);
    }

    $id = 6;
    $produto = "Farinha";
    $quantidade = 3;

    // Query para atualiza contado (Utilizando consulta preparada)
    $meu_update = "UPDATE itens_compra SET nome_produto = ?, quantidade = ? WHERE id = ?";

    $stmt = $connection->prepare($meu_update);

    // Verefica se a consulta preparada foi bemm sucedida
    if($stmt){
        // Associa os parametros á consulta preparada
        $stmt->bind_param("sii", $produto,$quantidade, $id);

        // Executa a consulta
        if($stmt->execute()) {
            echo "Produto atulizado com sucesso";
        } else {
            echo "Erro ao atualizar o Produto: " . $stmt->error;
        }

        // Fecha a consulta preparada
        $stmt->close();
    } else {
        echo "Erro na consulta preparada: " . $connection->error;
    }

?>
