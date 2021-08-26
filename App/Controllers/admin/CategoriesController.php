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

        function create(){
            $this->view("categories/create", []);
        }

        function store(){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/categories/create");
            else{
                $data["name"] = $_POST["name"];

                if(isset($_FILES["image"])){
                    if($_FILES["image"]["name"] != ""){
                        $randomNum = time();
                        $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                        $newImageName = $randomNum.".".$imageExt;
                    }
                }

                move_uploaded_file($_FILES["image"]["tmp_name"], CATE_IMG.DS.$newImageName);
                $data["image"] = $newImageName;
                
                $result = $this->cakeTypeModel->insert($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/categories");
                else header("Location: ".DOCUMENT_ROOT."/admin/categories/create");
            }
        }

         
        function edit($cateId){
            $result = $this->cakeTypeModel->getCateById($cateId);
            if ($result != false) $data["cate"] = $result;
            $this->view("categories/edit", $data);
        }

        function update($cateId){
            if(!isset($_POST)) header("Location: ".DOCUMENT_ROOT."/admin/categories/edit");
            else{
                $data["id"] = $cateId;
                $data["name"] = $_POST["name"];

                if($_FILES["image"]["name"] != ""){
                        $randomNum = time();
                        $imageExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);//Lay phan mo rong cua ten file
                        $newImageName = $randomNum.".".$imageExt;
                        move_uploaded_file($_FILES["image"]["tmp_name"], CATE_IMG.DS.$newImageName);
                        $data["image"] = $newImageName;
                }      
                else{
                    $data["image"] = $_POST["old-image"];
                }

                $result = $this->cakeTypeModel->update($data);
                if ($result == true) header("Location: ".DOCUMENT_ROOT."/admin/categories");
                else header("Location: ".DOCUMENT_ROOT."/admin/categories/edit");
            }
        }
    }
?>