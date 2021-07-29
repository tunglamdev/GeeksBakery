<?php
    // require_once "../Core/Controller.php";
    use App\Core\Controller;

    class HomeController extends Controller{
        private $cakeModel;
        private $caketypeModel;

        function __construct(){
            $this->cakeModel = $this->model("CakeModel");
            $this->caketypeModel = $this->model("CakeTypeModel");
        }

        function Index(){
            $cakes = $this->cakeModel->all();
            if(!$cakes){
                $cakes=[];
            }

            $caketypes = $this->caketypeModel->all();
            if(!$caketypes){
                $caketypes=[];
            }

            $data["cake"] = $cakes;
            $data["caketype"] = $caketypes;
            $this->view("home/index", $data);
        }
    }
?>