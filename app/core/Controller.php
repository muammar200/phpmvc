<?php   

    class Controller{
        public function view($view, $data = []){
            require_once "../app/views/" . $view . ".php";
            // var_dump($view);
           }
    }