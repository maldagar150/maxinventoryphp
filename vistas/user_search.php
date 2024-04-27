<div class="container mb-6">
    <h1 class="display-4">Usuarios</h1>
    <h2 class="lead">Buscar usuario</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        if(isset($_POST['modulo_buscador'])){
            require_once "./php/buscador.php";
        }

        if(!isset($_SESSION['busqueda_usuario']) && empty($_SESSION['busqueda_usuario'])){
    ?>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="usuario">   
                <div class="input-group mb-3">
                    <input class="form-control is-rounded" type="text" name="txt_buscador" placeholder="¿Qué estás buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php }else{ ?>
    <div class="row">
        <div class="col-md-6">
            <form class="text-center mt-6 mb-6" action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="usuario"> 
                <input type="hidden" name="eliminar_buscador" value="usuario">
                <p>Estás buscando <strong>“<?php echo $_SESSION['busqueda_usuario']; ?>”</strong></p>
                <br>
                <button type="submit" class="btn btn-danger is-rounded">Eliminar búsqueda</button>
            </form>
        </div>
    </div>
    <?php
            # Eliminar usuario #
            if(isset($_GET['user_id_del'])){
                require_once "./php/usuario_eliminar.php";
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
            $url="index.php?vista=user_search&page="; /* <== */
            $registros=15;
            $busqueda=$_SESSION['busqueda_usuario']; /* <== */

            # Paginador usuario #
            require_once "./php/usuario_lista.php";
        } 
    ?>
</div>
