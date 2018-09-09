<?php

require_once '../logic/Sesion.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    
    /*Recibir la variable POST que le envía la vista*/
    $codigoCargo = $_POST["codigo_cargo_usuario"];
    /*Recibir la variable POST que le envía la vista*/
    
    $objSesion = new Sesion();
    $resultadoOpcionesMenuBD = $objSesion->obtenerOpcionesMenu($codigoCargo);
            
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}
