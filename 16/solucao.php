<?php

class DatabaseRepository {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'lista_compras';
    private $connection;

    public function __constructor() {
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
        return $this->connection->query($sql);
        //$stmt->execute();
        //$result = $stmt->get_result();
        //$items = $result->fetch_all();
        //$stmt->close();
        //return $items;
    }


}

$repository = new DatabaseRepository();

print_r($repository->getAllItems());

?>