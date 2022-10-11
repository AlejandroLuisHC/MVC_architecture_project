<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once(HEADER) ?>
    <main>
        <div class="mt-5 container-fluid">
            <form class="mb-3 container" action="?C=Users&action=update" method="POST" name="update" autocomplete="off">
                <fieldset>
                    <legend class="text-center">Update User information</legend>
                    <table class="mt-3 table table-dark table-striped">
                        <thead>
                            <tr>
                                <th style='width: 100px;'>#</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody id = "tBody">
                            <?php 
                                function selectRole($r) {
                                    switch ($r) {
                                        case 'admin':
                                            $op = <<<op
                                                <option value="admin" selected>Admin</option>
                                                <option value="user">User</option>
                                            op;
                                            return $op;
                                            break;
                                        case 'user':
                                            $op = <<<op
                                                <option value="admin">Admin</option>
                                                <option value="user" selected>User</option>
                                            op;
                                            return $op;
                                            break;
                                    }
                                }


                                foreach ($data['users'] as $d) {
                                    $option = selectRole($d['role']);
                                    echo "<tr>";
                                    echo "<td><input class='form-control' style='width: 60px;' type='number'  name='id' value='" . $d['id'] . "' readonly></td>";
                                    echo "<td><input class='form-control' type='text'  name='user' value='" . $d['user'] . "' ></td>";
                                    echo "<td><input class='form-control' type='email'  name='email' value='" . $d['email'] . "' ></td>";
                                    echo "<td><input class='form-control' type='password'  name='password' value='" . $d['password'] . "' ></td>";
                                    echo "<td> <select class='form-select' name='role'>";
                                    echo $option;
                                    echo "</select></td>";
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