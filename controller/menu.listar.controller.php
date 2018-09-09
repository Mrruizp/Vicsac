<?php

require_once '../logica/Menu.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    $objMenu = new Menu();
    $resultado = $objMenu->listar();
    Funciones::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}
