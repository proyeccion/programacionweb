<?php
require('personas.php'); require('vistaPersonas.php');
$p = new personas('localhost','root','root','programacionweb');
$v = new vistaPersonas();
$v->mostrarLista($p->listar());







?>