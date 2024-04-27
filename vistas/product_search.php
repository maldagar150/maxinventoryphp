<div class="container mb-6">
    <h1 class="display-4">Productos</h1>
    <h2 class="lead">Buscar producto</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        if(isset($_POST['modulo_buscador'])){
            require_once "./php/buscador.php";
        }

        if(!isset($_SESSION['busqueda_producto']) && empty($_SESSION['busqueda_producto'])){
    ?>
    <div class="row">
        <div class="col-md">
            <form action="" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="producto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="txt_buscador" placeholder="¿Qué estás buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30">
                    <button class="btn btn-outline-info" type="submit">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <?php }else{ ?>
    <div class="row">
        <div class="col-md">
            <form class="text-center mt-6 mb-6" action="" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="producto"> 
                <input type="hidden" name="eliminar_buscador" value="producto">
                <p>Estás buscando <strong>“<?php echo $_SESSION['busqueda_producto']; ?>”</strong></p>
                <button type="submit" class="btn btn-danger btn-rounded">Eliminar búsqueda</button>
            </form>
        </div>
    </div>
    <?php
            # Eliminar producto #
            if(isset($_GET['product_id_del'])){
                require_once "./php/producto_eliminar.php";
            }

            if(!isset($_GET['page'])){
                $pagina=1;
            }else{
                $pagina=(int) $_GET['page'];
                if($pagina<=1){
                    $pagina=1;
                }
            }

            $almacen_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;

            $pagina=limpiar_cadena($pagina);
            $url="index.php?vista=product_search&page="; /* <== */
            $registros=15;
            $busqueda=$_SESSION['busqueda_producto']; /* <== */

            # Paginador producto #
            require_once "./php/producto_lista.php";
        } 
    ?>
</div>
