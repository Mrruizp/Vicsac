<?php

require_once '../data/Conexion.class.php';

class Sesion extends Conexion {
    private $email;
    private $clave;
    
    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }


    public function iniciarSesion() {
        try {
            $sql = "
                    select
                            p.apellido_paterno,
                            p.apellido_materno,
                            p.nombres,
                            u.estado,
                            u.clave,
                            u.codigo_usuario,
                            c.descripcion as cargo,
                            c.codigo_cargo
                    from
                            personal p
                            inner join usuario u on (p.dni = u.dni_usuario)
                            inner join cargo c on (c.codigo_cargo = p.codigo_cargo)
                    where
                            p.email = :p_email
                ";
            
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_email", $this->getEmail());
            $sentencia->execute();
            //return $resultado;
            
            if ($sentencia->rowCount()){ //Le pregunto si ha devuelto registros
                $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
                if ($resultado["clave"] == md5($this->getClave())){
                    if ($resultado["estado"]=="I"){
                        return "IN"; //Usuario Inactivo
                    }else{
                        session_name("vicsac_web");
                        session_start();
                        $_SESSION["nombre"] = $resultado["nombres"] . " " . $resultado["apellido_paterno"];
                        $_SESSION["email"] = $this->getEmail();
                        $_SESSION["codigo_usuario"] = $resultado["codigo_usuario"];
                        $_SESSION["codigo_cargo"] = $resultado["codigo_cargo"];
                        $_SESSION["cargo"] = $resultado["cargo"];
                        
                        return "SI"; //Si ingresa
                    }
                }else{ //la contraseña no es igual
                    return "CI"; //Contraseña incorrecta
                }
            }else{ //No se encontró registros (El usuario no existe)
                return "NE"; //No Existe
            }
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    
    public function obtenerOpcionesMenu($codigoCargo) {
        try {
            $sql = "
                select
                        distinct 
                        m.codigo_menu,
                        m.nombre
                from
                        menu m
                        inner join menu_item_accesos a on ( m.codigo_menu = a.codigo_menu )
                where
                        a.codigo_cargo = :p_codigo_cargo
                        and a.acceso = '1'
                order by
                        1
                ";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_codigo_cargo", $codigoCargo);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    public function obtenerOpcionesMenuItem($codigoCargo, $codigoMenu) {
        try {
            $sql = "
                    select
                            m.nombre,
                            m.archivo
                    from
                            menu_item m
                            inner join menu_item_accesos a 
                            on 
                            ( 
                                    m.codigo_menu = a.codigo_menu and 
                                    m.codigo_menu_item = a.codigo_menu_item 
                            )

                    where
                            a.codigo_cargo = :p_codigo_cargo
                            and a.codigo_menu = :p_codigo_menu
                            and a.acceso = '1'
                    order by
                            a.codigo_menu_item
                ";
            
            $sentencia = $this->dbLink->prepare($sql);
            
            $sentencia->bindParam(":p_codigo_cargo", $codigoCargo);
            $sentencia->bindParam(":p_codigo_menu", $codigoMenu);
            
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    
}
