<?php 
    
    class BandsController {
        public function index() {
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBands();
            require_once VIEWS . 'bands/bands.php';
        }

        public function indexAlbums($band) {
            require_once MODELS . 'BandsModel.php';
            $albums = new BandsModel();
            $bandName = ucwords($band);
            $data["albums"] = $albums -> getAlbums($band);
            require_once VIEWS . 'bands/albums.php';
        }
        
        public function indexUser() {
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBands();
            require_once VIEWS . 'bands/bands_user.php';
        }

        public function getData() {
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBands();
            echo json_encode($data['bands']);
        }

        public function add() {
            require_once 'views/bands/bandsCreate.php';
        }
        
        public function read() {
            $band_id = $_GET['id'];
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBand($band_id);
            require_once VIEWS . 'bands/bandsUpdate.php';
        }

        public function insert() {
            $band_name  = $_POST['band_name'];
            $no_members = $_POST['no_members']; 
            $no_albums  = $_POST['no_albums'];
            $band_genre = $_POST['band_genre'];
            $formed_in  = $_POST['formed_in'];
            
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $bands -> insertBand($band_name, $no_members, $no_albums, $band_genre, $formed_in);
            header('Location: ' . BASE_URL . 'index.php?C=Bands');
        }
        
        public function delete() {
            $band_id  = $_GET['id'];        
            
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $bands -> deleteBand($band_id);
            $this -> getData();
        }
        
        public function update() {
            $band_id    = $_POST['band_id']; 
            $band_name  = $_POST['band_name'];
            $no_members = $_POST['no_members']; 
            $no_albums  = $_POST['no_albums'];
            $band_genre = $_POST['band_genre'];
            $formed_in  = $_POST['formed_in'];
            
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $bands -> updateBand($band_id, $band_name, $no_members, $no_albums, $band_genre, $formed_in);
            header('Location: ' . BASE_URL . 'index.php?C=Bands');
        }
    }
    