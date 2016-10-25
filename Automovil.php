<?php
class Automovil{
	/*propiedades/atributos*/
public $marca;
public $color;
public $velocidad = 0;
/*metodos*/
public function acelerador(){
	$this->velocidad +=5;
	echo "aumenta  velocidad a:".$this->velocidad."km/h";
}	

public function frenar(){
	if ($this->velocidad >0){
	$this->velocidad -=5;
	$this->velocidad -=5;

}
 echo "disminuye velocidad a:".$this->velocidad."km/h";

   }
}

