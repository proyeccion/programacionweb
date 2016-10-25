<?php
include ('Humano.php');
     $humano = new Humano();
     $humano->fijarEdad(5);
     $humano->fijarNombre('Jose');
     $humano->crecer();
     $humano->crecer();
echo $humano->obtenerEdad();
     $humano->crecer();
echo $humano->obtenerEdad();





?>