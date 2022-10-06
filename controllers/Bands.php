<?php 
    
    class BandsController {
        public function index() {
            require_once 'models/BandsModel.php';
            $bands = new BandsModel();
            $data["title"] = "Bands";
            $data["bands"] = $bands -> getBands();
            require_once 'views/bands/bands.php';
        }
        
        public function add() {
            $data["title"] = "Bands";
            require_once 'views/bands/bandsCreate.php';
        }
        
        public function read() {
            $band_id = $_GET['id'];
            require_once 'models/BandsModel.php';
            $bands = new BandsModel();
            $data["bands"] = $bands -> getBand($band_id);
            require_once 'views/bands/bandsUpdate.php';
        }

        public function insert() {
            $band_name  = $_POST['band_name'];
            $no_members = $_POST['no_members']; 
            $no_albums  = $_POST['no_albums'];
            $band_genre = $_POST['band_genre'];
            $formed_in  = $_POST['formed_in'];
            
            require_once 'models/BandsModel.php';
            $bands = new BandsModel();
            $bands -> insertBand($band_name, $no_members, $no_albums, $band_genre, $formed_in);
            $this -> index();
        }

        public function delete() {
            $band_id  = $_GET['id'];        
            
            require_once 'models/BandsModel.php';
            $bands = new BandsModel();
            $bands -> deleteBand($band_id);
            $this -> index();
        }

        public function update() {
            $band_id    = $_POST['band_id']; 
            $band_name  = $_POST['band_name'];
            $no_members = $_POST['no_members']; 
            $no_albums  = $_POST['no_albums'];
            $band_genre = $_POST['band_genre'];
            $formed_in  = $_POST['formed_in'];

            require_once 'models/BandsModel.php';
            $bands = new BandsModel();
            $bands -> updateBand($band_id, $band_name, $no_members, $no_albums, $band_genre, $formed_in);
            $this -> index();
        }
    }
    