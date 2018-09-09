<?php

require_once '../data/Conexion.class.php';

class ContactoMensaje extends Conexion {
    private $codigo;
    private $doc_identidad;
    private $nombre;
    private $apPaterno;
    private $apMaterno;
    private $email;
    private $Telefono;
    private $mensaje;
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getDoc_identidad() {
        return $this->doc_identidad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApPaterno() {
        return $this->apPaterno;
    }

    public function getApMaterno() {
        return $this->apMaterno;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setDoc_identidad($doc_identidad) {
        $this->doc_identidad = $doc_identidad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApPaterno($apPaterno) {
        $this->apPaterno = $apPaterno;
    }

    public function setApMaterno($apMaterno) {
        $this->apMaterno = $apMaterno;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

        
    public function listar() {
        try {
            $sql = "select codigo_menu, nombre from menu order by 1";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    public function agregar() {
        $this->dbLink->beginTransaction();
        
        try {
            $sql = "select * from f_generar_correlativo('menu') as correlativo";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->execute();
            if ($sentencia->rowCount()){
                $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
                $this->setCodigoMenu($resultado["correlativo"]);
                
                $sql = "insert into menu (codigo_menu, nombre, estado) values (:p_codigo_menu, :p_nombre, :p_estado)";
                $sentencia = $this->dbLink->prepare($sql);
                $sentencia->bindParam(":p_codigo_menu", $this->getCodigoMenu());
                $sentencia->bindParam(":p_nombre", $this->getNombre());
                $sentencia->bindParam(":p_estado", $this->getCodigoEstado());
                $sentencia->execute();
                
                $sql = "update correlativo set numero = numero + 1 where tabla='menu'";
                $sentencia = $this->dbLink->prepare($sql);
                $sentencia->execute();
                
                $this->dbLink->commit();
                
                return true;
                
            }else{
                throw new Exception("No se encontró el correlativo para la tabla menú");
            }
        } catch (Exception $exc) {
            $this->dbLink->rollBack();
            throw $exc;
        }
    }
    
    public function editar() {
        $this->dbLink->beginTransaction();
        
        try {
            $sql = "update menu set nombre = :p_nombre where codigo_menu = :p_codigo_menu";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_nombre", $this->getNombre());
            $sentencia->bindParam(":p_codigo_menu", $this->getCodigoMenu());
            $sentencia->execute();
            
            $this->dbLink->commit();
                
            return true;
                
        } catch (Exception $exc) {
            $this->dbLink->rollBack();
            throw $exc;
        }
    }
    
    public function leerDatos($p_codigo_menu){
        try {
            $sql = "select * from menu where codigo_menu = :p_codigo_menu";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_codigo_menu", $p_codigo_menu);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    public function eliminar($p_codigo_menu) {
        $this->dbLink->beginTransaction();
        
        try {
            
            $sql = "select * from menu_item where codigo_menu = :p_codigo_menu";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_codigo_menu", $p_codigo_menu);
            $sentencia->execute();
            if ($sentencia->rowCount()){
                throw new Exception("No es posible eliminar este registro por encontrar información dependiente");
            }
            
            
            $sql = "delete from menu where codigo_menu = :p_codigo_menu";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->bindParam(":p_codigo_menu", $p_codigo_menu);
            $sentencia->execute();
            
            $this->dbLink->commit();
                
            return true;
                
        } catch (Exception $exc) {
            $this->dbLink->rollBack();
            throw $exc;
        }
    }
    
}
