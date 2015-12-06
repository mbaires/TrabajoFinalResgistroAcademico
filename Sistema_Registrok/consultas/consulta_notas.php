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
$result = mysql_query("SELECT * FROM notas ", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table id='example' class='table table-striped responsive-utilities jambo_table'> \n"; 
   echo "<trclass='headings'><td>IdNota</td><td>Nota1</td><td>Nota2</td><td>Nota3</td><td>PromedioFinal</td>
   <td>Alumno</td>
   </tr> \n"; 
   
   do { 
      echo "<tr>
	  <td>".$row["idnota"]."</td><td>".$row["nota1"]."</td><td>".$row["nota2"]."</td>
	  <td>".$row["nota3"]."</td><td>".$row["promedio"]."</td><td>--------</td>
	  
	  
	  
	  
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
