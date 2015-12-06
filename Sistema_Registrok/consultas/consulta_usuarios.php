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
				$link = mysql_connect("localhost", "root"); 
mysql_select_db("sistemaslibre1", $link); 
$result = mysql_query("SELECT idusuario, Login, Password, Nivel FROM  usuario	", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table id='example' class='table table-striped responsive-utilities jambo_table'> \n"; 
   echo "<trclass='headings'><td>IdUsuario</td><td>Login</td><td>Password</td><td>Nivel</td> \n"; 
   
   do { 
      echo "<tr>
	  <td>".$row["idusuario"]."</td><td>".$row["Login"]."</td><td>".$row["Password"]."</td><td>".$row["Nivel"]."</td>
	  
	  
	  
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
