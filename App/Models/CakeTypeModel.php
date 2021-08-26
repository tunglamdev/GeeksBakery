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

         //get cate by id
         function getCateById($idCate){
            $stmt = $this->conn->prepare("SELECT * FROM cake_types WHERE id = ?");
            $stmt->bind_param("i", $idCate);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_assoc();
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


        
         //Edit cake processing
         function update($data){
            $id = $data["id"];
            $name = $data["name"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("UPDATE cake_types SET name=?, image=? WHERE id=?");
            $stmt->bind_param("ssi",$name,$image, $id);
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