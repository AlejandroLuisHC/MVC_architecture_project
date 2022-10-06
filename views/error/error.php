<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <span class="header-title">MVC tables manager</span>
        <nav><a href="index.php" type="button" class="btn btn-secondary">Index</a></nav>
    </header>
    <main>
        <?php
            echo "<h1>". $errorMsg ."</h1>";
        ?>
    </main>
    <footer><small>Alejandro L. Herrero</small></footer>
</body>
</html>