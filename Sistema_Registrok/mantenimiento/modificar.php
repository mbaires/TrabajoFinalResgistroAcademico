<?php
	
	include('../mysql.php');
	
	$id=$_GET['idusuario'];	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Modificar Usuarios</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body id="body">
	 	<div>
		
		<form method="POST" action="mod_usuario.php">
			<fieldset id="fieldset">
				<legend id="legend"><b>Modificacion de Usuarios</b></legend>
				<center><table border=0>
					<tr>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<td id="textForm"><b>Usuario:</b>
						<td><input name="usuario" type="text" value="<?php echo $row['Login']; ?>" class="caja" placeholder="usuario" required />
					<tr>
						<td id="textForm"><b>Contraseña:</b>
						<td><input name="pass" type="password" value="<?php echo $row['Password']; ?>" class="caja" placeholder="contraseña" required />
					<tr>
					<tr>
						<td id="textForm"><b>Tipo de Nivel:</b>
						
						<td><input name="pass" type="password" value="<?php echo $row['Nivel']; ?>" class="caja" placeholder="contraseña" required />
					<tr>
					<tr>
						
						<td colspan=2 height="40"><center><input name=guardar type=submit value='Guardar'></center>
					</table>
					</fieldset>
					</form>
		
		</div>
	</body>
</html>