<?php 

class Login extends Database {
    
    public function librarian_login($username,$password) {
        $stmt = $this->connection->prepare("SELECT * FROM librarian WHERE username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();

        $result = $stmt->get_result();
        
        $num_rows = $result->num_rows;

        if($num_rows > 0) {

            $row = $result->fetch_assoc();

            if(password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_type'] = $row['user_type'];
                return true;
            } else {
                return false;
            }
        }
    }
}




?>