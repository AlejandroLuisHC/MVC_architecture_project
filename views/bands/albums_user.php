<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/fe24ce668c.js" crossorigin="anonymous"></script>
    <script src="assets/js/dashboard.js" defer></script>
</head>
<body class="body-albums">
    <?php require_once(HEADER) ?>
    <main>
        <section class="albums-section">
            <div class="container-fluid text-center mt-3">
                <h2 id="tableTitle" class="mt-4 main-title-albums"><?= $bandName; ?>'s albums</h2>
            </div>
            <div class="albums">
            <?php
                foreach ($data['albums'] as $d) {
                echo "
                    <div class='album-card'>
                        <div class='info-album'>
                            <h3 class='album-title'>" . $d['album_name'] . "</h3>
                            <span>" . $d['album_year'] . "</span>
                        </div>
                        <div class='img-container'><img src='" . $d['album_img'] . "' alt='" . $d['album_name'] . "'></div>
                        <a class='spotify-btn' href='" . $d['spotify'] . "' target='_blank'>Listen now! <i class='fa-brands fa-spotify'></i></a>
                    </div>
                ";
                }
            ?>
            </div>
        </section>

    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>