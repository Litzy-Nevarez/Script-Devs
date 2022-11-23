<?php
	if(session_id()==null)
		session_start();
	$resultado = 0;
	$id = session_id();
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	$sql = "SELECT usuario FROM usuarios WHERE idSesion = '$id'";
	$rs = mysqli_query($con,$sql);
	if($rs->num_rows > 0)
	{
		$row = $rs->fetch_assoc();
		$usuario = $row['usuario'];
		$resultado = 1;
	}
	else
	{
		$resultado = 0;
		$usuario = 'SIN USUARIO';
	}
	echo '
	<!DOCTYPE html>
		<html>
		<head>
			<meta lang="ES">
			<meta charset="utf-8">
			<title>Market-E: Tu supermercado online</title>
			<link rel="icon" href="imagenes/icono.png" type="image/x-icon" >
			<link rel="stylesheet" href="estilo/estilo.css">
		</head>
		<body>
			<div name="encabezado" id="encabezado" style="height:90px;width: calc(100% - 36px);background-color:#5A0202;color:white;padding:10px;position:fixed;">
				<table height="70px" align="center">
					<tbody>
						<tr>
							<td>
								<a href="../"><img src="imagenes/logo.png" height="70px"></a>
							</td>
							<td align="left" style="min-width:200px">
								Tu supermercado
								<br>
								online
							</td>
							<td width="60%" style="min-width:212px;">
								Búsqueda de productos
								<br>
								<form name="buscar" method="post" action="buscar.php">
								<input type="text" id="buscartexto" name="buscartexto" style="width: calc(100% - 80px);"><input type="submit" id="buscar" name="buscar" style="height:26px;" value="Buscar"></form>
							</td>';
							if($resultado > 0)
							{
								echo '
								<td style="min-width:200px;font-size:17px;" align="left">
									Hola, ';echo $usuario;
									echo '</a>
									<br><a href="../perfil.php" style="color:white;">Perfil</a>
									<br><a href="../cerrarsesion.php" style="color:white;">Cerrar sesion</a>
								</td>';
							}
							else
							{
								echo '
								<td style="min-width:200px;font-size:17px;" align="left">
								<a href="../iniciarsesion.php" style="color:white;">Iniciar sesión</a>
								<br>
								<br><a href="../registrarse.php" style="color:white;">Registrarse</a>
								</td>';
							}
							echo '
						</tr>
					</tbody>
				</table>
			</div>
			<br><br>';
?>