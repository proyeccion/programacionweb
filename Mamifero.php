<?php
class Mamifero{
	public $edad;
	public function __construct(){
    echo "se creo un ".get_class($this);


    }

    public function fijarEdad($e){

    $this->edad = $e;
    }
    public function obtenerEdad(){
  	return $this->edad;
    }
    public function crecer(){
  	$this->edad ++;

   }

}