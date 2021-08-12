<?php
    use App\Core\Controller;

    class UsersController extends Controller{
        private $userModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
        }

        function Index(){
           $this->view("users/index", []);
        }
       
    }
?>