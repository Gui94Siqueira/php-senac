<?php
    require_once 'DatabaseRepository.php';
    require_once '../model/cliente.php';

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

        public static function getClienteById($id) {
            $connection = DatabaseRepository::connect();
            $sql = "SELECT * FROM cliente WHERE id = $id";
            $result = $connection->query($sql);

            $cliente = null;
            if($result->num_rows > 0) {
                $cliente = $result->fetch_assoc();
            }
            
            $connection->close();
            return $cliente;
        }

        public static function inserirCliente(Cliente $cliente) {
            $connection = DatabaseRepository::connect();
            $nome = $cliente->getNome();
            $cpf = $cliente->getCpf();
            $sql = "INSERT INTO cliente (nome, cpf) VALUES ('$nome', '$cpf')";
            $success = $connection->query($sql);
            $connection->close();
            return $success;
        }

        public static function updateCliente($id, $nome, $cpf) {
            $connection = DatabaseRepository::connect();
            $sql = "UPDATE cliente SET nome='$nome', cpf='$cpf' WHERE id=$id";
            $success = $connection->query($sql);
            $connection->close();
            return $success;
        }

        public static function deleteCliente($id) {
            $connection = DatabaseRepository::connect();
            $success = $connection->query("DELETE FROM cliente WHERE id='$id'");
            $connection->close();
            return $success; 
        }
    }

?>