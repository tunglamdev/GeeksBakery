<?php
    use App\Core\Controller;

    class CakesController extends Controller{
        function Index(){
            $this->view("cakes/index", []);
        }
    }
?>