<?php
    use App\Core\Controller;

    class CakesController extends Controller{
        private $cakeModel;
        function __construct(){
            $this->cakeModel = $this->model("CakeModel");
        }

        function Index(){
            $result = $this->cakeModel->all();
            if ($result != false) $data["cake"] = $result;
            
            $this->view("cakes/index", $data);
        }
    }
?>