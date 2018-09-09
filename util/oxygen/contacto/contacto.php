<?php
		/* variables de datos acadÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©micos*/
		include_once("../datos/Coneccion.php");
/*$_POST: es un arrays*/
		$doc_identidad	= $_POST['doc_identidad'];
		$nombre		= $_POST['nombre'];
		$correo		= $_POST['correo'];
		$telefono		= $_POST['telefono'];
		$mensaje		= $_POST['mensaje']; 
		


			$ocado = new Coneccion();

			$sql = "CALL fn_mensaje('$doc_identidad','$nombre','$correo','$telefono','$mensaje', now());";		
		
			
			$flag=$ocado->EjecutarSQL($sql);
				echo "** MENSAJE ENVIADO CORRECTAMENTE **";		
   				echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=../index.html'>";
		
?>
	
