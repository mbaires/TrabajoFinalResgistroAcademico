	<?php
include("../encabezado_subcarpeta.php");
include('../mysql.php');
?>

<html lang="en">

<head>
</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">
            <!-- top navigation -->
           

            <!-- page content -->
            <div class="right_col" role="main">

                <?php
				$link = mysql_connect("localhost", "root","root"); 
mysql_select_db("sistemaslibre1", $link); 
$result = mysql_query("SELECT id, NombreDocente, ApellidoDocente, FechaNaciDo, GeneroDoc, Telefono, DireccionDoce, Escalafon, Turno, Correo FROM maestro 	", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table id='example' class='table table-striped responsive-utilities jambo_table'> \n"; 
   echo "<trclass='headings'><td>Id</td><td>Nombre</td><td>Apellido</td><td>FechNacimiento</td><td>Genero</td><td>  Telefono  </td><td>Direccion</td><td>Escalafon</td><td>Turno</td><td>Correo</td> \n"; 
   
   do { 
      echo "<tr>
	  <td>".$row["id"]."</td><td>".$row["NombreDocente"]."</td><td>".$row["ApellidoDocente"]."</td><td>".$row["FechaNaciDo"]."</td><td>".$row["GeneroDoc"]."</td>
	  <td>".$row["Telefono"]."</td><td>".$row["DireccionDoce"]."</td><td>".$row["Escalafon"]."</td><td>".$row["Turno"]."</td><td>".$row["Correo"]."</td>
	  
	  
	  
	  </tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} ?>

                <br />
            </div>
            <!-- /page content -->

        </div>

    </div>
	<?php

?>
</body>

</html>

