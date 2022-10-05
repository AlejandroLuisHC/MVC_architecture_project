<?php

    class Connect {
        public static function conexion() {
            $host       = 'localhost';
            $database   = 'mysql';
            $port       = 3306;
            $user       = 'root';
            $password   = '';
            $dbh = new PDO ($database . ":host=" . $host . ';port=' . $port, $user, $password);
            $dbh -> query("USE bands");
            return $dbh;
        }
    }