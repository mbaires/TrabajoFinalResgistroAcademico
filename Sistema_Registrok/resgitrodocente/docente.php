<script>
 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
</script>


<?php
	include('../mysql.php');
$Nivel = 'Usuario';
	
	

	if ($_POST)
	{
		
		
		$npass="$_POST[contraseñaR]";
		$pass = "$_POST[contraseña]";
		
		if($pass!= $npass)
				{
					echo "<font face=arial size=2 color=red><center>La contraseña no coincide";
				}
				
				else
		{
		
		$insertar = mysql_query("insert into usuario values('0','$_POST[usuario]','$_POST[contraseña]','Bajo')");
		if($insertar)
			{
				
				
				
	if ($_POST)
	{
		
		
		
		
	
	$insertar = mysql_query("insert into maestro values(null,'$_POST[nombre]','$_POST[apellido]','$_POST[fech]','$_POST[genero]','$_POST[cel]','$_POST[direccion]','$_POST[escalafon]','$_POST[turno]','$_POST[correo]') ");
  
		
		if($insertar)
			{
				echo "<script>alert('Los datos fueron registrados con exito');</script>";
			}
			else
			{
				echo "Error no se pudo registrar los datos del docente: <b>" . mysql_error() . "</b>";  
			}
			 
		}
	
				
				
			}
			
		
		}
	}
	
	
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>:::Docentes:::</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body id="body">
		<div>
			<form method="post">
				<fieldset id="fieldset">
				<legend id="legend"><b>Registrar Docentes</b></legend>
				<center><table border=0>
					<tr>
						<td id="textForm"><b>Nombres:</b>
						<td><input name="nombre" type="text" class="caja" placeholder="Escriba aquí su nombre" required />
					</tr>
					
					<tr>
						<td id="textForm"><b>Apellidos:</b>
						<td><input name="apellido" type="text" class="caja" placeholder="Escriba aquí su apellido" required />
					</tr>
					
					<tr>
						<td id="textForm"><b>Fecha de Nacimiento:</b>
						<td><input name="fech" type="date" class="caja" />
					</tr>
					
					<tr>
						<td id="textForm"><b>Genero:</b></td>
							<td><select id="genero" name="genero">
								<option value="">Selecciona tu Sexo</option>
								<option value="Mujer">Femenino</option>
								<option value="Hombre">Masculino</option>
							</select></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Telefono:</b></td>
							<td><input name="cel" type="text" class="caja" maxlength="9" onkeypress="mascara(this, '####-####')" placeholder="2222-2222" required style="width: 18%" /></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Dirección:</b>
						<td><textarea name="direccion" rows='4' cols='50' class="caja"></textarea>
					</tr>
					
					<tr>
						<td id="textForm"><b>Numero de Escalafon:</b>
						<td><input id="escalafon" name="escalafon" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength = "7">
								
							</select></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Turno:</b>
						<td><select id="turno" name="turno">
								<option value="">Matutino</option>
								
								
							</select></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Correo:</b>
						<td><input name="correo" type="email" class="caja" required />
					</tr>
					
					<tr>
						<td id="textForm"><b>Usuario:</b>
						<td><input name="usuario" type="text" class="caja" placeholder="Escriba aquí su usuario" required>
					</tr
					

					
					<tr>
						<td id="textForm"><b>Contraseña:</b>
						<td><input name="contraseña" type="password"  class="caja" placeholder="Escriba aquí su contraseña" required>
					</tr>
					<tr>
						<td id="textForm"><b>Repetir Contraseña:</b>
						<td><input name="contraseñaR" type="password"  class="caja" placeholder="Escriba aquí su contraseña" required>
					</tr>
					
						<td colspan=2 height="40"><center><input name=guardar type=submit value='Guardar Registro'></center>
					</table></center>
					</fieldset>
				</form>
	
		</div>
	</body>
</html>
