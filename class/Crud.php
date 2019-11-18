<?php

class Crud extends Database {

    //Dispaly all user data
    public function displayData($dbname) {
        $query = "SELECT * FROM ". $dbname;

        $result = $this->connection->query($query);

        if($result == false) {
            return false;
        }

        return $result;
    }
    //Data data by id
    public function displayDataID(string $dbname,int $id) {
        $stmt = $this->connection->prepare("SELECT * FROM ". $dbname ." WHERE id = ? ");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();
        if($result === false) {  
            return false;
        } 
        
        return $result;
    }
}

?>