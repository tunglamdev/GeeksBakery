<?php

    use App\Core\Database;

    class UserModel extends Database{

        //Add new user into database
        function register($data){
            $name = $data["name"];
            $password = password_hash($data["password"], PASSWORD_DEFAULT);
            $email = $data["email"];

            $stmt = $this->conn->prepare("INSERT INTO users(id, name, email, password) VALUES(NULL, ?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();

            $result = $stmt->affected_rows;

            if($result<1) return false;
            else return true;
        }

        //Authenticate when user login
        function authenticate($data){    
            $name = $data["name"];
            $password = $data["password"];

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE name=?");
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){

                $result = $result->fetch_assoc();

                if (password_verify($password, $result["password"])===true) return [true, $result];
                else return "Password incorrect!";

            }
            else return "Name does not exist!";
        }
    }
?>