<?php
include_once('PDF.php');
include_once('myDBC.php');
	
	$buscar= $_POST['id_balumno'];
	//Recibimos dentro de una cadena la fecha
	$fecha=date('Y-m-d');
	
	//Se crea un objeto de PDF
	//Para hacer uso de los m�todos
	$pdf = new PDF();
	$pdf->AddPage('P', 'Letter'); 
	$pdf->SetFont('Arial','B',12); 
	$pdf->Cell(0,10,$fecha,0,1,'R'); 
	
	$pdf->Cell(40,7,'INFORMACION GENERAL DE NOTAS',0, 1 , ' C ');
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db('sistemaslibre1');
	
	$pdf->Ln();
	$sql="SELECT * FROM notas1";
	$rec=mysql_query($sql);
	while($row=mysql_fetch_array($rec))
	{
		
		$pdf->Cell(40,5, $row["id"],1,0	, 'C');
		$pdf->Cell(40,5, $row["lab1"],1,0, 'C');
		$pdf->Cell(40,5, $row["lab2"],1,0, 'C');
		$pdf->Cell(40,5, $row["lab3"],1,0, 'C');
		$pdf->Cell(40,5, $row["pro"],1,0, 'C');
	}
	$pdf->Ln();
	$sql="SELECT * FROM notas";
	$rec=mysql_query($sql);
	while($row=mysql_fetch_array($rec))
	{
		
		$pdf->Cell(40,5, $row["idnota"],1,0	, 'C');
		$pdf->Cell(40,5, $row["nota1"],1,0, 'C');
		$pdf->Cell(40,5, $row["nota2"],1,0, 'C');
		$pdf->Cell(40,5, $row["nota3"],1,0, 'C');
		$pdf->Cell(40,5, $row["promedio"],1,1, 'C');
	}
	
	$pdf->ImprimirTexto('textoFijo.txt'); //Texto fijo 
	
	$pdf->Output(); //Salida al navegador del pdf
?>
