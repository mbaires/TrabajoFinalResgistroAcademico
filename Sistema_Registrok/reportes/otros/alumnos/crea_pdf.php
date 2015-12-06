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
	
	$pdf->Cell(40,7,'INFORMACION GENERAL DEL ALUMNO',0, 1 , ' C ');
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db('sistemaslibre1');

	$pdf->Ln();
	$sql="SELECT * FROM alumno";
	$rec=mysql_query($sql);
	while($row=mysql_fetch_array($rec))
	{
		$pdf->Cell(30,5, $row["id"],1,1, 'C');
		$pdf->Cell(30,5, $row["Nombre"],1,1, 'C');
		$pdf->Cell(30,5, $row["Apellidos"],1,1, 'C');
		$pdf->Cell(30,5, $row["FechaNaci"],1,1, 'C');
		$pdf->Cell(30,5, $row["Genero"],1,1, 'C');
		$pdf->Cell(30,5, $row["celencargado"],1,1, 'C');
		$pdf->Cell(30,5, $row["direccion"],1,1, 'C');
		$pdf->Cell(30,5, $row["nomencargado"],1,1, 'C');
	}
	
	$pdf->ImprimirTexto('textoFijo.txt'); //Texto fijo 
	
	$pdf->Output(); //Salida al navegador del pdf
?>
