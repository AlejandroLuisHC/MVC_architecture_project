<?php 

    class GenresController {
        public function index() {
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $data["genres"] = $genres -> getGenres();
            require_once VIEWS . 'genres/genres.php';
        }

        public function getData() {
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $data["genres"] = $genres -> getGenres();
            echo json_encode($data['genres']);
        }

        public function add() {
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
            header('Location: ' . BASE_URL . 'index.php?C=Genres');
        }

        public function delete() {
            $genre_id  = $_GET['id'];        
            
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $genres -> deleteGenre($genre_id);
            $this -> getData();
        }

        public function update() {
            $genre_id  = $_POST['genre_id']; 
            $genre     = $_POST['genre'];
            
            require_once MODELS . 'GenresModel.php';
            $genres = new GenresModel();
            $genres -> updateGenres($genre_id, $genre);
            header('Location: ' . BASE_URL . 'index.php?C=Genres');
        }
    }