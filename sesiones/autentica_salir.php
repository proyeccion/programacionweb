<?php
if(!isset($_SESSION)) session_start();
$_SESSION¨['autenticado'] = NULL;
unset( $_SESSION);
session_destroy();
?>