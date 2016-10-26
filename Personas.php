<?php
require('BD.php');
class Personas extends BD{

   private $paterno;
   private $materno;
   private $nombres;
   public function __construct($s,$u,$c,$bd){
   	parent::__construct($s,$u,$c,$bd);

  }

public function listar(){
	$resultado = $this->conexion->query('SELECT * FROM personas');
	return $resultado;


  }





}

?>