<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
    	// Logo
    	$this->Image('images2.jpg',25,3,25,25,"jpg");
        $this->Image('images.jpg',170,3,25,25,"jpg");

    	// Arial bold 13
    	$this->SetFont('Arial','B',13);

    	// Movernos a la derecha
    	$this->Cell(60);

    	// Título
    	$this->Cell(80,10,'REPORTE DE LIBROS',1,0,'C');

    	// Salto de línea$pdf->cell(35,10, $row['cedula'],1,0,'L',0);
        $this->Ln(20);

        $this->cell(40,10, 'Titulo',1,0,'C');
        $this->cell(40,10, 'Autor',1,0,'C');
        $this->cell(30,10, 'Ano Edicion',1,0,'C');
        $this->cell(30,10, 'Num Edicion',1,0,'C');
        $this->cell(30,10, 'Genero',1,0,'C');
        $this->cell(25,10, 'Editorial',1,1,'C');
    	$this->Ln(3);
	}

// Pie de página
	function Footer()
	{
    	// Posición: a 1,5 cm del final
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Número de página
    	$this->Cell(0,10,utf8_decode('Pagina No. ').$this->PageNo().'/{nb}',0,0,'C');
	}
}

require'conexion.php';

$consulta="SELECT * FROM libros ORDER BY autor ASC;";
$resultado = $conn->query($consulta);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row = $resultado->fetch_assoc())
{
	$pdf->cell(40,10, $row['nombre'],1,0,'L',0);
	$pdf->cell(40,10, $row['autor'],1,0,'L',0);
    $pdf->cell(30,10, $row['ano_edicion'],1,0,'L',0);
    $pdf->cell(30,10, $row['num_edicion'],1,0,'L',0);
	$pdf->cell(30,10, $row['genero'],1,0,'L',0);
	$pdf->cell(25,10, $row['editorial'],1,1,'L',0);
}

$pdf->Output();
?>