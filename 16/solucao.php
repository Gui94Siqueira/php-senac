<?php

class DatabaseRepository {
    private $server = 'localhost';
    private $username = 'usuario_lista_compras';
    private $password = 'Senha@123';
    private $database = 'lista_compras';
    private $connection;
    
    public function __construct() {
        $this->connection = new mysqli(
            $this->server, 
            $this->username, 
            $this->password, 
            $this->database);

        if($this->connection->connect_errno) {
            die("Erro na conexão: " . $this->connection->connect_error);
        }
    }

    public function getAllItems() {
        $sql = "SELECT * FROM itens_compra";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all();
        $stmt->close();
        return $items;
    }

    public function addItem($nome_produto, $quantidade) {
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("si", $nome_produto, $quantidade);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

    public function updateItem($id, $nome_produto, $quantidade) {
        
    }

    public function deleteItem() {

    }

    public function __destruct() {
        $this->connection->close();
    }
}

?>