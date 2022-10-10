<?php
session_start();

class Router {
    function __construct()
    {
        if (isset($_GET['C'])) {
            $controllerName = $_GET['C'] . 'Controller';
            $controllerPath = CONTROLLERS . $_GET['C'] . ".php";
            $fileExists = file_exists($controllerPath);
            if ($fileExists) {
                if (!isset($_GET['action'])) {
                    require_once $controllerPath;
                    if ($_GET['C'] !== 'Login') {
                        $controller = new $controllerName;
                        $controller -> index();
                    } else {
                        if(isset($_SESSION['user'])){
                            require_once VIEWS . "main/main.php";
                        } else {
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $controller = new $controllerName($user, $pass);
                            $controller -> logIn();
                        }
                    }
                } else {
                    if ($_GET['action'] == 'add') {
                        $controller -> add();
                    } else if ($_GET['action'] == 'insert') {
                        $controller -> insert();
                    } else if ($_GET['action'] == 'delete') {
                        $controller -> delete(); 
                    } else if ($_GET['action'] == 'read') {
                        $controller -> read(); 
                    } else if ($_GET['action'] == 'update') {
                        $controller -> update(); 
                    } 
                 }
            } else {
                $errorMsg = "The page you are trying to access does not exist.";
                require_once VIEWS . "error/error.php";
            }
        } else {
            require_once VIEWS . "main/login.php";
        }
    }
}

