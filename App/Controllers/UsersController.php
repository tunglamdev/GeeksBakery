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

            $data["delivered-order"] = $this->orderModel->getDeliveredOrders($_SESSION["user"]["id"]);
            
            $this->view("users/index", $data);
        }

        function update(){
            $result = $this->userModel->updateInfor($_SESSION["user"]["id"] , $_POST);
            if($result==true){
                $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);
                $this->view("users/index", $data);
            }
            else echo "Update fail!";
        }

        function upload(){
            $result = $this->userModel->uploadAvatar($_SESSION["user"]["id"] , $_FILES);
            if($result==true){
                $data["user"] = $this->userModel->getInfor($_SESSION["user"]["id"]);
                $this->view("users/index", $data);
            }
            else echo "Update fail!";
        }
       
    }
?>