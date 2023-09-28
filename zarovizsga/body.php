<body>

    <?php 
    require_once("menu.php");
    

    switch ($oldalneve) {
        case 'Webshop':
            require_once("mainoldal.php");
            
            break;
        
        case 'Kedvencek':
            require_once("kedvencek.php");
            break;
        case 'Kutya':
            require_once("kutya.php");
            break;
        case 'Macska':
            require_once("Macska.php");
            break;
        case 'Bejelentkezés':
            require_once("bejelentkezes.php");
            break;
        
        default:
            require_once("mainoldal.php");
            break;
    }
    ?>

</body>
</html>