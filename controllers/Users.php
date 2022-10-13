<?php 
    
    class UsersController {
        public function index() {
            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $data["users"] = $users -> getUsers();
            
            require_once VIEWS . 'users/users.php';
        }
        
        public function getData() {
            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $data["users"] = $users -> getUsers();
            echo json_encode($data['users']);
        }

        public function add() {
            require_once 'views/users/usersCreate.php';
        }
        
        public function read() {
            $id = $_GET['id'];
            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $data["users"] = $users -> getUser($id);
            require_once VIEWS . 'users/usersUpdate.php';
        }

        public function insert() {
            $user       = $_POST['user'];
            $email      = $_POST['email']; 
            $password   = $_POST['password'];
            $role       = $_POST['role'];
            
            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $users -> insertUser($user, $email, $password, $role);
            header('Location: ' . BASE_URL . 'index.php?C=Users');
        }

        public function delete() {
            $id  = $_GET['id'];        
            
            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $users -> deleteUser($id);
            $this -> getData();
        }

        public function update() {
            $id         = $_POST['id']; 
            $user       = $_POST['user'];
            $email      = $_POST['email']; 
            $password   = $_POST['password'];
            $role       = $_POST['role'];

            require_once MODELS . 'UsersModel.php';
            $users = new UsersModel();
            $users -> updateBand($id, $user, $email, $password, $role);
            header('Location: ' . BASE_URL . 'index.php?C=Users');
        }
    }
    