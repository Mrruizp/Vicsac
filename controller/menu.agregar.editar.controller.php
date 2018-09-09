<?php

require_once '../logica/Menu.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    
    if 
        (
            !isset($_POST["p_nom"]) ||
            empty($_POST["p_nom"]) ||
            
            !isset($_POST["p_tipo_ope"]) ||
            empty($_POST["p_tipo_ope"]) ||
                    
            !isset($_POST["p_cod"]) ||
            empty($_POST["p_cod"]) ||
                    
            !isset($_POST["p_estado"]) ||
            empty($_POST["p_estado"])
            
        )
    {
            Funciones::imprimeJSON(500, "Falta completar datos", "");
            exit();
    }
    
    $nombre         = $_POST["p_nom"];
    $tipoOperacion  = $_POST["p_tipo_ope"];
    $codigo         = $_POST["p_cod"];
    $estado         = $_POST["p_estado"];
    
    $objMenu = new Menu();
    
    $objMenu->setNombre($nombre);
    $objMenu->setCodigoMenu($codigo);
    $objMenu->setCodigoEstado($estado);
    
    if ($tipoOperacion == "agregar"){
        $resultado = $objMenu->agregar();
        if ($resultado==true){
            Funciones::imprimeJSON(200, "Agregado correctamente", "");
        }
    }else{
        $resultado = $objMenu->editar();
        if ($resultado==true){
            Funciones::imprimeJSON(200, "Actualizado correctamente", "");
        }
    }
    
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}
