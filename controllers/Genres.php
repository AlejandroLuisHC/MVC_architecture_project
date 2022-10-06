<?php 

    class GenresController {
        public function index() {
            require_once 'models/GenresModel.php';
            $genres = new GenresModel();
            $data["title"] = "Genres";
            $data["genres"] = $genres -> getGenres();
            require_once 'views/genres/genres.php';
        }

        public function add() {
            $data["title"] = "Genres";
            require_once 'views/genres/genresCreate.php';
        }

        public function insert() {
            $genre = $_POST['genre'];
            
            require_once 'models/GenresModel.php';
            $genres = new GenresModel();
            $genres -> insertGenre($genre);
            $this -> index();
        }

        public function delete() {
            $genre_id  = $_GET['id'];        
            
            require_once 'models/GenresModel.php';
            $genres = new GenresModel();
            $genres -> deleteGenre($genre_id);
            $this -> index();
        }

        public function update() {
            $genre_id  = $_POST['genre_id']; 
            $genre     = $_POST['genre'];
            
            require_once 'models/GenresModel.php';
            $genres = new GenresModel();
            $genres -> updateGenre($genre_id, $genre);
            $this -> index();
        }
    }