<?php

    class App{

        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        public function __construct()
        {
            
            $url = $this->parseURL();

            if($url !== null){
                if(file_exists('../app/controllers/' . $url[0] . '.php')){
                    $this->controller = $url[0];
                    unset($url[0]);
                }
            }

            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            // var_dump($this->controller);
            // exit();
            
            // method
            if(isset($url[1])){
                if(method_exists ($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
        
            // params
            if(!empty($url)){
                $this->params = array_values($url);
            }

            // jalankan controller dan method, serta kirimkan params jika ada
            // var_dump($this->controller);
            // var_dump($this->method);
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
    
        public function parseURL()
        {
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }

