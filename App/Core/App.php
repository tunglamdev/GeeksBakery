<?php
    namespace App\Core;

    class App{

        public $controller = "Home";
        public $action = "Index";
        public $params = [];


        function __construct(){
            //Cat url luu vao mang arr
            $arr = $this->urlProcess();
            
            //Xu li Controller
            if(file_exists(CONT.DS.ucfirst($arr[0])."Controller.php")){
                $this->controller = ucfirst($arr[0]);
                unset($arr[0]);
            }
            $this->controller = $this->controller."Controller";
            require_once CONT.DS.$this->controller.".php";
            $this->controller = new $this->controller;

            //Xu ly Action
            if(isset($arr[1])){
                if(method_exists($this->controller, $arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            //Xu ly params
            $this->params = $arr ? array_values($arr) : [];
            
            //Vao lop controller, chay ham action voi tham so params
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function urlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"],"/")));
            }
            else{
                return
                [ "home","index" ];
            }
        }
    }
?>