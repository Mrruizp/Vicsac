<?php
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

try {
    $email = $_POST["txtemail"];
    $clave = $_POST["txtclave"];
    
    require_once '../util/funciones/Funciones.class.php';
    require_once '../logic/Sesion.class.php';
    $objSesion = new Sesion();
    $objSesion->setEmail($email);
    $objSesion->setClave($clave);
    
    $respuesta = $objSesion->iniciarSesion();
    //echo $respuesta;
    
    switch ($respuesta) {
        case "CI": //Contraseña incorrecta
            Funciones::mensaje("La Contraseña es incorrecta", "e", "../view/InicioSesion.php", 5);
            break;
        
        case "IN": //usuario inactivo
            Funciones::mensaje("El usuario esta inactivo. Consulte con su administrador", "a", "../view/InicioSesion.php", 5);
            break;
        
        case "NE": //usuario no existe
            Funciones::mensaje("El usuario no existe", "e", "../view/InicioSesion.php", 5);
            break;
        
        default: //SI
            header("location:../view/menu.principal.view.php");
            break;
    }
    
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}
