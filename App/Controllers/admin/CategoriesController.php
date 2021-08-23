<?php
    use App\Core\Controller;

    class CategoriesController extends Controller{
        private $cakeTypeModel;
        function __construct(){
            $this->cakeTypeModel = $this->model("CakeTypeModel");
        }

        function Index(){
            $result = $this->cakeTypeModel->all();
            if ($result != false) $data["cake"] = $result;
            
            $this->view("categories/index", $data);
        }
    }
?>