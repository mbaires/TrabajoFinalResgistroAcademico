<?php
include_once('../fpdf.php');
class PDF extends FPDF
{
	function Footer()
	{
    	$this->SetY(-15);
    	$this->SetFont('Arial','I',8); 
    	$this->Cell(0,10,'Sistema de Registro Academico | * Prohibida su reproduccion total o Parcial','T',0,'C');
	}
	
	function Header()
	{
		$this->SetFont('Arial','B',9);
		
		$this->Line(10,10,206,10);
		$this->Line(10,35.5,206,35.5);
		
		//$this->Cell(30,25,'',0,0,'C',$this->Image('../logo/logo.jpg', 152,12, 19));
		$this->Cell(111,25,'                          SISTEMA DE REGISTRO ACADEMICO',0,0,'C', $this->Image('../logo/logo3.gif',20,12,20));
    	//$this->Cell(40,25,'',0,0,'C',$this->Image('../logo/logo.jpg', 175, 12, 19));
    	
    	$this->Ln(25);
	}
	
	function ImprimirTexto($file)
	{
       	$txt = file_get_contents($file);
    	$this->SetFont('Arial','',12);
    	$this->MultiCell(0,5,$txt);
    
	}
	
	
	function cabecera($cabecera){
		
		$this->SetXY(50,105);
		$this->SetFont('Arial','B',12);
		foreach($cabecera as $columna)
		{
	    	$this->Cell(40,7,$columna,1, 2 , 'L' ) ;
    	}
    }
	
    function datos($datos){
		
		$this->SetXY(90,105);
		$this->SetFont('Arial','',12);
		foreach ($datos as $columna)
		{
			$this->Cell(65,7,utf8_decode($columna['id_alumno']),'TRB',2,'L' );
			$this->Cell(65,7,utf8_decode($columna['nombre_alumno']),'TRB',2,'L' );
			$this->Cell(65,7,utf8_decode($columna['grado_materia']),'TRB',2,'L' );
			$this->Cell(65,7,utf8_decode($columna['nombre_docente']),'TRB',2,'L' );
			$this->Cell(65,7,utf8_decode($columna['nombre_materia']),'TRB',2,'L' );
			$this->Cell(65,7,utf8_decode($columna['nota_materia']),'TRB',2,'L' );
		}
    }
    
    //El método tabla integra a los métodos cabecera y datos
    function tabla($cabecera,$datos){
		$this->cabecera ($cabecera) ;
		$this->datos($datos);
    }
    

}//fin clase PDF
?>		
