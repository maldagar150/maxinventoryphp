<div class="container mb-6">
    <h1 class="display-4">Productos</h1>
    <h2 class="lead">Actualizar producto</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        include "./inc/btn_back.php";

        require_once "./php/main.php";

        $id = (isset($_GET['product_id_up'])) ? $_GET['product_id_up'] : 0;
        $id=limpiar_cadena($id);

        /* Verificando producto */
        $check_producto=conexion();
        $check_producto=$check_producto->query("SELECT * FROM producto WHERE producto_id='$id'");

        if($check_producto->rowCount()>0){
            $datos=$check_producto->fetch();
    ?>

    <div class="form-rest mb-6 mt-6"></div>
    
    <h2 class="title text-center"><?php echo $datos['producto_nombre']; ?></h2>

    <form action="./php/producto_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off">

        <input type="hidden" name="producto_id" value="<?php echo $datos['producto_id']; ?>" required>

        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="producto_codigo">Código de barra</label>
                    <input class="form-control" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_codigo']; ?>">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="producto_nombre">Nombre</label>
                    <input class="form-control" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_nombre']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group">
                    <label for="producto_precio">Precio</label>
                    <input class="form-control" type="text" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required value="<?php echo $datos['producto_precio']; ?>">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="producto_stock">Stock</label>
                    <input class="form-control" type="text" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required value="<?php echo $datos['producto_stock']; ?>">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="producto_almacen">Categoría</label>
                    <select class="form-control" name="producto_almacen">
                        <?php
                            $almacens=conexion();
                            $almacens=$almacens->query("SELECT * FROM almacen");
                            if($almacens->rowCount()>0){
                                $almacens=$almacens->fetchAll();
                                foreach($almacens as $row){
                                    if($datos['almacen_id']==$row['almacen_id']){
                                        echo '<option value="'.$row['almacen_id'].'" selected>'.$row['almacen_nombre'].' (Actual)</option>';
                                    }else{
                                        echo '<option value="'.$row['almacen_id'].'">'.$row['almacen_nombre'].'</option>';
                                    }
                                }
                            }
                            $almacens=null;
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-rounded">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
    <?php 
        }else{
            include "./inc/error_alert.php";
        }
        $check_producto=null;
    ?>
</div>
