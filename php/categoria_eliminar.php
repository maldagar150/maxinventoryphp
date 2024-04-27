<?php
	/*== Almacenando datos ==*/
    $category_id_del=limpiar_cadena($_GET['category_id_del']);

    /*== Verificando usuario ==*/
    $check_almacen=conexion();
    $check_almacen=$check_almacen->query("SELECT almacen_id FROM almacen WHERE almacen_id='$category_id_del'");
    
    if($check_almacen->rowCount()==1){

    	$check_productos=conexion();
    	$check_productos=$check_productos->query("SELECT almacen_id FROM producto WHERE almacen_id='$category_id_del' LIMIT 1");

    	if($check_productos->rowCount()<=0){

    		$eliminar_almacen=conexion();
	    	$eliminar_almacen=$eliminar_almacen->prepare("DELETE FROM almacen WHERE almacen_id=:id");

	    	$eliminar_almacen->execute([":id"=>$category_id_del]);

	    	if($eliminar_almacen->rowCount()==1){
		        echo '
		            <div class="notification is-info is-light">
		                <strong>¡almacen ELIMINADA!</strong><br>
		                Los datos de la categoría se eliminaron con exito
		            </div>
		        ';
		    }else{
		        echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrio un error inesperado!</strong><br>
		                No se pudo eliminar la categoría, por favor intente nuevamente
		            </div>
		        ';
		    }
		    $eliminar_almacen=null;
    	}else{
    		echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No podemos eliminar la categoría ya que tiene productos asociados
	            </div>
	        ';
    	}
    	$check_productos=null;
    }else{
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La almacen que intenta eliminar no existe
            </div>
        ';
    }
    $check_almacen=null;