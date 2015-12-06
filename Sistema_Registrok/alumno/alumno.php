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
				$ConsultaNIE=mysql_query("Select * from alumno");
	if(mysql_num_rows($ConsultaNIE)==0)
	{
		$idNIE=1;
	}
	else
	{
		$idNIE=0;
		while($nr=mysql_fetch_array($ConsultaNIE))
		{
			$idNIE=$idNIE+1;
			
		}
		$idNIE1=$idNIE+1;
		$idNIEK = 'NIE' . $idNIE1;
		
	}       

	   $co = 'N';
		if ($_POST)
		{
			$conexion = mysql_connect("localhost","root","root");
			$db = mysql_query("use sistemaslibre1");
		
			$insertar = mysql_query("insert into alumno values(null,'$idNIEK','$_POST[nombre]','$_POST[apellido]','$_POST[fech]','$_POST[genero]','$_POST[cel]','$_POST[direccion]','$_POST[nencargado]') ");
		
			if($insertar)
			{
				echo "<script>alert('El alumno fue registrado con exito');</script>";
			}
			else
			{
				echo "Error no se pudo registrar los datos del alumno: <b>" . mysql_error() . "</b>";  
			}
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>:::Alumnos:::</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div>
		
		<form method="post">
			<fieldset id="fieldset">
				<legend id="legend"><b>Registrar Alumnos</b></legend>
				<center><table border="0">
					
					
					<?php
					
					echo "<tr>
						<td id=textForm><b>NIE:</b></td>
						<td><input name=nombre type=text readonly=readonly class=caja value='$idNIEK' required placeholder=NIE /></td>
					</tr> ";
					
					
					
					?>
					<tr>
						<td id="textForm"><b>Nombres:</b></td>
						<td><input name="nombre" type="text" class="caja" required placeholder="Éscriba su nombre aquí" /></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Apellidos:</b></td>
						<td><input name="apellido" type="text" class="caja" placeholder="Éscriba su apellido aquí" required /></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Fecha de Nacimiento:</b></td>
						<td><input name="fech" type="date" class="caja" /></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Genero:</b></td>
						<td><select id="genero" name="genero">
							<option value="">Selecciona tu Sexo</option>
							<option value="female">Femenino</option>
							<option value="male">Masculino</option>
						</select></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Telefono Responsable:</b></td>
						<td><input name="cel" type="text" class="caja" maxlength="9" onkeypress="mascara(this, '####-####')" placeholder="2222-2222" required style="width: 18%" /></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Dirección:</b></td>
						<td><textarea name='direccion' rows='4' cols='50' class="caja"></textarea></td>
					</tr>
					
					<tr>
						<td id="textForm"><b>Nombre de Responsable:</b></td>
						<td><input name="nencargado" type="text" class="caja" placeholder="Escriba su nombre aquí" required /></td>
					</tr>
					
						<td colspan=2 height="40"><center><input name=guardar type=submit value='Guardar Registro'></center></td>
					</table></center>
			</fieldset>
		</form>
		
	    </div>
	</body>
</html>