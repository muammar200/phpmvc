<?php
    var_dump(DB_HOST);
    class Database{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $db_name = DB_NAME;

        private $dbh;
        private $stmt;

        public function __construct()
        {
            
        }
    }