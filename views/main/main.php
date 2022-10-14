<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="welcome">
            <h2 class="mt-5">Welcome, <?php $userSession = $_SESSION['user']; echo $userSession; if(isset($_SESSION['adminMode'])){$role = $_SESSION['role']; echo "<br>Role: $role";};?>.</h2>
        </div>
        <div class="mt-5 container col-8 justify-content-center align-items-center">
            <h2>Tables availables</h2>
            <div class="list-group">
                <a class="list-group-item list-group-item-action" href="?C=Bands">List of bands</a>
                <a class="list-group-item list-group-item-action" href="?C=Genres">List of genres</a>
                <?php 
                    if ($_SESSION['role'] == 'admin') {
                        echo "<a class='list-group-item list-group-item-action' href='?C=Users'>List of users</a>";
                    }
                ?>
            </div>
        </div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>