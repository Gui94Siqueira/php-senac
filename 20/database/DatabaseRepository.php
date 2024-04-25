<?php
    class DatabaseRepository {
        private static $host = 'localhost';
        private static $username = 'root';
        private static $password = '';
        private static $database = 'loja';
        private static $conn;

        public static function connect() {
            if(!self::$conn) {
                self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$database);
                if(self::$conn->connect_error) {
                    die("Conexão falhou! " . self::$conn->connect_error);
                }
            }

            return self::$conn;
        }
    }
?>