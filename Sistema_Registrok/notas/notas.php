<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>:::Notas:::</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
<?php
	include('../mysql.php');
	
	if ($_POST)
	{
		
		$Consultanota=mysql_query("Select * from notas");
	if(mysql_num_rows($Consultanota)==0)
	{
		$idnota=1;
	}
	else
	{
		$idnota=0;
		while($nr=mysql_fetch_array($Consultanota))
		{
			$idnota=$idnota+1;
			
		}
		$idnota=$idnota+1;
		
		
	}       
		
		
		
		
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
	$promedio = ($n1 + $n2 + $n3) / 3;
	
$insertar = mysql_query("insert into notas values('$idnota','$_POST[n1]','$_POST[n2]','$_POST[n3]', '$promedio')");
		
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

	<body>
		<div>
	
		<form method=post>
		
			

			<fieldset id="fieldset">
				<legend id="legend"><b>Ingreso de Notas</b></legend>
					<center><table border=0>
					
					<?php
		
					
						$registros=mysql_query("Select * from alumno");
			$alumno= "<select name=alumno>";

			while($cantreg=@mysql_fetch_array($registros))
			{
				$alumno .= "<option value='$cantreg[id]'>$cantreg[NIE]</option>";
			}
			$alumno .= "</select>";
					echo "
					<td><id=textForm><b>NIE alumno:</b>";
			
		
			echo "<td>$alumno<input name=agregar maxlength= 9 type=button value=Buscar_Alumno OnClick=\"location.replace('./buscar.php')\">";
?>
					<tr>
						<td id="textForm"><b>Nota 1:</b>
						<td><input name="n1" type="number" min="0"  class="caja" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength = "4" />
					<tr>
					<tr>
					<td>
					</tr>
						<td id="textForm"><b>Nota 2:</b>
						<td><input name="n2" type="number" min="0"   maxlength="4" class="caja"  required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength = "4" />
					<tr>
					<tr>
						<td id="textForm"><b>Nota 3:</b>
						<td><input name="n3" type="number" min="0"  class="caja" required onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength = "4"/>
					<tr>
						<td colspan=2 height="40"><center><input name="guardar" type="submit" value='Guardar Registro'></center>
					</table>
			</fieldset>
		</form>
		
		</div>
	</body>
</html>