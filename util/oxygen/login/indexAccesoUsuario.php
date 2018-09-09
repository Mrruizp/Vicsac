<?php
//session_start();
@require("xajax_login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $xajax->printJavascript();?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Iniciar Sesión</title>

<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>

		<!-- Font Awesome CSS -->
		<link href="../fonts/font-awesome/css/font-awesome.css" rel="stylesheet"/>

		<!-- Plugins -->
		<link href="../css/animations.css" rel="stylesheet"/>

		<!-- Worthy core CSS file -->
		<link href="../css/style.css" rel="stylesheet"/>

		<!-- Custom css --> 
		<link href="../css/custom.css" rel="stylesheet"/>

<style type="text/css">
body{width:90%;margin:auto;min-width:600px;max-width:2000px}
</style>

<script LANGUAGE="JavaScript" >

function mostrarcargar(){
	cargando.style.display = "";
}
function ocultarcargar(){
	cargando.style.display = "none";
}
function validarUsuario(){/* verifica que el usuario y la clave conincida para determinar el usuario*/
/* document es un objeto */
	
	var cuenta = document.getElementById('usuario').value;/* El método getElementById () accede al primer elemento con el id especificado.*/
	var clave = document.getElementById('clave').value;

	xajax_logear(cuenta,clave);
	
}
</script>

</head>

<body>

<form id="formulario" name="formulario">

	<div style="padding: 100px 0 0 250px;">


		<div id="login-box" style="width: 409px">

			<H2 align="center">VICSAC</H2>

				<br />
				<br />

				<div id="login-box-name" style="margin-top:20px;">
				</div>

				<div id="login-box-field" style="margin-top:20px; width: 253px;">
					<input name="usuario" id="usuario" class="form-login" placeholder="   usuario" title="usuario" value="" size="30" maxlength="8" style="width: 260px" />
				</div>

				<div id="login-box-name">
				</div>

				<div id="login-box-field" style="width: 253px">
					<input name="clave" id="clave" type="password" class="form-login" placeholder="   Constraseña" title="Password" value="" size="30" maxlength="2048" style="width: 260px" />
				</div>

				<br />
			<div>
				<span class="login-box-options"><input type="checkbox" name="1" value="1"/> No cerrar sesión 
				<a href="#" style="margin-left:30px;">¿Olvidaste tu contraseña?</a></span>

			</div>
				<br />
				<br />
				<table>
					<tr>
						<td>
							<!-- onClick= al hacer click ejecuto la funcion Javascript --> 						
							<a href="#" onClick="validarUsuario();"><img src="images/iniciarsesion.png" width="103" height="42" style="margin-left:90px;" /></a>
						</td>
						<td>
							<div id="cargando" align="center" style="display:none;">
								<img src = "../images/wait.gif"/>
							</div>
						</td>
					</tr>
				</table>
				<br/>
				<span class="login-box-options">¿No dispones de una cuenta VICSAC?<a href="../paginasPostulante/registrarDatosPersonales.html" style="margin-left:1px;">Regístrate ahora</a></span>

				<br/>
				<br/>

			</div>

	</div>
</form>
</body>
</html>
