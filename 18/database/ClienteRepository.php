<?php
    require_once 'DatabaseRepository';

    class ClienteRepository {
        public static function getAllClientes() {
            $connection = DatabaseRepository::connect();
            $result = $connection->query("SELECT * FROM cliente");

            $cliente = [];
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $cliente[] = $row;
                }
            }

            $connection->close();
            return $cliente;
        }
    }
?>