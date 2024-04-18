<?php
    require_once 'DatabaseRepository.php';

    class ContaRepository {
        public static function getAllContas() {
            $connection = DatabaseRepository::connect();
            $result = $connection->query("SELECT * FROM conta");

            $conta = [];
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $conta[] = $row;
                }
            }

            $connection->close();
            return $conta;
        }
    }

    print_r(ContaRepository::getAllContas());

?>