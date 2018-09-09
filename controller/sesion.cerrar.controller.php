<?php

session_name("vicsac_web");
session_start();

/*Limpiar cada variable cargada en la sesión*/
unset($_SESSION["nombre"]);
unset($_SESSION["email"]);
unset($_SESSION["codigo_usuario"]);
unset($_SESSION["perfil"]);
unset($_SESSION["cargo"]);

session_destroy();

//header("location:../vista/index.html");

require_once '../util/funciones/Funciones.class.php';
Funciones::mensaje("Se ha cerrado la sesión correctamente", "s", "../view/InicioSesion.php", 5);