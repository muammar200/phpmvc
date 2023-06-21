<?php
    
    class Contact extends Controller {
        public function index(){
            $data['judul'] = 'Contact';
            $this->view('template/header', $data);
            $this->view('contact/index', $data);
            $this->view('template/footer');
        }
    }