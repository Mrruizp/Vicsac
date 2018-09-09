<?php

require_once '../datos/Conexion.class.php';

class Estado extends Conexion {
    
    public function listar() {
        try {
            $sql = "select * from estado order by 1";
            $sentencia = $this->dbLink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
    
}
