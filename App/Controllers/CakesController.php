<?php

    use App\Core\Controller;

    class CakesController extends Controller{
        private $cakeModel;

        function __construct(){
            $this->cakeModel = $this->model("CakeModel");
        }

        //Get cakes to show on page and pagination
        function Index(){
            //Get the number of cakes in DB
            $numOfCake = $this->cakeModel->count();
            $data["num_of_page"] = ceil($numOfCake/NUM_OF_CAKE_ON_PAGE);

            // Get cakes to show on page
            if(!isset($_GET["page"]) || $_GET["page"]<1 || $_GET["page"]>$data["num_of_page"]){
                $page=1;
            }
            else{
                $page = $_GET["page"];
            }

            $limit = ($page - 1) * NUM_OF_CAKE_ON_PAGE;
            $cakeOnPage = $this->cakeModel->getCake($limit , NUM_OF_CAKE_ON_PAGE);
            if(!$cakeOnPage){
                $cakeOnPage=[];
            }

            //Results saved
            $data["cake_to_show"] = $cakeOnPage;
            $data["page"] = $page;
            $this->view("cakes/index", $data);
        }

        //Search cakes by key
        function search(){
            $key = $_GET["keyword"];
            $cakes = $this->cakeModel->getByKey($key);
            if(!$cakes){
                $cakes=[];
            }
        }

        //Get cake by categories to show and pagination
        function categories(){
            //Get cakes by cate
            if(!isset($_GET['id'])){
                $idCate = 1;
            }
            else{
                $idCate = $_GET['id'];
            }
            $numOfCake = $this->cakeModel->countCakeByCategories($idCate);
            $data["num_of_page"] = ceil($numOfCake/NUM_OF_CAKE_ON_PAGE);

            if(!isset($_GET["page"]) || $_GET["page"]<1 || $_GET["page"]>$data["num_of_page"]){
                $page=1;
            }
            else{
                $page = $_GET["page"];
            }

            $limit = ($page - 1) * NUM_OF_CAKE_ON_PAGE;
            $cakeByCate = $this->cakeModel->getByCategories($idCate, $limit, NUM_OF_CAKE_ON_PAGE);
            if(!$cakeByCate){
                $cakeByCate=[];
            }

            //Results saved
            $data["cake_to_show"] = $cakeByCate;
            $data["page"] = $page;
            $data["id_cate"] = $idCate; 
            $this->view("cakes/categories", $data);
        }
    }
?>