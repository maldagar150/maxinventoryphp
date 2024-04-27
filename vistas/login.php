<div class="contenedor-nav">
        <div class="logo">
        <img src="img/logo.png" alt="">
</div>
<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off">
        <h5 class="title is-5 has-text-centered is-uppercase">Max Inventory</h5>

        <div class="form-group">
            <label for="login_usuario" class="label">Usuario</label>
            <div class="control">
                <input id="login_usuario" class="form-control" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
            </div>
        </div>

        <div class="form-group">
            <label for="login_clave" class="label">Contraseña</label>
            <div class="control">
                <input id="login_clave" class="form-control" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
            </div>
        </div>

        <p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="btn btn-info btn-rounded">Iniciar sesión</button>
        </p>

        <?php
            if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
                require_once "./php/main.php";
                require_once "./php/iniciar_sesion.php";
            }
        ?>
    </form>
</div>
