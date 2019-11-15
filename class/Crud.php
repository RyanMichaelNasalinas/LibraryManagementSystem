<?php

class Crud extends Database {

    public function displayData($dbname) {
        $query = "SELECT * FROM ". $dbname;

        $result = $this->connection->query($query);

        if($result == false) {
            return false;
        }

        return $result;
    }
}




?>