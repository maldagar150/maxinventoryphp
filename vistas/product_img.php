<div class="container mb-6">
    <h1 class="display-4">Productos</h1>
    <h2 class="lead">Actualizar imagen de producto</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        include "./inc/btn_back.php";

        require_once "./php/main.php";

        $id = (isset($_GET['product_id_up'])) ? $_GET['product_id_up'] : 0;

        /*== Verificando producto ==*/
        $check_producto = conexion();
        $check_producto = $check_producto->query("SELECT * FROM producto WHERE producto_id='$id'");

        if ($check_producto->rowCount() > 0) {
            $datos = $check_producto->fetch();
    ?>

    <div class="form-rest mb-6 mt-6"></div>

    <div class="row">
        <div class="col-md-5">
            <?php if (is_file("./img/producto/" . $datos['producto_foto'])) { ?>
            <figure class="figure mb-6 text-center">
                <img src="./img/producto/<?php echo $datos['producto_foto']; ?>" class="img-fluid">
            </figure>
            <form class="FormularioAjax" action="./php/producto_img_eliminar.php" method="POST" autocomplete="off">
                <input type="hidden" name="img_del_id" value="<?php echo $datos['producto_id']; ?>">
                <p class="text-center">
                    <button type="submit" class="btn btn-danger btn-rounded">Eliminar imagen</button>
                </p>
            </form>
            <?php } else { ?>
            <figure class="figure mb-6 text-center">
                <img src="./img/producto.png" class="img-fluid">
            </figure>
            <?php } ?>
        </div>
        <div class="col-md-7">
            <form class="mb-6 text-center FormularioAjax" action="./php/producto_img_actualizar.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h4 class="display-4 mb-6"><?php echo $datos['producto_nombre']; ?></h4>
                <label class="form-label">Foto o imagen del producto</label><br>
                <input type="hidden" name="img_up_id" value="<?php echo $datos['producto_id']; ?>">
                <div class="input-group mb-6">
                    <input class="form-control" type="file" name="producto_foto" accept=".jpg, .png, .jpeg" aria-describedby="inputGroupFileAddon04" required>
                    <label class="input-group-text" for="inputGroupFile04">Subir</label>
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
        $check_producto = null;
    ?>
</div>
