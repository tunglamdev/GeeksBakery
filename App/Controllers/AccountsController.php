<?php
    // require_once "../Core/Controller.php";
    use App\Core\Controller;

    class AccountsController extends Controller{
        private $userModel;

        function __construct(){
            $this->userModel = $this->model("UserModel");
        }

        function Index(){
           $this->view("auth/login", []);
        }

        function register(){
            $this->view("auth/register", []);
        }

        //Process register
        function signup(){
            $result = $this->userModel->register($_POST, $_FILES);
            if($result===true) $this->view("auth/login", []);
            else $this->view("auth/register", []);
        }

        //Process login
        function signin(){
            $result = $this->userModel->authenticate($_POST);
            if($result[0]===true){
                $_SESSION["user"] = $result[1];
                header("Location: ".DOCUMENT_ROOT);
            }
            else {
                echo $result;
                $this->view("auth/login", []);
            }
        }

        function logOut(){
            session_destroy();
            header("Location: ".DOCUMENT_ROOT."/accounts");
        }
    }
?>