<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <a class="navbar-brand" href="index.php?vista=home">
        <img src="./img/logo.png" width="200" height="60" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasicExample" aria-controls="navbarBasicExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarBasicExample">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUsers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownUsers">
                    <a class="dropdown-item" href="index.php?vista=user_new">Nuevo</a>
                    <a class="dropdown-item" href="index.php?vista=user_list">Lista</a>
                    <a class="dropdown-item" href="index.php?vista=user_search">Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWarehouse" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Almacen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownWarehouse">
                    <a class="dropdown-item" href="index.php?vista=category_new">Nuevo</a>
                    <a class="dropdown-item" href="index.php?vista=category_list">Lista</a>
                    <a class="dropdown-item" href="index.php?vista=category_search">Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                    <a class="dropdown-item" href="index.php?vista=product_new">Nuevo</a>
                    <a class="dropdown-item" href="index.php?vista=product_list">Lista</a>
                    <a class="dropdown-item" href="index.php?vista=product_category">Por Almacen</a>
                    <a class="dropdown-item" href="index.php?vista=product_search">Buscar</a>
                </div>
            </li>
        </ul>
        <div class="navbar-nav">
            <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="btn btn-primary mr-2">Mi cuenta</a>
            <a href="index.php?vista=logout" class="btn btn-link">Salir</a>
        </div>
    </div>
</nav>
