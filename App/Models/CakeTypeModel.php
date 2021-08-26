<?php

    use App\Core\Database;

    class CakeTypeModel extends Database{

        function all(){
            $sql = "SELECT * FROM cake_types";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        function insert($data){
            $name = $data["name"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("INSERT INTO cake_types VALUES (NULL, ?, ?)");
            $stmt->bind_param("ss",$name,$image);
            $stmt->execute();
            $result = $stmt->affected_rows;

            if($result>0){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>