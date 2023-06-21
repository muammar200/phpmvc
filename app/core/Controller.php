<?php   

    class Controller{
        public function view($view, $data = []){
            // var_dump($view);
            require_once "../app/views/" . $view . ".php";
            // var_dump($view);
           }
           
           public function model($model){
            // var_dump($model);
            require_once "../app/models/" . $model . ".php";
            return new $model;
           }
    }