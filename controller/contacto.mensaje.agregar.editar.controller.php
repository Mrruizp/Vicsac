<?php

require_once '../logic/ContactoMensaje.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    $objContactoMensaje = new ContactoMensaje();
    
    $objContactoMensaje->setDoc_identidad($_POST["p_doc_ident"]);
    $objContactoMensaje->setNombre($_POST["p_nombres"]);
    $objContactoMensaje->setApPaterno($_POST["p_apPaterno"]);
    $objContactoMensaje->setApMaterno($_POST["txtApMaterno"]);
    $objContactoMensaje->setEmail($_POST["txtEmail"]);
    $objContactoMensaje->setTelefono($_POST["txtTelefono"]);
    $objContactoMensaje->setMensaje($_POST["txtMensaje"]);
    
    if ($objContactoMensaje->agregar() == true){
        Funciones::mensaje("Mensaje agregado correctamente", "s", "../view/index.php", 40);
    }
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}