<?php 
    require_once 'config/db.php';

    class BandsModel {
        private $db;
        private $styles;

        public function __construct () {
            $this -> db = Connect::conexion();
            $this -> styles = array();
        }

        public function getStyles() {
            $sql = "SELECT * FROM styles";  
            $res = $this -> db -> query($sql);
            
            while ($row = $res -> fetch()){
                $this -> styles[] = $row;
            }

            return $this -> styles;
        }
    }