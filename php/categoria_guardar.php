<?php
	require_once "main.php";

    /*== Almacenando datos ==*/
    $nombre=limpiar_cadena($_POST['almacen_nombre']);
    $ubicacion=limpiar_cadena($_POST['almacen_ubicacion']);


    /*== Verificando campos obligatorios ==*/
    if($nombre==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if($ubicacion!=""){
    	if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}",$ubicacion)){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La UBICACION no coincide con el formato solicitado
	            </div>
	        ';
	        exit();
	    }
    }


    /*== Verificando nombre ==*/
    $check_nombre=conexion();
    $check_nombre=$check_nombre->query("SELECT almacen_nombre FROM almacen WHERE almacen_nombre='$nombre'");
    if($check_nombre->rowCount()>0){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
            </div>
        ';
        exit();
    }
    $check_nombre=null;


    /*== Guardando datos ==*/
    $guardar_almacen=conexion();
    $guardar_almacen=$guardar_almacen->prepare("INSERT INTO almacen(almacen_nombre,almacen_ubicacion) VALUES(:nombre,:ubicacion)");

    $marcadores=[
        ":nombre"=>$nombre,
        ":ubicacion"=>$ubicacion
    ];

    $guardar_almacen->execute($marcadores);

    if($guardar_almacen->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡almacen REGISTRADA!</strong><br>
                La categoría se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar la categoría, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_almacen=null;