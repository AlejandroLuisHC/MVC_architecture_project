<?php 
    require_once 'config/db.php';
    

    class BandsModel {
        private $db;
        private $genres;

        public function __construct () {
            $this -> db = Connect::conexion();
            $this -> styles = array();
        }

        public function getGenres() {
            $sql = "SELECT * FROM genres"; 
            try {
                $res = $this -> db -> query($sql);
                while ($row = $res -> fetch()){
                    $this -> genres[] = $row;
                }
                return $this -> genres;     
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                require_once VIEWS . "error/error.php";
            }
        }
    }