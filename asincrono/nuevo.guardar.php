<?php
/**
El script devuelve:
	1.-succes:Estado de Ejecusion
	2.-id  :id de registro insertado**/
	include('../crud/inc/conexion.php'); 
$oRespuesta = array();
if ($conexion){
	$sql="INSERT INTO personas SET "
		."paterno='{$_POST['text-paterno']}',"
		."materno='{$_POST['text-materno']}',"
		."nombres='{$_POST['text-nombres']}'";
	$resultado=$conexion->query($sql);

		$oRespuesta['success']=TRUE;
		$oRespuesta['id']=$conexion->insert_id;
}else{
		$oRespuesta['success']=FALSE;
	}
	echo json_encode($oRespuesta);
?>