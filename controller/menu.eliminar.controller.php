<?php

require_once '../logica/Menu.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    
    if 
        (
            !isset($_POST["p_cod"]) ||
            empty($_POST["p_cod"])
        )
    {
            Funciones::imprimeJSON(500, "Falta completar datos", "");
            exit();
    }
    
    $codigo = $_POST["p_cod"];
    
    $objMenu = new Menu();
    $resultado = $objMenu->eliminar($codigo);
    
    if ($resultado == true){
        Funciones::imprimeJSON(200, "Registro eliminado correctamente", "");
    }
    
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}