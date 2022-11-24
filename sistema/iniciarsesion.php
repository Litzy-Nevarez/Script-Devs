<?php
	include 'encabezado.php';
	echo '
	<form name="iniciarsesion" method="post" action="sesionsubmit.php">
		<br><br><br><br><h2 align="center">Nombre de usuario:</h2>
		<br><input type="text" name="usuario" id="usuario" style="display:block;margin:0 auto;text-align:center">
		<br><br><br><h2 align="center">Contraseña:</h2>
		<br><input type="password" name="contrasena" id="contrasena" style="display:block;margin:0 auto;text-align:center">
		<br><br><br><input type="submit" name="submit" id="submit" style="display:block;margin:0 auto;text-align:center;height:30px" value="Iniciar sesión">
	</form>';
?>