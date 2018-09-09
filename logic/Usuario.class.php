<?php

require_once '../data/Conexion.class.php';

class Usuario extends Conexion {
    
    private $dni;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $nombres;
    private $direccion;
    private $email;
    private $telefonoFijo;
    private $telefonoMovil1;
    private $telefonoMovil2;
    
    function getDni() {
        return $this->dni;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefonoFijo() {
        return $this->telefonoFijo;
    }

    function getTelefonoMovil1() {
        return $this->telefonoMovil1;
    }

    function getTelefonoMovil2() {
        return $this->telefonoMovil2;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefonoFijo($telefonoFijo) {
        $this->telefonoFijo = $telefonoFijo;
    }

    function setTelefonoMovil1($telefonoMovil1) {
        $this->telefonoMovil1 = $telefonoMovil1;
    }

    function setTelefonoMovil2($telefonoMovil2) {
        $this->telefonoMovil2 = $telefonoMovil2;
    }

    public function leerDatos($p_codigoUsuario) {
        try {
            $sql = "
                SELECT 
                    usuario.codigo_usuario, 
                    personal.dni, 
                    personal.apellido_paterno, 
                    personal.apellido_materno, 
                    personal.nombres, 
                    personal.direccion, 
                    personal.telefono_fijo, 
                    personal.telefono_movil1, 
                    personal.telefono_movil2, 
                    personal.email, 
                    cargo.descripcion as cargo, 
                    area.descripcion as area
                  FROM 
                    public.personal, 
                    public.cargo, 
                    public.area, 
                    public.usuario
                  WHERE 
                    cargo.codigo_cargo = personal.codigo_cargo AND
                    area.codigo_area = personal.codigo_area AND
                    usuario.dni_usuario = personal.dni AND
                    usuario.codigo_usuario = :p_codigoUsuario;
                ";
            
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_codigoUsuario", $p_codigoUsuario);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    
    public function actualizarDatos() {
        try {
            $sql = "
                    update
                        personal
                    set
                        apellido_paterno    = :p_ape_pat,
                        apellido_materno    = :p_ape_mat,
                        nombres             = :p_nom,
                        direccion           = :p_dir,
                        email               = :p_ema,
                        telefono_fijo       = :p_tel_fij,
                        telefono_movil1     = :p_tel_mov1,
                        telefono_movil2     = :p_tel_mov2
                    where
                        dni = :p_dni
                ";
            
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_ape_pat", $this->getApellidoPaterno());
            $sentencia->bindParam(":p_ape_mat", $this->getApellidoMaterno());
            $sentencia->bindParam(":p_nom", $this->getNombres());
            $sentencia->bindParam(":p_dir", $this->getDireccion());
            $sentencia->bindParam(":p_ema", $this->getEmail());
            $sentencia->bindParam(":p_tel_fij", $this->getTelefonoFijo());
            $sentencia->bindParam(":p_tel_mov1", $this->getTelefonoMovil1());
            $sentencia->bindParam(":p_tel_mov2", $this->getTelefonoMovil2());
            $sentencia->bindParam(":p_dni", $this->getDni());
            $sentencia->execute();
            return true;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
}
