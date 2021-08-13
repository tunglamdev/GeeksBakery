<?php

    use App\Core\Database;

    class OrderModel extends Database{

        //Get id-order of delivered orders by id-user
        function getDeliveredOrders($userId){
            $status = "DG";
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get id-order of delivered orders by id-user
        function getDeliveringOrders($userId){
            $status = "DGH";
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return 0;
        }

        //Get id-order of delivered orders by id-user
        function getPrepairingOrders($userId){
            $status = "DCB";
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get id-order of delivered orders by id-user
        function getNoProcessedOrders($userId){
            $status = "CXL";
            $stmt = $this->conn->prepare("SELECT id FROM orders WHERE id_user=? AND id_status=?");

            $stmt->bind_param("ss", $userId, $status);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }

        //Get cakes of every order
        function getCakeInOrder($orderId){
            $stmt = $this->conn->prepare("SELECT C.name, C.size, C.price, C.image, OD.amount
                                            FROM order_details OD JOIN cakes C ON OD.id_cake = C.id
                                            WHERE OD.id_order = ?");

            $stmt->bind_param("s", $orderId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >0){
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else return false;
        }
    }
?>