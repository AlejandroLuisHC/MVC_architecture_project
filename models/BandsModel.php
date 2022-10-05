<?php 
    require_once 'config/db.php';

    class BandsModel {
        private $db;
        private $bands;

        public function __construct () {
            $this -> db = Connect::conexion();
            $this -> bands = array();
        }

        public function getBands() {
            $sql = "SELECT b.band_id, b.band_name, b.no_members, b.no_albums, s.style, b.formed_in 
                    FROM bands_data b 
                    LEFT JOIN styles s 
                    ON band_style = style_id";
            $res = $this -> db -> query($sql);
            
            while ($row = $res -> fetch()){
                $this -> bands[] = $row;
            }

            return $this -> bands;
        }

        public function insertBand($band_name, $no_members, $no_albums, $style, $formed_in) {
            $sql = "INSERT INTO bands_data (band_name, no_members, no_albums, style, formed_in)
                    VALUES ('$band_name', '$no_members', '$no_albums', '$style', '$formed_in')";
            $res = $this -> db -> query($sql);
        }
    }