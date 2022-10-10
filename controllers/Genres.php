<?php 

    class GenresController {
        public function index() {
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $data["title"] = "Genres";
            $data["genres"] = $genres -> getGenres();
            require_once VIEWS . 'genres/genres.php';
        }

        public function add() {
            $data["title"] = "Genres";
            require_once VIEWS . 'genres/genresCreate.php';
        }

        public function read() {
            $genre_id = $_GET['id'];
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $data["genres"] = $genres -> getGenre($genre_id);
            require_once VIEWS . 'genres/genresUpdate.php';
        }

        public function insert() {
            $genre = $_POST['genre'];
            
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $genres -> insertGenre($genre);
            $this -> index();
        }

        public function delete() {
            $genre_id  = $_GET['id'];        
            
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $genres -> deleteGenre($genre_id);
            $this -> index();
        }

        public function update() {
            $genre_id  = $_POST['genre_id']; 
            $genre     = $_POST['genre'];
            
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $genres -> updateGenres($genre_id, $genre);
            $this -> index();
        }
    }