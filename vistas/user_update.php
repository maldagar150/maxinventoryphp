<?php
	require_once "./php/main.php";

    $id = (isset($_GET['user_id_up'])) ? $_GET['user_id_up'] : 0;
    $id=limpiar_cadena($id);
?>
<div class="container mb-6">
	<?php if($id==$_SESSION['id']){ ?>
		<h1 class="display-4">Mi cuenta</h1>
		<h2 class="lead">Actualizar datos de cuenta</h2>
	<?php }else{ ?>
		<h1 class="display-4">Usuarios</h1>
		<h2 class="lead">Actualizar usuario</h2>
	<?php } ?>
</div>

<div class="container pb-6 pt-6">
	<?php

		include "./inc/btn_back.php";

        /*== Verificando usuario ==*/
    	$check_usuario=conexion();
    	$check_usuario=$check_usuario->query("SELECT * FROM usuario WHERE usuario_id='$id'");

        if($check_usuario->rowCount()>0){
        	$datos=$check_usuario->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/usuario_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="usuario_id" value="<?php echo $datos['usuario_id']; ?>" required >
		
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Nombres</label>
				  	<input class="form-control" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required value="<?php echo $datos['usuario_nombre']; ?>" >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Apellidos</label>
				  	<input class="form-control" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required value="<?php echo $datos['usuario_apellido']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Usuario</label>
				  	<input class="form-control" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required value="<?php echo $datos['usuario_usuario']; ?>" >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Email</label>
				  	<input class="form-control" type="email" name="usuario_email" maxlength="70" value="<?php echo $datos['usuario_email']; ?>" >
				</div>
		  	</div>
		</div>
		<br><br>
		<p class="text-center">
			Si desea actualizar la clave de este usuario, por favor llene los 2 campos. Si no desea actualizar la clave, deje los campos vacíos.
		</p>
		<br>
		<div class="row">
			<div class="col-md-6">
		    	<div class="form-group">
					<label>Clave</label>
				  	<input class="form-control" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Repetir clave</label>
				  	<input class="form-control" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
				</div>
		  	</div>
		</div>
		<br><br><br>
		<p class="text-center">
			Para poder actualizar los datos de este usuario, por favor ingrese su usuario y clave con la que ha iniciado sesión.
		</p>
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Usuario</label>
				  	<input class="form-control" type="text" name="administrador_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label>Clave</label>
				  	<input class="form-control" type="password" name="administrador_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<p class="text-center">
			<button type="submit" class="btn btn-success">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_usuario=null;
	?>
</div>
