<?php

    class LoginController {
        private string $user;
        private string $pass;

        public function __construct($user, $pass) {
            $this -> user = $user;
            $this -> pass = $pass;
        }

        public function logIn() {
            require_once MODELS . 'LoginModel.php';
            $user = new LoginModel($this -> user, $this -> pass);
            $user -> checkIn();
        }
    }