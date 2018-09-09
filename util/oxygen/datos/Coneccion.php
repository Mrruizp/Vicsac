<?php
   class Coneccion{
   
   	private $servidor="localhost";
	private $usuario="root";
	private $password="";
	private $bd="VICSAC_web";
	private $ruta;

	function conectar(){
   		$this->ruta=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
   		mysqli_select_db($this->ruta,$this->bd);
		return $this->ruta;
 	}

	function ejecutarSQL($sql){
        $this->conectar();
		$ejecutar=mysqli_query($this->ruta,$sql);
		mysqli_close($this->ruta);
		//$this->close();
		return $ejecutar;
	}
       
   }
?>