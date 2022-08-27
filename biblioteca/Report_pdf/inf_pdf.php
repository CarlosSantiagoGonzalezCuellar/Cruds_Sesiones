<?php
	require('fpdf/fpdf.php');
	class PDF extends FPDF
	{
		//CABECERA DEL LA PAGINA
		function Header()
		{
			// insertar logo
			$this->Image('images2.jpg',20,3,25,25,"jpg");
			$this->Image('images.jpg',160,3,25,25,"jpg");

			//titulo
			$this->SetFont('Arial','B',14);
			$this->Cell(60);
			$this->Cell(80,10,'AGENDA DE AMIGOS',1,0,'C');

            // salto linea
            $this->Ln(20);

			$this->Cell(30,10,'Documento',1,0,'C');
			$this->Cell(45,10,'Nombre',1,0,'C');
			$this->Cell(45,10,'Correo',1,0,'C');
			$this->Cell(25,10,'Telefono',1,0,'C');
			$this->Cell(50,10,'Direccion',1,0,'C');

            // salto linea
            $this->Ln(10);
		}

		//pie de pagina
		function Footer()
		{
			//posicion de 1,5 cm del final de la hoja
            $this->SetY(-15);

            //Arial Italic 8
            $this->SetFont('Arial','I',8);

            //Número de la página
            $this->Cell(0,10,utf8_decode('Página No. ').$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	require'conexion.php';
	$consulta="SELECT * FROM amigos ORDER BY documento ASC;";
	
	$resultado = $conn->query($consulta);

	$pdf=new PDF();

    $pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','B',8);

	//ejecutar el ciclo repetitivo 
	while ($row=$resultado->fetch_assoc())
	{
		$pdf->Cell(30,10,$row['documento'],1,0,'L',0);
		$pdf->Cell(45,10,$row['nombre'],1,0,'L',0);
		$pdf->Cell(45,10,$row['correo'],1,0,'L',0);
		$pdf->Cell(25,10,$row['telefono'],1,0,'L',0);
		$pdf->Cell(50,10,$row['direccion'],1,1,'L',0);
	}
	$pdf->Output();
?>
