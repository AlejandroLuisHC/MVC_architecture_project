<header>
    <span class="header-title">MVC tables manager</span>
    <nav>
        <?php 
            if(isset($_SESSION['adminMode'])){
                $queryExist = strpos($_SERVER['REQUEST_URI'], '?');
                if ($_SESSION['role'] == 'admin') {
                    if ($queryExist) {
                        if(strpos($_SERVER['REQUEST_URI'], 'changeView')) {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "'type='button' class='btn btn-secondary'>USER view</a>"; 
                        } else {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "&changeView'type='button' class='btn btn-secondary'>USER view</a>"; 
                        }
    
                    } else {
                        if(strpos($_SERVER['REQUEST_URI'], 'changeView')) {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "'type='button' class='btn btn-secondary'>USER view</a>"; 
                        } else {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "?changeView'type='button' class='btn btn-secondary'>USER view</a>"; 
                        }
                    }

                } else {
                    if ($queryExist) {
                        if(strpos($_SERVER['REQUEST_URI'], 'changeView')) {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "'type='button' class='btn btn-secondary'>ADMIN view</a>"; 
                        } else {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "&changeView'type='button' class='btn btn-secondary'>ADMIN view</a>"; 
                        }
    
                    } else {
                        if(strpos($_SERVER['REQUEST_URI'], 'changeView')) {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "'type='button' class='btn btn-secondary'>ADMIN view</a>"; 
                        } else {
                            echo "<a href='" . BASE_HOST_URL . $_SERVER['REQUEST_URI'] . "?changeView'type='button' class='btn btn-secondary'>ADMIN view</a>"; 
                        }
                    }

                }
            }; 
        ?>
        <a href="index.php" type="button" class="btn btn-secondary">Index</a>
        <a href="?C=Login&action=logout" type="button" class="btn btn-danger">Exit</a>
    </nav>
</header>