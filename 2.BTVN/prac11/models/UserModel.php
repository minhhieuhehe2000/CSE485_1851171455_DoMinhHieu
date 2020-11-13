<?php
    class UserModel{
        // Thuoc tinh lien quan toi DB:
        private $host = 'localhost';
        private $user = 'admin';
        private $pass = 'abcabc';
        private $db = 'Ch01';
        private $table = 'users';
        // Khai bao thuoc tinh
        private $userID;
        private $firstName;
        private $lastName;
        private $email;
        private $password;
        // Bien 
        private $connection;
        // Khai bao phuong thuc
        public function __construct(){
            $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if(!$this->connection){
                die("Khong the ket noi");
            }

        }

        public function getAllUsers(){
            $sql = "SELECT * FROM $this->table";
            $result = mysqli_query($this->connection, $sql);
            $users = mysqli_fetch_all($result);
            return $users;
        }

    }


?>