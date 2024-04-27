<div class="container mb-6">
    <h1 class="display-4">Almacenes</h1>
    <h2 class="lead">Buscar Almacén</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        if(isset($_POST['modulo_buscador'])){
            require_once "./php/buscador.php";
        }

        if(!isset($_SESSION['busqueda_almacen']) && empty($_SESSION['busqueda_almacen'])){
    ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="almacen">
                <div class="input-group">
                    <input class="form-control rounded" type="text" name="txt_buscador" placeholder="¿Qué estás buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" >
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php } else { ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="text-center mt-6 mb-6" action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="almacen"> 
                <input type="hidden" name="eliminar_buscador" value="almacen">
                <p>Estás buscando <strong>“<?php echo $_SESSION['busqueda_almacen']; ?>”</strong></p>
                <br>
                <button type="submit" class="btn btn-danger">Eliminar búsqueda</button>
            </form>
        </div>
    </div>

    <?php
            # Eliminar categoría #
            if(isset($_GET['category_id_del'])){
                require_once "./php/categoria_eliminar.php";
            }

            if(!isset($_GET['page'])){
                $pagina=1;
            } else {
                $pagina=(int) $_GET['page'];
                if($pagina<=1){
                    $pagina=1;
                }
            }

            $pagina=limpiar_cadena($pagina);
            $url="index.php?vista=category_search&page="; /* <== */
            $registros=15;
            $busqueda=$_SESSION['busqueda_almacen']; /* <== */

            # Paginador categoría #
            require_once "./php/categoria_lista.php";
        } 
    ?>
</div>
