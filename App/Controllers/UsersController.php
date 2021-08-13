<?php
    use App\Core\Controller;

    class UsersController extends Controller{
        private $userModel;
        private $orderModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
            $this->orderModel = $this->model("OrderModel");
        }

        function Index(){
            $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);

            //Delivered Orders
            $data["deliveredOrders"] = $this->orderModel->getDeliveredOrders($_SESSION["user"]["id"]);
            if($data["deliveredOrders"]==0) $data["deliveredOrders"]=[];
            else{
                foreach($data["deliveredOrders"] as $index => $order){
                    $data[$order["id"]]["cakes"] = $this->orderModel->getCakeInOrder($order["id"]);
                }
            }

            //Delivering Orders
            $data["deliveringOrders"] = $this->orderModel->getDeliveringOrders($_SESSION["user"]["id"]);
            if( $data["deliveringOrders"]==0) $data["deliveringOrders"]=[];
            else{
                foreach($data["deliveringOrders"] as $index => $order){
                    $data[$order["id"]]["cakes"] = $this->orderModel->getCakeInOrder($order["id"]);
                }
            }

            //Prepairing Orders
            $data["prepairingOrders"] = $this->orderModel->getPrepairingOrders($_SESSION["user"]["id"]);
            if($data["prepairingOrders"]==0) $data["prepairingOrders"]=[];
            else{
                foreach($data["prepairingOrders"] as $index => $order){
                    $data[$order["id"]]["cakes"] = $this->orderModel->getCakeInOrder($order["id"]);
                }
            }

            //No processed Orders
            $data["noProcessedOrders"] = $this->orderModel->getNoProcessedOrders($_SESSION["user"]["id"]);
            if($data["noProcessedOrders"]==0) $data["noProcessedOrders"]=[];
            else{
                foreach($data["noProcessedOrders"] as $index => $order){
                    $data[$order["id"]]["cakes"] = $this->orderModel->getCakeInOrder($order["id"]);
                }
            }    

            $this->view("users/index", $data);
        }

        function update(){
            $result = $this->userModel->updateInfor($_SESSION["user"]["id"] , $_POST);
            if($result==true){
                $this->Index();
            }
            else echo "Update fail!";
        }

        function upload(){
            $result = $this->userModel->uploadAvatar($_SESSION["user"]["id"] , $_FILES);
            if($result==true){
                $this->Index();
            }
            else echo "Update fail!";
        }
       
    }
?>