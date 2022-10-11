<?php 
    require_once 'config/db.php';

    class UsersModel {
        private $db;
        private $users;

        public function __construct () {
            $this -> db = Connect::conection();
            $this -> users = array();
        }

        public function getUsers() {
            $sql = "SELECT * FROM users";
            try {
                $res = $this -> db -> query($sql);
                while ($row = $res -> fetch()){
                    $this -> users[] = $row;
                }
                return $this -> users;
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function getUser($id) {
            $sql = "SELECT * FROM users WHERE id = $id";
            try {
                $res = $this -> db -> query($sql);
                while ($row = $res -> fetch()){
                    $this -> users[] = $row;
                }
                return $this -> users;
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function insertUser($user, $email, $password, $role) {
            $sql = "INSERT INTO users (user, email, password, role)
                    VALUES ('$user', '$email', '$password', '$role')";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function deleteUser($id) {
            $sql = "DELETE FROM users
                    WHERE id = $id";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function updateUser($id, $user, $email, $password, $role) {
            $sql = "UPDATE users
                    SET
                        user        = '$user',
                        email       = '$email',
                        password    = '$password',
                        role        = '$role',
                    WHERE id = $id";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }
    }