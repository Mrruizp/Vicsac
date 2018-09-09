<?php
//ini_set('error_reporting', E_ALL);
require_once '../logic/Usuario.class.php';
require_once '../util/funciones/Funciones.class.php';

try {
    $objUsuario =  new Usuario();
    $objUsuario->setDni($_POST["txtDNI"]);
    $objUsuario->setApellidoPaterno($_POST["txtApePat"]);
    $objUsuario->setApellidoMaterno($_POST["txtApeMat"]);
    $objUsuario->setNombres($_POST["txtNom"]);
    $objUsuario->setDireccion($_POST["txtDir"]);
    $objUsuario->setEmail($_POST["txtCorreo"]);
    $objUsuario->setTelefonoFijo($_POST["txtTel1"]);
    $objUsuario->setTelefonoMovil1($_POST["txtTel2"]);
    $objUsuario->setTelefonoMovil2($_POST["txtTel3"]);
    
    if ($objUsuario->actualizarDatos() == true){
        Funciones::mensaje("Datos actualizados correctamente", "s", "../view/perfil.usuario.view.php", 40);
    }
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}

