<?php

    class Mahasiswa_model{

        // CONTOH DATA MODEL MENGGUNAKAN ARRAY
        // private $mhs = [
        //     [
        //         "nama" => "Muammar",
        //         "nim" => "60200121066",
        //         "email" => "muammar@uinam.ac.id",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Aldi",
        //         "nim" => "60200121001",
        //         "email" => "aldi@uinam.ac.id",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Muiz",
        //         "nim" => "60200121002",
        //         "email" => "muiz@uinam.ac.id",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Aji",
        //         "nim" => "60200121003",
        //         "email" => "aji@uinam.ac.id",
        //         "jurusan" => "Teknik Informatika"
        //     ]
        //     ];

        // MENGGUNAKAN DATABASE
        private $dbh; //database handler
        private $stmt;

        public function __construct()
        {
            // data source name, sebagai identitas server
            $dsn = 'mysql:host=localhost;dbname=phpmvc';

            // Cari tau mengenai blok try catch di bawah
            try{
                $this->dbh = new PDO ($dsn, 'root', '');
            } catch(PDOException $e){
                die($e->getMessage());
            }
        }

            public function getAllMahasiswa(){
                $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
                $this->stmt->execute();
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
    }