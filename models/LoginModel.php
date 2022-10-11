<?php 
    require_once 'config/db.php';

    class LoginModel {
        private string $user;
        private string $pass;
        private $db;

        public function __construct(){
            $this -> db = Connect::conection();
        }
        
        public function setUser($user, $pass) {
            $this -> user = $user;
            $this -> pass = $pass;
        }

        public function checkIn(){
            $user = $this -> user;

            if (strpos($user, '@') !== false) {
                list($username, $domain) = explode('@', $user);

                $sql = "SELECT user, password  
                        FROM users
                        WHERE email LIKE '$username%$domain'";
            } else {
                $sql = "SELECT user, password 
                        FROM users
                        WHERE user = '$user'";
            }

            try {
                $res = $this -> db -> query($sql);
                $userData = $res -> fetch();
                if ($userData) {
                    if ($userData['password'] == $this -> pass) {
                        $storeUser = $userData['user'];

                        $_SESSION['user'] = $storeUser;
                        require_once VIEWS . "main/main.php";
                    } else {
                        // Wrong password
                        echo "error no pass";
                    }
                } else {
                    // Error: No user found
                    echo "error no user";
                }
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                
            }
        }

        public function checkOut() {
            session_destroy();
        }
    }