<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add band</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="mt-5 container-fluid">
        <form class="mb-3 container justify-content-center" action="?C=Bands&action=insert" method="POST" name="new" autocomplete="off">
            <fieldset>
                <legend class="text-center">Add new band to the database</legend>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="band_name">Band name:</label>
                    <input class="form-control" type="text" maxlength="25" name="band_name">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="no_members">No. members:</label>
                    <input class="form-control" type="number" name="no_members">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="no_albums">No. albums:</label>
                    <input class="form-control" type="number" name="no_albums">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="band_genre">Band Genre:</label>
                    <select class="form-select" name="band_genre">
                        <option value="1">Heavy Metal</option>
                        <option value="2">Death Metal</option>
                        <option value="3">Black Metal</option>
                        <option value="4">Folk Metal</option>
                        <option value="5">Power Metal</option>
                    </select>
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="formed_in">Formed in:</label>
                    <input class="form-control" type="number" min="1800" max="2023" name="formed_in" value="2022">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>