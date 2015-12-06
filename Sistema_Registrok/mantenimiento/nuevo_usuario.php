<?php

	include('../mysql.php');
	
	if ($_POST)
	{
		
		
		$npass="$_POST[pass]";
		$pass = "$_POST[pass1]";
		
		if($pass!= $npass)
				{
					echo "<font face=arial size=2 color=red><center>La contraseña no coincide";
				}
				
				else
		
		{
		
		
	$insertar = mysql_query("insert into usuario values(null,'$_POST[usuario]','$_POST[pass]','$_POST[niveles]') ");
		
			if($insertar)
			{
				echo "<script>alert('Los datos fueron registrados con exito');</script>";
			}
			else
			{
				echo "Error no se pudo registrar el usuario : <b>" . mysql_error() . "</b>";  
			}
		}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Usuarios</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body id="body">
	 	<div>
		
		<form method=post>
			<fieldset id="fieldset">
				<legend id="legend"><b>Agregar Usuarios</b></legend>
				<center><table border=0>
					<tr>
						<td id="textForm"><b>Usuario:</b>
						<td><input name="usuario" type="text" class="caja" placeholder="usuario" required />
						<td rowspan="8" ><img src="../images/login.jpg" >
					<tr>
						<td id="textForm"><b>Contraseña:</b>
						<td><input name="pass" type="password" class="caja" placeholder="contraseña" required />
					<tr>
					<tr>
						<td id="textForm"><b>Repetir Contraseña:</b>
						<td><input name="pass1" type="password" class="caja" placeholder="contraseña" required />
					<tr>
					
					
					
					<tr>
						<td id="textForm"><b>Tipo de Nivel:</b>
						
						<td><select id="niveles" name="niveles">
								<option value="">Nivel de Usuario</option>
								<option value="administrador">Administrador</option>
								<option value="usuario">Usuario</option>
							
							</select></td>
					<tr>
					<tr>
						
						<td colspan=2 height="40"><center><input name=guardar type=submit value='Guardar Registro'></center>
					</table>
					</fieldset>
					</form>
		
		</div>
	</body>
</html>



	
	
