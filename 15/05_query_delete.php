<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario_lista_compras');
define('DB_PASSWORD', 'Senha@123');
define('DB_NAME', 'lista_compras');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

$id = 2; 


$meu_delete = "DELETE FROM itens_compra WHERE id = ?";
$stmt = $connection->prepare($meu_delete);


if($stmt) {
    // Associa o parâmetro à consulta preparada
    $stmt->bind_param("i", $id);

    // Executa a consulta
    if($stmt->execute()) {
        echo "Produto de id $id excluido com sucesso.";
    } else {
        echo "Erro ao excluir Produto de id $id: " . $stmt->error;
    }

    $stmt->close();

} else {
    echo "Erro na conexão preparada: " . $connection->error;
}

$connection->close();
?>