<?php 
    require_once 'config/db.php';
    
    class GenresModel {
        private $db;
        private $genres;

        public function __construct () {
            $this -> db = Connect::conection();
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
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function getGenre($genre_id) {
            $sql = "SELECT * FROM genres WHERE genre_id = $genre_id"; 
            try {
                $res = $this -> db -> query($sql);
                while ($row = $res -> fetch()){
                    $this -> genres[] = $row;
                }
                return $this -> genres;     
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }
        
        public function insertGenre($genre) {
            $sql = $this -> db -> prepare(
                "INSERT INTO genres (genre)
                VALUES (?)");

            $sql -> bindParam(1, $genre);

            try {
                $sql -> execute();  
                     
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }
        
        public function deleteGenre($genre_id) {
            $sql = "DELETE FROM genres
                    WHERE genre_id = $genre_id";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }

        public function updateGenres($genre_id, $genre) {
            $sql = "UPDATE genres
                    SET genre = '$genre'
                    WHERE genre_id = $genre_id";
            try {
                $res = $this -> db -> query($sql);       
            } catch (PDOException $e) {
                $errorMsg = "There was a problem accessing the database";
                $e -> getMessage();
                require_once VIEWS . "error/error.php";
            }
        }
    }