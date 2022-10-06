<?php

class Router {
    function __construct()
    {
        if (isset($_GET['C'])) {
            $controllerName = $_GET['C'] . 'Controller';
            $controllerPath = CONTROLLERS . $_GET['C'] . ".php";
            $fileExists = file_exists($controllerPath);
            if ($fileExists) {
                require_once $controllerPath;
                $controller = new $controllerName;
                if (!isset($_GET['action'])) {
                    $controller -> index();
                } else {
                    if ($_GET['action'] == 'create') {
                        $controller -> add();
                    } else if ($_GET['action'] == 'update') {
                        $controller -> insert();
                    }
                }
            } else {
                $errorMsg = "The page you are trying to access does not exist.";
                require_once VIEWS . "error/error.php";
            }
        } else {
            require_once VIEWS . "main/main.php";
        }
    }
}

