<?php 

    class StylesController {

        public function index() {

            require_once 'models/StylesModel.php';
            $styles = new BandsModel();
            
            $data["title"] = "Styles";
            $data["styles"] = $styles -> getStyles();

            require_once 'views/styles/styles.php';
        }
    }