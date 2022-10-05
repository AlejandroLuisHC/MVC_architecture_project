<?php 

    require_once './config/Db.php';
    require_once './controllers/Bands.php';

    $bandsControl = new BandsController ();
    $bandsControl -> index();

    