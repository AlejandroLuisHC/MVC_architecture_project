<?php

    class Connect {
        public static function conection() {
            $host       = 'localhost';
            $database   = 'mysql';
            $port       = 3306;
            $user       = 'root';
            $password   = '';
            try {
                $dbh = new PDO ($database . ":host=" . $host . ';port=' . $port, $user, $password);
                $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbh -> query("USE bands");

                return $dbh;
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                require_once VIEWS . "error/error.php";
            }
        }
    }