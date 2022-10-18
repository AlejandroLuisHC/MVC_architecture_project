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
    <script src="assets/js/dashboard_albums.js" defer></script>
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="container-fluid text-center mt-3">
            <h2 id="tableTitle" class="main-title"><?= $bandName; ?></h2>
        </div>

        <div class="container text-center mt-5">
            <a class="col-6 align-self-center btn btn-primary" href="?C=Bands&action=addalbum&band=<?= $_GET['band']?>">Add</a>
        </div>
        
        <div class="container-fluid">
            <table class="mt-3 table table-dark table-striped">
                <thead>
                    <tr>
                        <th style="width: 150px;">#</th>
                        <th>Album name</th>
                        <th>Album year</th>
                        <th style="width: 200px;">Actions</th>
                    </tr>
                </thead>
                <tbody id="tBody">
                    <?php 
                        // foreach ($data['albums'] as $d) {
                        //     echo "<tr>";
                        //     echo "<td>" . $d['album_id'] . "</td>";
                        //     echo "<td>" . $d['album_name'] . "</td>";
                        //     echo "<td>" . $d['album_year'] . "</td>";
                        //     echo "<td><a class='btn btn-warning' href='?C=Bands&action=readalbum&id=" . $d['album_id'] . "&band=" . $_GET['band'] . "'><i class='fa-solid fa-pen'></i></a> or <a class='btn btn-danger' href='?C=Bands&action=deletealbum&id=" . $d['album_id'] . "&band=" . $_GET['band'] . "'><i class='fa-solid fa-trash'></i></a></td>";
                        //     echo "</tr>";
                        // }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- MODALS -->
        <div id="deleteModalBox"></div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>