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

                $sql = "SELECT user, password, role  
                        FROM users
                        WHERE email LIKE '$username%$domain'";
            } else {
                $sql = "SELECT user, password, role
                        FROM users
                        WHERE user = '$user'";
            }

            try {
                $res = $this -> db -> query($sql);
                $userData = $res -> fetch();
                if ($userData) {
                    if ($userData['password'] == $this -> pass) {
                        $storeUser = $userData['user'];
                        $storeRole = $userData['role'];
                        $_SESSION['user'] = ucwords($storeUser);
                        $_SESSION['role'] = $storeRole;
                        echo json_encode("OK");

                    } else {
                        echo json_encode("User or password incorrect");
                    }
                } else {
                    echo json_encode("User or password incorrect");
                    
                }
            } catch (PDOException $e) {
                echo json_encode("There was a problem accessing the database");
            
            }
        }

        public function checkOut() {
            session_destroy();
            header('Location: ' . BASE_URL . 'index.php?logout');
            
        }
    }