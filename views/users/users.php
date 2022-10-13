<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="container-fluid text-center mt-3">
            <h2 class="main-title"><?php echo $data['title']?></h2>
        </div>

        <div class="container text-center mt-5">
            <a class="col-6 align-self-center btn btn-primary" href="?C=Users&action=add">Add</a>
        </div>
        
        <div class="container-fluid">
            <table class="mt-3 table table-dark table-striped">
                <thead>
                    <tr>
                        <th style="width: 150px;">#</th>
                        <th>User</th>
                        <th>email</th>
                        <th>role</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody id = "tBody">
                    <?php 
                        foreach ($data['users'] as $d) {
                            echo "<tr>";
                            echo "<td>" . $d['id'] . "</td>";
                            echo "<td>" . $d['user'] . "</td>";
                            echo "<td>" . $d['email'] . "</td>";
                            echo "<td>" . $d['role'] . "</td>";
                            echo "<td><a href='?C=Users&action=read&id=" . $d['id'] . "'>Update</a> or <a href='?C=Users&action=delete&id=" . $d['id'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>