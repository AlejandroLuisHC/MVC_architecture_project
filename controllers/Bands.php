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
    }
    