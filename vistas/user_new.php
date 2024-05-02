<div class="container mb-6">
	<h1 class="display-4">Usuarios</h1>
	<h2 class="lead">Nuevo usuario</h2>
</div>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<?php
    include "./inc/btn_back.php";
    ?>

	<form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_nombre">Nombres</label>
				  	<input class="form-control" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_apellido">Apellidos</label>
				  	<input class="form-control" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_usuario">Usuario</label>
				  	<input class="form-control" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_email">Email</label>
				  	<input class="form-control" type="email" name="usuario_email" maxlength="70" >
				</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_clave_1">Clave</label>
				  	<input class="form-control" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="col-md-6">
		    	<div class="form-group">
					<label for="usuario_clave_2">Repetir clave</label>
				  	<input class="form-control" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<p class="text-center">
			<button type="submit" class="btn btn-info btn-rounded">Guardar</button>
		</p>
	</form>
</div>
