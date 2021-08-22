<?php
    use App\Core\Controller;

    class HomeController extends Controller{
        function Index(){
            $data["name"]="Hello admin!";
            $this->view("home/index", $data);
        }
    }
?>