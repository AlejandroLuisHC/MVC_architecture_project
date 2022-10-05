<?php 

    class StylesController {

        public function index() {

            require_once 'models/StylesModel.php';
            $bands = new BandsModel();
            
            $data["title"] = "Styles";
            $data["styles"] = $styles -> getStyles();

            require_once 'views/styles.php';
        }
    }