<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<div>
		<table border="0" cellpadding="0" cellspacing="0" width="600">
		<tr>
			<td width="150" bgcolor="#596270" style="font-weight: bold">Usuario</td>
			<td width="150" bgcolor="#596270" style="font-weight: bold">Contrase&ntilde;a</td>
			<td width="150" bgcolor="#596270" style="font-weight: bold">Nivel</td>
			<td width="150" bgcolor="#596270" style="font-weight: bold">Accion</td>
		</tr>
		<?php
			include('../mysql.php');
				
			$result = mysql_query("SELECT * FROM usuario");
			
			while($registro = mysql_fetch_array($result))
			{
				echo "
					<tr>
						<td width='150' bgcolor='#949392'>".$registro['Login']. "</td>
						<td width='150' bgcolor='#949392'>".$registro['Password']."</td>
						<td width='150' bgcolor='#949392'>".$registro['Nivel']."</td>
						<td width='150' bgcolor='#949392'><a href='modificar_usuario.php'>Modificar</a></td>
					</tr>
					";
			}
		?>
		</table>
	</div>
	</body>
</html>