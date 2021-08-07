<?php

    use App\Core\Database;

    class UserModel extends Database{

        //Add new user into database
        function register($data, $file){
            $name = $data["name"];
            $password = password_hash($data["password"], PASSWORD_DEFAULT);
            $email = $data["email"];
            $phone = $data["phone"];
            $role=1;
            $address = $data["address"];

            $avatar = $file["avatar"]["name"];
            move_uploaded_file($file["avatar"]["tmp_name"], USER_IMG.$file["avatar"]["name"]);

            $stmt = $this->conn->prepare("INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $name, $phone, $address, $password, $email, $role, $avatar);
            $stmt->execute();

            $result = $stmt->affected_rows;

            if($result<1) return false;
            else return true;
        }

        //Authenticate when user login
        function authenticate($data){    
            $email = $data["email"];
            $password = $data["password"];

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=?");
            $stmt->bind_param("s", $email);
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