<?php
    use App\Core\Controller;

    class OrdersController extends Controller{
        private $orderModel;
        function __construct(){
            $this->orderModel = $this->model("OrderModel");
        }

        function Index(){
            $result = $this->orderModel->getOrderInfor();
            if ($result != false) $data["order"] = $result;
            
            $this->view("orders/index", $data);
        }
    }
?>