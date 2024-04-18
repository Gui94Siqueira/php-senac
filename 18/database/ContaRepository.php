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
    }


?>