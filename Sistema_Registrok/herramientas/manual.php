<?php Session_start();
if(!isset($_SESSION["password"])){
	echo "<script>alert('Usuario no registrado');
	location.replace('index.php');</script>";
	
	?>