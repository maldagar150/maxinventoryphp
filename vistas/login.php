<head>
<style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('./img/fondo.jpg'); /* Reemplaza con la ruta a tu imagen */
            background-size: cover;
            background-position: center;
        }
        .main-container {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main-container > .login,
        .main-container > .hero-body {
            height: auto;
            width: 100%;
            max-width: 400px;
            min-width: 300px;
            background: rgba(255, 255, 255, 0.7); /* Aumentamos la transparencia */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Disminuimos la sombra */
        }
        .form-inline {
            display: inline-flex;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-rounded {
            border-radius: 50px;
        }
        .form-group label {
            font-weight: bold;
        }
        .main-container img {
            display: block;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>

<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off">
        <img src="./img/Logo.png" width="200" height="60">

        <div class="form-group">
            <label for="login_usuario" class="label">Usuario</label>
            <div class="control">
                <input id="login_usuario" class="form-control" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
            </div>
        </div>

        <div class="form-group">
            <label for="login_clave" class="label">Contraseña</label>
            <div class="control">
                <input id="login_clave" class="form-control" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
            </div>
        </div>

        <p class="text-center mb-4 mt-3">
            <button type="submit" class="btn btn-info btn-rounded">Iniciar sesión</button>
        </p>

        <?php
            if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                require_once "./php/main.php";
                require_once "./php/iniciar_sesion.php";
            }
        ?>
    </form>
</div>