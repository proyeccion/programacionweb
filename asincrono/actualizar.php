<?php
/**
El script devuelve:
	1.-succes:Estado de Ejecusion
	2.-id  :id de registro insertado**/
	include('../crud/inc/conexion.php'); 
$oRespuesta = array();
if ($conexion){
	$sql="UPDATE personas SET "
		."paterno='{$_POST['text-paterno']}',"
		."materno='{$_POST['text-materno']}',"
		."nombres='{$_POST['text-nombres']}'";WHERE personas_id={$_post['id']};
		WHERE personas_id={$_post['id']};
		
	$resultado=$conexion->query($sql);

		$oRespuesta['success']=TRUE;
		
}else{
		$oRespuesta['success']=FALSE;
	}
	echo json_encode($oRespuesta);
?>