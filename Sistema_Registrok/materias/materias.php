<?php
	include('../mysql.php');
	
	
	$Consultacodigo=mysql_query("Select * from materias");
	if(mysql_num_rows($Consultacodigo)==0)
	{
		$idmateria=1;
	}
	else
	{
		$idmateria=0;
		while($nr=mysql_fetch_array($Consultacodigo))
		{
			$idmateria=$idmateria+1;
			
		}
		$idmateria=$idmateria+1;
	
		
	}   
	
	if ($_POST)
	{
		
		
			
	$insertar = mysql_query("insert into materias values('$idmateria','$_POST[materia]') ");
		
			if($insertar)
			{
				echo "<script>alert('Los datos fueron registrados con exito');</script>";
			}
			else
			{
				echo "Error no se pudo registrar las notas del alumno: <b>" . mysql_error() . "</b>";  
			}
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="urf-8" />
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" />
	</head>
	<body id="body">
	 
		<div>
			<form method=post>
				<fieldset id="fieldset">
					<legend id="legend"><b>Registrar Asignatura</b></legend>
					<center><table border=0>
					<tr>
						
						
						
						
						<?php
					
					echo "<tr>
						<td id=textForm><b>Codigo Materia:</b></td>
						<td><input name=codigo type=text readonly=readonly class=caja value=$idmateria required placeholder=id /></td>
					</tr> ";
					
					
					
					?>
						
						
						
					</tr>
					
					<tr>
						<td id="textForm"><b>Asignatura:</b></td>
						<td><input name="materia" type="text" class="caja" required placeholder="Materia" /></td>
					</tr>
						<td colspan=2 height="40">
						<center><input name="guardar" type="submit" value='Guardar Registro' /></center>
					</table>
				</fieldset>
			</form>
		
		</div>
	</body>
</html>
