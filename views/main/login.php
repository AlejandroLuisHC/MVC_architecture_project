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
    <header>
        <span class="header-title">MVC tables manager</span>
    </header>
    <main>
        <div class="mt-5 container col-8 justify-content-center align-items-center">
            <form class="mb-3 container justify-content-center" action="index.php?C=Login" method="POST">
                <fieldset>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="user">User or email:</label>
                    <input class="form-control" type="text" name="user">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <label class="form-label" for="pass">Password:</label>
                    <input class="form-control" type="password" name="pass">
                </div>
                <div class="mb-3 col-6 container justify-content-center">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
                </fieldset>
            </form>
        </div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>