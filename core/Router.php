<?php
    session_start();

    class Router {
        function __construct() {
            if (isset($_GET['logout'])) {
                $logMsg = "<span class='alert alert-success'>You have successfully logged out.<span>";
                require_once VIEWS . "main/login.php";
            }

            if (isset($_GET['changeView'])) {
                
                $_SESSION['role'] = $_SESSION['role'] == 'admin'
                                                        ? 'user' 
                                                        : 'admin';
            }
            
            if (isset($_GET['display'])) {
                $controllerName = $_GET['C'] . 'Controller';
                $controllerPath = CONTROLLERS . $_GET['C'] . ".php";
                $fileExists = file_exists($controllerPath);
                require_once $controllerPath;
                $controller = new $controllerName();
                $controller -> getData();
                
            } else if (isset($_GET['displayAlbums'])) {
                $controllerName = $_GET['C'] . 'Controller';
                $controllerPath = CONTROLLERS . $_GET['C'] . ".php";
                $fileExists = file_exists($controllerPath);
                require_once $controllerPath;
                $controller = new $controllerName();

                $controller -> getDataAlbums(strtolower($_GET['band']));

            } else if (!isset($_GET['C'])) {
                if (isset($_SESSION['user'])) {
                    require_once VIEWS . "main/main.php";

                } else {
                    require_once VIEWS . "main/login.php";

                }

            } else {
                $controllerName = $_GET['C'] . 'Controller';
                $controllerPath = CONTROLLERS . $_GET['C'] . ".php";
                $fileExists = file_exists($controllerPath);
                require_once $controllerPath;
                $controller = new $controllerName();
                
                if ($fileExists) {
                    if (!isset($_GET['action'])) {                       
                        if ($_GET['C'] !== 'Login') {
                            if (!isset($_SESSION['user'])) {
                                require_once VIEWS . "main/login.php";
                            } else {
                                if($_SESSION['role'] !== 'admin') {
                                    $controller -> indexUser();
                                } else { 
                                    $controller -> index();
                                }
                            }   

                        } else {
                            if (!isset($_SESSION['user'])) {
                                if (isset($_POST['user']) and isset($_POST['pass'])) {
                                    $user = $_POST['user'];
                                    $pass = $_POST['pass'];
                                    $controller -> setUser($user, $pass);
                                    $controller -> logIn();

                                } else {
                                    require_once VIEWS . "main/login.php";
                                }
                            } else  {
                                require_once VIEWS . "main/main.php";   
                            }
                        }

                    } else {
                        if (!isset($_SESSION['user'])) {
                            require_once VIEWS . "main/login.php";   

                        } else {
                            if (strtolower($_GET['action']) == 'add') {
                                $controller -> add();

                            } else if (strtolower($_GET['action']) == 'addalbum') {
                                $controller -> addAlbum();

                            } else if (strtolower($_GET['action']) == 'insert') {
                                $controller -> insert();

                            } else if (strtolower($_GET['action']) == 'insertalbum') {
                                $controller -> insertAlbum(strtolower($_GET['band']));

                            } else if (strtolower($_GET['action']) == 'delete') {
                                $controller -> delete(); 

                            } else if (strtolower($_GET['action']) == 'deletealbum') {
                                $controller -> deleteAlbum(strtolower($_GET['band'])); 

                            } else if (strtolower($_GET['action']) == 'read') {
                                $controller -> read(); 

                            } else if (strtolower($_GET['action']) == 'readalbum') {
                                $controller -> readAlbum(strtolower($_GET['band'])); 
                                
                            } else if (strtolower($_GET['action']) == 'update') {
                                $controller -> update(); 

                            } else if (strtolower($_GET['action']) == 'updatealbum') {
                                $controller -> updateAlbum(strtolower($_GET['band'])); 

                            } else if (strtolower($_GET['action']) == 'logout') {
                                $controller -> logOut(); 

                            } else if (strtolower($_GET['action']) == 'albums') {
                                $controller -> indexAlbums(strtolower($_GET['band'])); 

                            }
                        }
                    }

                } else {
                    $errorMsg = "The page you are trying to access does not exist.";
                    require_once VIEWS . "error/error.php";

                }  
            }
        }
    }

