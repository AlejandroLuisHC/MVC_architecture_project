<?php

    $documentRoot = getcwd();

    define("BASE_PATH", $documentRoot);

    $protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';

    $domain = $_SERVER['HTTP_HOST'];

    define('BASE_URL', preg_replace("/\/$/", '', $protocol . $domain . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');
    
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {   
        $url = "https://";   
        } else { 
            $url = "http://"; 
        } 
    define('BASE_HOST_URL', $url . $_SERVER['HTTP_HOST']);