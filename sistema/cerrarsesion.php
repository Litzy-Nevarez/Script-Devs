<?php
	session_start();
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	$id = session_id();
	session_unset();
	session_destroy();
	session_start();
	session_regenerate_id();
	include 'sistema/encabezado.php';
	echo "<br><br><br><br><h2>Se ha cerrado la sesión.</h2>";
?>