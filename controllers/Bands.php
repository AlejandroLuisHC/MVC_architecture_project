<?php 
    
    class BandsController {
        public function index() {
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBands();
            require_once VIEWS . 'bands/bands.php';
        }

        public function indexAlbums($band) {
            $table = str_replace(' ', '_', $band) . '_albums';

            require_once MODELS . 'BandsModel.php';
            $albums = new BandsModel();
            $bandName = ucwords($band);
            $data["albums"] = $albums -> getAlbums($band, $table);
            if ($_SESSION['role'] == 'user') {
                require_once VIEWS . 'bands/albums.php';
                
            } else if ($_SESSION['role'] == 'admin') {
                require_once VIEWS . 'bands/albums_user.php';

            }
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
        public function addAlbum() {
            require_once 'views/bands/albumCreate.php';
        }
        
        public function read() {
            $band_id = $_GET['id'];
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBand($band_id);
            require_once VIEWS . 'bands/bandsUpdate.php';
        }

        public function readAlbum($band) {
            $table = str_replace(' ', '_', $band) . '_albums';

            $band_id = $_GET['id'];
            require_once MODELS . 'BandsModel.php';
            $albums = new BandsModel();
            $data["album"] = $albums -> getBand($table, $band_id);
            require_once VIEWS . 'bands/albumsUpdate.php';
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

        public function insertAlbum($band) {
            $table = str_replace(' ', '_', $band) . '_albums';

            $album_name     = $_POST['album_name'];
            $album_img      = $_POST['album_img']; 
            $spotify        = $_POST['spotify'];
            $album_year     = $_POST['album_year'];
            
            require_once MODELS . 'BandsModel.php';
            $albums = new BandsModel();
            $albums -> insertBand($table, $album_name, $album_img, $spotify, $album_year);
            header('Location: ' . BASE_URL . 'index.php?C=Bands&action=albums&band=' . $band);
        }
        
        public function delete() {
            $band_id  = $_GET['id'];        
            
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $bands -> deleteBand($band_id);
            $this -> getData();
        }
        public function deleteAlbum($band) {
            $table = str_replace(' ', '_', $band) . '_albums';
            $album_id  = $_GET['albumID'];       
            
            require_once MODELS . 'BandsModel.php';
            $albums = new BandsModel();
            $albums -> deletAlbum($table, $album_id);
            $this -> indexAlbums($band);
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

        public function updateAlbum($band) {
            $table = str_replace(' ', '_', $band) . '_albums';

            $album_id       = $_POST['album_id'];
            $album_name     = $_POST['album_name'];
            $album_img      = $_POST['album_img']; 
            $spotify        = $_POST['spotify'];
            $album_year     = $_POST['album_year'];
            
            require_once MODELS . 'BandsModel.php';
            $bands = new BandsModel();
            $bands -> updateBand($table, $album_id, $album_name, $album_img, $spotify, $album_year);
            header('Location: ' . BASE_URL . 'index.php?C=Bands&action=albums&band=' . $band);
        }
    }
    