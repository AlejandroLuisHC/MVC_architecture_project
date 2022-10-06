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
            $sql = "SELECT b.band_id, b.band_name, b.no_members, b.no_albums, g.genre, b.formed_in 
                    FROM bands_data b 
                    LEFT JOIN genres g 
                    ON band_genre = genre_id";
            try {
                $res = $this -> db -> query($sql);
                while ($row = $res -> fetch()){
                    $this -> bands[] = $row;
                }
                return $this -> bands;
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                require_once VIEWS . "error/error.php";
            }
        }

        public function insertBand($band_name, $no_members, $no_albums, $band_genre, $formed_in) {
            $sql = "INSERT INTO bands_data (band_name, no_members, no_albums, band_genre, formed_in)
                    VALUES ('$band_name', '$no_members', '$no_albums', '$band_genre', '$formed_in')";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                require_once VIEWS . "error/error.php";
            }
        }
    }