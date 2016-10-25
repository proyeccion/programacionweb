<?php 
/** 
El script devuelve:
1.-success:Estado de Ejecusion
2.-personas:listado de personas**/


include('../crud/inc/conexion.php'); 
$oRespuesta=array();
if ($conexion){
	$sql='SELECT P.* FROM personas p';
	$resultado=$conexion-> query($sql);
	$tmp_personas=array();
	while($personas = $resultado->fetch_assoc()){
	$tmp_personas[]=$persona;
	}
	$oRespuesta['success'] =TRUE;
	$oRespuesta['personas']=$tmp_personas;

}else{
	$oRespuesta['success']=FALSE;
}
echo json_encode($oRespuesta);
?>
