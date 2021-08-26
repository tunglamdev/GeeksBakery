<?php

    use App\Core\Database;

    class CakeModel extends Database{
        //Select all cakes on DB
        function all(){
            $sql = "SELECT * FROM cakes";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        //Count all cakes on DB
        function count(){
            $sql = "SELECT id FROM cakes";
            $result = $this->conn->query($sql);

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return false;
            }
        }

        //Get cakes to show on page
        function getCake($limit, $num){
            $stmt = $this->conn->prepare("SELECT * FROM cakes LIMIT ?, ?");
            $stmt->bind_param("ii", $limit, $num);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        //Search cakes by key
        function getByKey($key){
            $key = "%".$key."%";
            $stmt = $this->conn->prepare("SELECT * FROM cakes WHERE name LIKE ?");
            $stmt->bind_param("s", $key);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                $cakes = $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                $cakes =[];
            }

            return $cakes;
        }

        //Get cakes by categories to show on page
        function getByCategories($idCate, $limit, $num){
            $stmt = $this->conn->prepare("SELECT * FROM cakes WHERE id_cake_type = ? LIMIT ?, ?");
            $stmt->bind_param("iii", $idCate, $limit, $num);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return false;
            }
        }

        //Count cakes by categories
        function countCakeByCategories($idCate){
            $stmt = $this->conn->prepare("SELECT id FROM cakes WHERE id_cake_type = ?");
            $stmt->bind_param("i", $idCate);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->num_rows;
            }
            else{
                return false;
            }
        }

        //get cakes by id
        function getCakeById($idCake){
            $stmt = $this->conn->prepare("SELECT * FROM cakes WHERE id = ?");
            $stmt->bind_param("i", $idCake);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows >0){
                return $result->fetch_assoc();
            }
            else{
                return false;
            }
        }

        // Admin
        //Create new cake processing
        function insert($data){
            $cate = $data["cate"];
            $name = $data["name"];
            $size = $data["size"];
            $price = $data["price"];
            $des = $data["des"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("INSERT INTO cakes VALUES (NULL, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("siisis",$name, $price, $size, $des, $cate, $image);
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
            $cate = $data["cate"];
            $name = $data["name"];
            $size = $data["size"];
            $price = $data["price"];
            $des = $data["des"];
            $image = $data["image"];

            $stmt = $this->conn->prepare("UPDATE cakes SET name=?, price=?, size=?, description=?, id_cake_type=?, image=? WHERE id=?");
            $stmt->bind_param("siisisi",$name, $price, $size, $des, $cate, $image, $id);
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