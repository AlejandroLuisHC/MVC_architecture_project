<?php 

   require_once "config/constants.php";
   require_once "config/db.php";
   require_once "core/Router.php";
   
   $router = new Router();

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="container col-8 justify-content-center align-items-center"></div>
    <div class="container-fluid text-center mt-3">
        <h2>Available tables:</h2>
    </div>
    <div class="mt-3 container list-group">
        <a href="core/Router.php?C=Bands" class="list-group-item list-group-item-action">List of bands</a>
        <a href="core/Router.php?C=Styles" class="list-group-item list-group-item-action">List of styles</a>
    </div>
</body>
</html> -->