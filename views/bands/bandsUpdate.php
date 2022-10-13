<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update band</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="mt-5 container-fluid">
            <form class="mb-3 container" action="?C=Bands&action=update" method="POST" name="update" autocomplete="off">
                <fieldset>
                    <legend class="text-center">Update band information</legend>
                    <table class="mt-3 table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>No. members</th>
                                <th>No. albums</th>
                                <th>Genre</th>
                                <th>Formed in</th>
                            </tr>
                        </thead>
                        <tbody id = "tBody">
                            <?php 
                                function selectGenre($g) {
                                    switch ($g) {
                                        case 1:
                                            $op = <<<op
                                                <option value="1" selected>Heavy Metal</option>
                                                <option value="2">Death Metal</option>
                                                <option value="3">Black Metal</option>
                                                <option value="4">Folk Metal</option>
                                                <option value="5">Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                        case 2:
                                            $op = <<<op
                                                <option value="1">Heavy Metal</option>
                                                <option value="2" selected>Death Metal</option>
                                                <option value="3">Black Metal</option>
                                                <option value="4">Folk Metal</option>
                                                <option value="5">Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                        case 3:
                                            $op = <<<op
                                                <option value="1">Heavy Metal</option>
                                                <option value="2">Death Metal</option>
                                                <option value="3" selected>Black Metal</option>
                                                <option value="4">Folk Metal</option>
                                                <option value="5">Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                        case 4:
                                            $op = <<<op
                                                <option value="1">Heavy Metal</option>
                                                <option value="2">Death Metal</option>
                                                <option value="3">Black Metal</option>
                                                <option value="4" selected>Folk Metal</option>
                                                <option value="5">Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                        case 5:
                                            $op = <<<op
                                                <option value="1">Heavy Metal</option>
                                                <option value="2">Death Metal</option>
                                                <option value="3">Black Metal</option>
                                                <option value="4">Folk Metal</option>
                                                <option value="5" selected>Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                        default:
                                            $op = <<<op
                                                <option value="1">Heavy Metal</option>
                                                <option value="2">Death Metal</option>
                                                <option value="3">Black Metal</option>
                                                <option value="4">Folk Metal</option>
                                                <option value="5">Power Metal</option>
                                            op;
                                            return $op;
                                            break;
                                            
                                    };
                                }

                                foreach ($data['bands'] as $d) {
                                    $option = selectGenre($d['band_genre']);
                                    echo "<tr>";
                                    echo "<td><input class='form-control' type='number'  name='band_id' value='" . $d['band_id'] . "' readonly></td>";
                                    echo "<td><input class='form-control' type='text'  name='band_name' value='" . $d['band_name'] . "' ></td>";
                                    echo "<td><input class='form-control' type='number'  name='no_members' value='" . $d['no_members'] . "' ></td>";
                                    echo "<td><input class='form-control' type='number'  name='no_albums' value='" . $d['no_albums'] . "' ></td>";
                                    echo "<td> <select class='form-select' name='band_genre'>";
                                    echo $option;
                                    echo "</select></td>";
                                    echo "<td><input class='form-control' type='number' min='1800' max='2023' name='formed_in' value='" . $d['formed_in'] . "' ></td>"; 
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