<?php
    require_once 'DatabaseRepository.php';

    class ContaRepository {
        public static function getAllContas() {
            $connection = DatabaseRepository::connect();
            $result = $connection->query("SELECT * FROM conta");

            $contas = [];
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $contas[] = $row;
                }
            }

            $connection->close();
            return $contas;
        }

        public static function getContaById($cliente_id) {
            $connection = DatabaseRepository::connect();
            $sql = "SELECT * FROM conta WHERE id=$id";
            $result = $connection->query($sql);

            $contas = [];
            if($result->num_rows > 0) {
                $contas = $result->fetch_assoc();
            }

            $connection->close();
            return $contas;
        }

        public static function inserirConta($clienteId, $numero, $saldo, $tipo, $limite_cheque_especial,$taxa_rendimento) {
            $connection = DatabaseRepository::connect();
            $sql = "INSERT INTO conta (cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento) VALUES ($clienteId, $numero, $saldo, $tipo, $limite_cheque_especial, $taxa_rendimento)";
        }
    }
    


?>