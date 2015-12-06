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
$result = mysql_query("SELECT id, Nombre, Apellidos, FechaNaci, Genero, celencargado, direccion, nomencargado FROM alumno 	", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table id='example' class='table table-striped responsive-utilities jambo_table'> \n"; 
   echo "<trclass='headings'><td>Id</td><td>Nombre</td><td>Apellido</td><td>FechNacimiento</td><td>Genero</td><td>CelEncargado</td><td>Direccion</td><td>NombEncargado</td> \n"; 
   
   do { 
      echo "<tr>
	  <td>".$row["id"]."</td><td>".$row["Nombre"]."</td><td>".$row["Apellidos"]."</td><td>".$row["FechaNaci"]."</td><td>".$row["Genero"]."</td>
	  <td>".$row["celencargado"]."</td><td>".$row["direccion"]."</td><td>".$row["nomencargado"]."</td>
	  
	  
	  
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




