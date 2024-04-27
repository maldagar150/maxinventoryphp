<div class="container mb-6">
    <h1 class="display-4">Almacenes</h1>
    <h2 class="lead">Nuevo Almacén</h2>
</div>

<div class="container pb-6 pt-6">

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
