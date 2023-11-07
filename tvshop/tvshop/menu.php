<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?menu=home">Home</a>
                </li>
                <?php
                if ($_SESSION['login']) {
                    echo '<li class="nav-item">
                        <a class="nav-link' . ($menu == 'payment' ? ' active' : '') . '" aria-current="page" href="index.php?menu=payment">Vásárlás</a>
                      </li>
                        <li class = "nav-item">
                            <a class = "nav-link' . ($menu == 'logout' ? ' active' : '') . '" href = "index.php?menu=logout">Kilépés</a>
                        </li>';
            
                } else {

                    echo '<li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'login' ? ' active' : '') . '" href = "index.php?menu=login">Belépés</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'regist' ? ' active' : '') . '" href = "index.php?menu=regist">Regisztráció</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link' . ($menu == 'products' ? ' active' : '') . '" href = "index.php?menu=products">Termékek</a>
                    </li>';
                }
                ?>
            </ul>
            <form class = "d-flex" role = "search">
                <input class = "form-control me-2" type = "search" placeholder = "Search" aria-label = "Search">
                <button class = "btn btn-outline-success" type = "submit">Keresés</button>
            </form>
        </div>
    </div>
</nav>
