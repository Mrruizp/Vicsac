<?php
require_once '../logic/ContactoMensaje.class.php';
require_once '../util/funciones/Funciones.class.php';
try {
    $objContactoMensaje = new ContactoMensaje();
    
    $objContactoMensaje->setDoc_identidad($_POST["txtDoc"]);
    $objContactoMensaje->setNombre($_POST["txtNombre"]);
    $objContactoMensaje->setApPaterno($_POST["txtApPaterno"]);
    $objContactoMensaje->setApMaterno($_POST["txtApMaterno"]);
    $objContactoMensaje->setEmail($_POST["txtEmail"]);
    $objContactoMensaje->setTelefono($_POST["txtTelefono"]);
    $objContactoMensaje->setMensaje($_POST["txtMensaje"]);
    
    if ($objContactoMensaje->agregar() == true){
        Funciones::mensaje("Mensaje envíado correctamente", "s", "../view/index.php", 5);
    }
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}