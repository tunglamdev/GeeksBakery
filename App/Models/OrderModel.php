<?php

    use App\Core\Database;

    class OrderModel extends Database{
        //Get no processed orders
        function getNoProcessedOrders($userId){
            $status = "CXL";
            $stmt = $this->conn->prepare("  SELECT C.name, C.size, C.price, C.image, OD.amount
                                            FROM orders O JOIN order_details OD ON O.id = OD.id_order
                                                            JOIN cakes C ON OD.id_cake = C.id
                                            WHERE O.id_user=? AND O.id_status=?");


            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }
        //Get prepairing orders

        //Get delivering orders

        //Get delivered orders
        function getDeliveredOrders($userId){
            $status = "DG";
            $stmt = $this->conn->prepare("  SELECT O.id, C.name, C.size, C.price, C.image, OD.amount
                                            FROM orders O JOIN order_details OD ON O.id = OD.id_order
                                                            JOIN cakes C ON OD.id_cake = C.id
                                            WHERE O.id_user=? AND O.id_status=?");


            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }
    }
?>