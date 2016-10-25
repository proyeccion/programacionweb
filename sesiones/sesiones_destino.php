<?php
if (!isset($_SESSION))
	session_start();

echo"<p> Desde sesiones_destino.php</p>";
echo "<P>Hola".$_SESSION ['nombre']."</p>";
echo "<a href='sesiones_origen.php'> Ir a sesiones_origen.php</a>";
?>
