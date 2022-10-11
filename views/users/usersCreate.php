<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="mt-5 container-fluid">
            <form class="mb-3 container justify-content-center" action="?C=Users&action=insert" method="POST" name="new" autocomplete="off">
                <fieldset>
                    <legend class="text-center">Add new user to the database</legend>
                    <div class="mb-3 col-6 container justify-content-center">
                        <label class="form-label" for="user">Username:</label>
                        <input class="form-control" type="text" maxlength="25" name="user">
                    </div>
                    <div class="mb-3 col-6 container justify-content-center">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" maxlength="50" name="email">
                    </div>
                    <div class="mb-3 col-6 container justify-content-center">
                        <label class="form-label" for="password">Password:</label>
                        <input class="form-control" type="password" maxlength="25" name="password">
                    </div>
                    <div class="mb-3 col-6 container justify-content-center">
                        <label class="form-label" for="role">Role:</label>
                        <select class="form-select" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="mb-3 col-6 container justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
    <?php require_once(FOOTER) ?>
</body>
</html>