<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require_once 'database.php';
$db = new database("localhost", "root", "", "tvshop");
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}

require_once 'head.php';
$menu = filter_input(INPUT_GET, "menu");
?>
<html>
    <body>
        <?php
        require_once './home.php';
        require_once './menu.php';
        require_once './tartalom.php';

        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>



