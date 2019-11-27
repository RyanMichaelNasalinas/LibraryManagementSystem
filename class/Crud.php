<?php

class Crud extends Database {

    //Dispaly all user data
    public function displayData($dbname) {
        $query = "SELECT * FROM ". $dbname . " ORDER BY id DESC";
        $result = $this->connection->query($query);

        if($result == false) {
            return false;
        }
        
        return $result;
    }
    //Data data by id
    public function displayDataID(string $dbname, int $id) {
        $stmt = $this->connection->prepare("SELECT * FROM ". $dbname . " WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();

        $result = $stmt->get_result();
        if($result === false) {  
            return false;
        } 
        
        return $result;
    }
    //Insert data into the database
    public function insertData($firstname,$lastname,$gender,$username,$password,$email,$contact_num,$semester,$enrollment_num,$student_status,$user_level) {
        $stmt = $this->connection->prepare("INSERT into student (`firstname`,`lastname`,`gender`,`username`,`password`,`email`,`contact`,`sem`,`enrollment_num`,`std_status`,`user_level`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssiiisi",$firstname,$lastname,$gender,$username,$password,$email,$contact_num,$semester,$enrollment_num,$student_status,$user_level);
        
        if($stmt->execute()) {
            return true;    
        } else {
            return false;
        }
    }
    //Update data into the database
    public function updateData($firstname,$lastname,$gender,$username,$password,$email,$contact_num,$semester,$enrollment_num,$student_status,$user_level,$id) {
        $stmt = $this->connection->prepare("UPDATE set firstname = ?, lastname = ?, gender = ?, username = ?, password = ?, email = ?, contact = ?, sem = ?, enrollment_num = ?, std_status = ?, user_level = ? WHERE id = ?");
        $stmt->bind_param("ssssssiiisii",$firstname,$lastname,$gender,$username,$password,$email,$contact_num,$semester,$enrollment_num,$student_status,$user_level,$id);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>