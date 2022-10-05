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
    }

    