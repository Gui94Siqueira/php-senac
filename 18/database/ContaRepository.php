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

        public static function getContaById($id) {
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

        public static function inserirConta($cliente_id, $numero, $saldo, $tipo, $limite_cheque_especial,$taxa_rendimento) {
            $connection = DatabaseRepository::connect();
            $sql = "INSERT conta (cliente_id, numero, saldo, tipo, limite_cheque_especial, taxa_rendimento) VALUES ('$cliente_id', '$numero', '$saldo', '$tipo', '$limite_cheque_especial', '$taxa_rendimento')";
            $success = $connection->query($sql);
            $connection->close();
            return $sql;
        }

        public static function updateConta($id, $saldo, $limite_cheque_especial, $taxa_rendimento) {
            $connection = DatabaseRepository::connect();
            $sql = "UPDATE conta SET saldo='$saldo', limite_cheque_especial='$limite_cheque_especial', taxa_rendimento='$taxa_rendimento' WHERE id='$id'";
            $success = $connection->query($sql);
            $connection->close();
            return $success;
        }

        public static function deleteConta($id) {
            $connection = DatabaseRepository::connect();
            $sql = "DELETE FROM conta WHERE id=$id";
            $success = $connection->query($sql);
            $connection->close();
            return $success;
        }
    }
    


?>