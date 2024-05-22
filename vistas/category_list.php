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
    </style>
</head>
<div class="container mb-6">
    <h1 class="display-4">Almacenes</h1>
    <h2 class="lead">Lista de Almacenes</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar almacen #
        if(isset($_GET['category_id_del'])){
            require_once "./php/categoria_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=category_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador almacen #
        require_once "./php/categoria_lista.php";
    ?>
</div>
