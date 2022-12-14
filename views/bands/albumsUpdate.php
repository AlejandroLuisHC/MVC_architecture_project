<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update album</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="mt-5 container-fluid">
            <form class="mb-3 container" action="?C=Bands&action=updatealbum&band=<?=$_GET['band']?>" method="POST" name="update" autocomplete="off">
                <fieldset>
                    <legend class="text-center">Update album information</legend>
                    <table class="mt-3 table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Album name</th>
                                <th>Album year</th>
                                <th>Album cover URL</th>
                                <th>Spotify URL</th>
                            </tr>
                        </thead>
                        <tbody id = "tBody">
                            <?php 
                                
                                foreach ($data['album'] as $d) {
                                    echo "<tr>";
                                    echo "<td><input class='form-control' type='number'  name='album_id' value='" . $d['album_id'] . "' readonly></td>";
                                    echo "<td><input class='form-control' type='text'  name='album_name' value='" . $d['album_name'] . "' ></td>";
                                    echo "<td><input class='form-control' type='number' name='album_year' min='1800' max='2023' value='" . $d['album_year'] . "' ></td>"; 
                                    echo "<td><input class='form-control' type='text'  name='album_img' value='" . $d['album_img'] . "' ></td>";
                                    echo "<td><input class='form-control' type='text'  name='spotify' value='" . $d['spotify'] . "' ></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>

                    <div class="mb-3 col-1 container">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>