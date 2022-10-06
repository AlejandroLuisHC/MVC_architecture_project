<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres Dashboard</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="container-fluid text-center mt-3">
        <h2><?php echo $data['title']?></h2>
    </div>

    <div class="container text-center mt-5">
        <a class="col-6 align-self-center btn btn-primary" href="?C=Genres&action=create">Add</a>
    </div>
    
    <div class="container-fluid">
        <table class="mt-3 table table-dark table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id = "tBody">
                <?php 
                    foreach ($data['genres'] as $d) {
                        echo "<tr>";
                        echo "<td>" . $d['genre_id'] . "</td>";
                        echo "<td>" . $d['genre'] . "</td>";
                        echo "<td><a href=''>Update</a> or <a href=''>Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>