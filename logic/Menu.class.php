<?php

require_once '../datos/Conexion.class.php';

class Menu extends Conexion {
    private $codigoMenu;
    private $nombre;
    private $codigoEstado;
    
    function getCodigoEstado() {
        return $this->codigoEstado;
    }

    function setCodigoEstado($codigoEstado) {
        $this->codigoEstado = $codigoEstado;
    }
    
    function getCodigoMenu() {
        return $this->codigoMenu;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCodigoMenu($codigoMenu) {
        $this->codigoMenu = $codigoMenu;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
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
