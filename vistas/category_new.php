<head>
<style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .display-4 {
            color: #333; /* Color del título principal */
            margin-bottom: 20px;
        }
        .lead {
            color: #666; /* Color del subtítulo */
            font-size: 1.5rem;
            margin-bottom: 40px;
        }
        .form-group label {
            color: #333; /* Color de las etiquetas */
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .btn-info {
            background-color: #ffeb3b;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #333;
        }
        .btn-info:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<div class="main-content">
    <div class="container mb-6">
        <h1 class="display-4">Almacenes</h1>
        <h2 class="lead">Nuevo Almacén</h2>
    </div>

    <div class="container pb-6 pt-6">
        <?php
        include "./inc/btn_back.php";
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
                    <div class="form-group">
                        <label for="almacen_nombre">Nombre</label>
                        <input id="categoria_nombre" class="form-control" type="text" name="almacen_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required >
                    </div>
                    <div class="form-group">
                        <label for="almacen_ubicacion">Ubicación</label>
                        <input id="almacen_ubicacion" class="form-control" type="text" name="almacen_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" >
                    </div>
                    <p class="has-text-centered">
                        <button type="submit" class="btn btn-info btn-rounded">Guardar</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
