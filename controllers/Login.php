<?php

    class LoginController {
        private string $user;
        private string $pass;

        public function setUser($user, $pass) {
            $this -> user = $user;
            $this -> pass = $pass;
        }

        public function logIn() {
            require_once MODELS . 'LoginModel.php';
            $user = new LoginModel();
            $user -> setUser($this -> user, $this -> pass);
            $user -> checkIn();
        }
        
        public function logOut() {
            require_once MODELS . 'LoginModel.php';
            $user = new LoginModel();
            $user -> checkOut();
            header('Location: ' . MAIN_PAGE);
            
        }
    }