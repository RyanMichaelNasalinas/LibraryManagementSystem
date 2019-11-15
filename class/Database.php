<?php

    require "config/config.php";

    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;
        
        protected $connection;

        //PDO Connection
        public function __construct() {
        $this->database();
        }

        public function database() {
            $conn = $this->connection = new Mysqli($this->host,$this->user,$this->pass,$this->dbname);

            if($conn->error) {
                die("Connection Failed" . $conn->errno . $this->connection->error);
            }
        }
        
        public function query($sql) {
            $query = $this->connection->query($sql);
            return $query;
        }

        public function escape($string) {
            return $this->connection->escape_string($string);
        }
}
?>