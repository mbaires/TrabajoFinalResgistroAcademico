<?
session_start();
if (!isset($_SESSION["user"])){
echo "<script>alert('Usuario no registrado');location.replace('../indexx.php');</script>";
}elseif($_SESSION["tipo"] != "administrador")
{
	echo "<script>location.replace('../home.php');</script>";
}
else
{

include('../mysql.php');
include('../script.php');

}
?>
<html>
<head>
<script>
function uno(src,color_entrada) {
    src.bgColor=color_entrada;src.style.cursor="hand";
}
function dos(src,color_default) {
    src.bgColor=color_default;src.style.cursor="default";
}
</script>
</head>
	<body vlink="white" alink="white" link="white">
	<center>
	<form method='post'>

	<center><table width=100% bgcolor=white border=0 cellspacing=0 cellpadding=0>
	<tr>
	<td><center><table border=0 width=100% cellspacing=0 cellpadding=0>

	<tr>
			<td>
			<table width=100% border=2 bordercolor=#000000 cellspacing=0 cellpadding=0>
			<tr bgcolor=#234175>
				<tH class=text><font color="#FFFFFF">N.
				<tH class=text><font   color="#FFFFFF">Nombre
				<Th class=text><font  color="#FFFFFF">Password
			
				<Th class=text><font  color="#FFFFFF">Tipo de Cuentas
				<th class=text colspan="2"><font  color="#FFFFFF">Opciones
				<?php
					include("../mysql.php");
					$consultar=mysql_query("Select * from usuario");
					if(mysql_num_rows($consultar)==0)
					{
						echo "<font face=arial size=2 color=red>No hay registros hasta el momento";
					}
					else
					{
						$nregistros=0;
						while($datos=mysql_fetch_array($consultar))
						{
						$nregistros=$nregistros + 1;
							echo "<tr onMouseOver=\"uno(this,'#99CCFF');\" onMouseOut=\"dos(this,'FFFFFF');\">
								<td class=text><center>$nregistros
								<td class=text><center>$datos[Login]
								<td class=text><center>********************
							
								<td class=text><center>$datos[Nivel]
								<td class=text><center><a href='edit_usuario.php?id=$datos[idusuario]'><img src=../images/modificar.jpg width=30 height=30 title='Modificar Usuarios'></a>
								<td class=text><center>
								<script>
									function js_Eliminar(id_cl)
										{
										if (window.confirm(\"�Est� seguro que desea eliminar el usuario $datos[Login] seleccionado?\")) {
											   location.href = \"edit_usuario.php?dato=\" + id_cl;
										}
									}
									</script>

									<a href=\"javascript:js_Eliminar($datos[idusuario])\"><img src=../images/022.png width=30 height=30 title='Eliminar el usuario'></a>
								";
						}
					}
				?>
				</tr>
			</table>

	</tr>
	</table>
		<tr>
	
	</tr>
	</table></center>



	</form>
	</body>
</html>

<?php
if(@$_GET["id"])
{
	$extraer=mysql_fetch_array(mysql_query("Select * from usuario where idusuario='$_GET[id]'"));
     $password="$extraer[Password]";
	echo "
	<fieldset>
	<legend style='font-family:arial; font-size:12px; color:white; background-color:#000000'>Modificar datos de la Cuenta</legend>
		<form method=post>
		<center><table border=0 width=70% cellspacing=0 cellpadding=0 bgcolor=white>

	<tr>
    <input name=clave type=hidden value=$extraer[Password]>
	<input name=codigo	type=hidden value='$_GET[id]'>
	<td><font face=arial size=2><b>Nombre Usuario:
	<td><input name=nombre type=text value='$extraer[Login]'>
	<tr>
	<td><font face=arial size=2><b>Password:
	<td><input name=pass type=password value=$password>
	<tr>
	<td><font face=arial size=2><b>Tipo de Cuenta:
	<td><input name=tipo value=$extraer[Nivel]>
	<tr>
	<td colspan=2><br><center><input name=modificar type=submit value='Modificar Datos'>
	<input name=cancelar type=button value=Cancelar OnClick=\"location.replace('edit_usuario.php')\"></center>
	</tr>
	</table>
		</form>


	";
}


if(@$_POST["modificar"])
{
	include("../mysql.php");
	$registros=mysql_query("Select * from usuario where Password='$_POST[pass]' or Login='$_POST[nombre] or DUI='$_POST[tipo]'");
		if(@mysql_num_rows($registros)==0)
		{
		    $clave="$_POST[pass]";
                if($_POST["clave"] == $clave)
                {
                  $llave=$_POST["clave"];
                }
                else
                {
                  $llave=("$_POST[pass]");
                }
			if(mysql_query("Update usuario Set Login='$_POST[nombre]',Password='$llave',Nivel='$_POST[tipo]' where idusuario=$_POST[codigo]"))
			{
				echo "<script>alert('Los Datos han sido modificados');location.replace('edit_usuario.php')</script>";
			}
			else
			{

				echo "<font face=arial size=2 color=red>Error".mysql_error();
			}
		}


}
//eliminando al Usuario

if(@$_GET["dato"])
{

$eliminar=mysql_fetch_array(mysql_query("Select * from usuario where idusuario='$_GET[dato]'"));

	if($eliminar["idusuario"]==1)
	{
		echo "<script>alert('No se puede eliminar acceso denegado');</script>";
	}
	else
	{
		if(mysql_query("Delete from usuario Where idusuario='$_GET[dato]'"))
		{
		echo "<script>alert('El usuario ha sido eliminado con exito');location.replace('edit_usuario.php');</script>";
		}
	}

}

?>