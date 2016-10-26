<?php
require ('personas.php');
$p = new Personas('localhost','root','root','programacionweb');

$r = $p->listar();
var_dump($r);
$fila = $r->fetch_assoc();
var_dump($fila);









?>