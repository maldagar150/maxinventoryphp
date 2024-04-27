<div class="container mb-6">
    <h1 class="display-4">Almacenes</h1>
    <h2 class="lead">Actualizar Almacén</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        include "./inc/btn_back.php";

        require_once "./php/main.php";

        $id = (isset($_GET['category_id_up'])) ? $_GET['category_id_up'] : 0;
        $id = limpiar_cadena($id);

        /*== Verificando categoría ==*/
        $check_almacen = conexion();
        $check_almacen = $check_almacen->query("SELECT * FROM almacen WHERE almacen_id='$id'");

        if ($check_almacen->rowCount() > 0) {
            $datos = $check_almacen->fetch();
    ?>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-rest mb-6 mt-6"></div>
            <form action="./php/categoria_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off">
                <input type="hidden" name="almacen_id" value="<?php echo $datos['almacen_id']; ?>" required>
                <div class="form-group">
                    <label for="almacen_nombre">Nombre</label>
                    <input id="almacen_nombre" class="form-control" type="text" name="almacen_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required value="<?php echo $datos['almacen_nombre']; ?>">
                </div>
                <div class="form-group">
                    <label for="almacen_ubicacion">Ubicación</label>
                    <input id="almacen_ubicacion" class="form-control" type="text" name="almacen_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" value="<?php echo $datos['almacen_ubicacion']; ?>">
                </div>
                <p class="text-center">
                    <button type="submit" class="btn btn-success btn-rounded">Actualizar</button>
                </p>
            </form>
        </div>
    </div>

    <?php 
        } else {
            include "./inc/error_alert.php";
        }
        $check_almacen = null;
    ?>
</div>
