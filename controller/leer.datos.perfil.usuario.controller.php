<?php

require_once '../logic/Usuario.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    /*Leer el valor que trae el $_POST["codigo_usuario_sesion"]*/
    $codigoUsuario = $_POST["codigo_usuario_sesion"];
    /*Leer el valor que trae el $_POST["codigo_usuario_sesion"]*/
    
    $objUsuario = new Usuario();
    $datosUsuarioBD = $objUsuario->leerDatos($codigoUsuario);
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}


