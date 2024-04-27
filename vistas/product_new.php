<div class="container mb-6">
    <h1 class="display-4">Productos</h1>
    <h2 class="lead">Nuevo producto</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";
    ?>

    <div class="form-rest mb-6 mt-6"></div>

    <form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_codigo">Código</label>
                    <input class="form-control" type="text" id="producto_codigo" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_nombre">Nombre</label>
                    <input class="form-control" type="text" id="producto_nombre" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_precio">Precio</label>
                    <input class="form-control" type="text" id="producto_precio" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_stock">Cantidad</label>
                    <input class="form-control" type="text" id="producto_stock" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_almacen">Categoría</label>
                    <select class="form-select" id="producto_almacen" name="producto_almacen">
                        <option value="" selected>Seleccione una opción</option>
                        <?php
                            $almacens = conexion();
                            $almacens = $almacens->query("SELECT * FROM almacen");
                            if ($almacens->rowCount() > 0) {
                                $almacens = $almacens->fetchAll();
                                foreach ($almacens as $row) {
                                    echo '<option value="' . $row['almacen_id'] . '">' . $row['almacen_nombre'] . '</option>';
                                }
                            }
                            $almacens = null;
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_foto">Foto o imagen del producto</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" id="producto_foto" name="producto_foto" accept=".jpg, .png, .jpeg">
                        <label class="input-group-text" for="producto_foto">Imagen</label>
                    </div>
                    <span class="text-muted">JPG, JPEG, PNG. (MAX 3MB)</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-rounded">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
