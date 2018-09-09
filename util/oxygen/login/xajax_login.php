<?php
session_start();
@require('../xajax/xajax_core/xajax.inc.php');
include_once("../datos/Coneccion.php");
$xajax= new xajax();
$xajax->configure('javascript URI','../xajax/');
//$xajax->configure('debug', true);//ver errores

function logear($cuenta,$clave){
	

	//$sql =  " SELECT count(*) as cont FROM USUARIO WHERE p_cuenta = '".$cuenta."' AND p_clave = '".$clave."' ";

	
	$obj=new xajaxResponse();// carga los datos en la misma página, es decir no vuelva a cargar toda la página.
	$obj->call(); //call("mostrarcargar", "arg 1", "arg N" )
// declaro la instancia del $obj de tipo xajaxResponse con -> para tener acceso a los miebros de esa instancia 
// como es la funcion call.
	if($cuenta==''){
		$obj->Alert("Ingrese Usuario/Cuenta (DNI)");
	}
	if($clave==''){
		$obj->Alert("Ingrese Contraseña");
	}
$contador = array();//recorre un array y lo almacena en la variable $contador. Ese array contiene las variables de la tabla usuario
	$ocado = new Coneccion();
	$sql =  " SELECT p_cuenta, IFNULL(p_foto,'') as p_foto, p_tipo, p_estado ".
 			" FROM USUARIO ".
 			" WHERE p_cuenta = '".$cuenta."' AND p_clave = '".$clave."' ";
 	
	$consulta = $ocado->EjecutarSQL($sql);
//mysqli : representa una conexion entre php y una ase de datos mysql 
//mysqli_num_rows(): Obtiene el número de filas de un resultado
	if(mysqli_num_rows($consulta) < 1){//si no se obtuvo un numero de filas de inicio de sesion, se muestra mensajes.
     	$obj->Alert("Cuenta o Contraseña Incorrecta");
     	$obj->call("ocultarcargar", "", "" );
  	}else{
  		$contador = mysqli_fetch_object($consulta);//recupera el objeto para enviarcelo a la base de datos

  		if($contador->p_estado == 'I'){// si la variable $contador que contiene al atributo p_estado de la tabla usuario es igual a I entonces
//se llama al objeto que contiene la función Alert para mostrar un mensaje de alerta Cuenta Inactiva, Datos aún no Verificados

  			$obj->Alert("Cuenta Inactiva (Datos aún no Verificados)");
  		}else{//si el atributo p_estado es diferente de "I" entonces

  			$_SESSION['dni'] = $contador->p_cuenta;
  			$_SESSION['foto'] = $contador->p_foto;
  			$_SESSION['tipo'] = $contador->p_tipo;
   			$obj->redirect('../paginasPostulante/contenido_principal_cuenta_postulante.php',0);
  		}

  		

  	}

	return $obj;
}


$xajax->registerFunction("logear");

$xajax->processRequest();
echo "<?xml version='1.0' encoding='UTF-8'?>";
?>