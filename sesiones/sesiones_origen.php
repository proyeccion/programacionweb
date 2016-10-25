<?php
if (!isset($_SESSION))
	session_start();
$_session['magaly'];
echo"<p>Desde sesiones_origen.php </p>";
echo "<P>Hola".$_SESSION['nombre']."</p>";
echo "<a href='sesiones_destino.php'> Ir a sesiones_destino.php</a>";
?>