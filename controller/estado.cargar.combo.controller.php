<?php

require_once '../logica/Estado.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    $objEstado = new Estado();
    $resultado = $objEstado->listar();
    Funciones::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}

