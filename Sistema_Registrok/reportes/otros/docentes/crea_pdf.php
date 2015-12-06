<?php
include_once('PDF.php');
include_once('myDBC.php');
	
	$buscar= $_POST['id_balumno'];
	//Recibimos dentro de una cadena la fecha
	$fecha=date('Y-m-d');
	
	//Se crea un objeto de PDF
	//Para hacer uso de los métodos
	$pdf = new PDF();
	$pdf->AddPage('P', 'Letter'); 
	$pdf->SetFont('Arial','B',12); 
	$pdf->Cell(0,10,$fecha,0,1,'R'); 
	
	$pdf->Cell(40,7,'INFORMACION GENERAL DEL DOCENTE',0, 1 , ' C ');
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db('sistemaslibre1');

	$pdf->Ln();
	$sql="SELECT * FROM maestro";
	$rec=mysql_query($sql);
	while($row=mysql_fetch_array($rec))
	{
		$pdf->Cell(30,5, $row["NombreDocente"],1,1, 'C');
		$pdf->Cell(30,5, $row["ApellidoDocente"],1,1, 'C');
		$pdf->Cell(30,5, $row["GeneroDoc"],1,1, 'C');
		$pdf->Cell(30,5, $row["FechaNaciDo"],1,1, 'C');
		$pdf->Cell(30,5, $row["Correo"],1,1, 'C');
		$pdf->Cell(30,5, $row["Escalafon"],1,1, 'C');
		$pdf->Cell(30,5, $row["Telefono"],1,1, 'C');
		$pdf->Cell(30,5, $row["Turno"],1,1, 'C');
	}
	
	$pdf->ImprimirTexto('textoFijo.txt'); //Texto fijo 
	
	$pdf->Output(); //Salida al navegador del pdf
?>
