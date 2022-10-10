<?php 
    require_once 'config/db.php';

    class LoginModel {
        private string $user;
        private string $pass;
        private $db;

        public function __construct($user, $pass){
            $this -> db = Connect::conection();
            $this -> user = $user;
            $this -> pass = $pass;
        }

        public function checkIn(){
            
        }
        


    }