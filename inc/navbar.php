<head>
<style>
        .navbar {
            background: linear-gradient(45deg, #1e90ff, #00bfff); /* Degradado de color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        .navbar-brand img {
            width: 150px; /* Ajustar el tamaño del logo */
            height: auto;
        }
        .navbar-nav .nav-link {
            color: #fff !important; /* Color de texto blanco */
        }
        .navbar-nav .nav-link:hover {
            color: #ffeb3b !important; /* Color de texto al pasar el cursor */
        }
        .dropdown-menu {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
        }
        .dropdown-item:hover {
            background-color: #1e90ff; /* Fondo al pasar el cursor */
            color: #fff !important; /* Color de texto blanco al pasar el cursor */
        }
        .btn-primary, .btn-danger {
            border-radius: 20px; /* Botones redondeados */
        }
        .btn-primary {
            background-color: #ffeb3b; /* Color de botón personalizado */
            border: none;
            color: #333;
        }
        .btn-primary:hover {
            background-color: #ffd700; /* Color al pasar el cursor */
        }
        .btn-danger {
            background-color: #ff4d4d; /* Color de botón personalizado */
            border: none;
        }
        .btn-danger:hover {
            background-color: #ff1a1a; /* Color al pasar el cursor */
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
    <a class="navbar-brand" href="index.php?vista=home">
        <img src="./img/logo.png">
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
            <a href="index.php?vista=logout" class="btn btn-danger">Salir</a>
        </div>
    </div>
</nav>
