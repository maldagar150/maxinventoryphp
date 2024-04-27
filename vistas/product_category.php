<div class="container mb-6">
    <h1 class="display-4">Productos</h1>
    <h2 class="lead">Lista de productos por Almacén</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";
    ?>
    <div class="row">
        <div class="col-md-4">
            <h2 class="title text-center">Almacenes</h2>
            <?php
                $almacens=conexion();
                $almacens=$almacens->query("SELECT * FROM almacen");
                if($almacens->rowCount()>0){
                    $almacens=$almacens->fetchAll();
                    foreach($almacens as $row){
                        echo '<a href="index.php?vista=product_category&category_id='.$row['almacen_id'].'" class="btn btn-outline-primary btn-block mb-3">'.$row['almacen_nombre'].'</a>';
                    }
                }else{
                    echo '<p class="text-center">No hay categorías registradas</p>';
                }
                $almacens=null;
            ?>
        </div>
        <div class="col-md-8">
            <?php
                $almacen_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;

                /*== Verificando almacen ==*/
                $check_almacen=conexion();
                $check_almacen=$check_almacen->query("SELECT * FROM almacen WHERE almacen_id='$almacen_id'");

                if($check_almacen->rowCount()>0){

                    $check_almacen=$check_almacen->fetch();

                    echo '
                        <h2 class="title text-center">'.$check_almacen['almacen_nombre'].'</h2>
                        <p class="text-center pb-4">'.$check_almacen['almacen_ubicacion'].'</p>
                    ';

                    require_once "./php/main.php";

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

                    $pagina=limpiar_cadena($pagina);
                    $url="index.php?vista=product_category&category_id=$almacen_id&page="; /* <== */
                    $registros=15;
                    $busqueda="";

                    # Paginador producto #
                    require_once "./php/producto_lista.php";

                }else{
                    echo '<h2 class="text-center title">Seleccione una categoría para empezar</h2>';
                }
                $check_almacen=null;
            ?>
        </div>
    </div>
</div>
