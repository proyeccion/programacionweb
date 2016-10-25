<?php
include ('Mamifero.php');
class Humano extends Mamifero{
	public $nombre;
	public function __construct(){
		parent::__construct();
    }
    public function fijarnombre($n){
    	$this->nombre=$n;
    }
     
    public function obtenerNombre(){
    	return $this->nombre;

    }

}