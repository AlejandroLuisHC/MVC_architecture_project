<?php 

    class GenresController {
        public function index() {
            require_once 'models/GenresModel.php';
            $genres = new BandsModel();
            $data["title"] = "Genres";
            $data["genres"] = $genres -> getGenres();
            require_once 'views/genres/genres.php';
        }
    }