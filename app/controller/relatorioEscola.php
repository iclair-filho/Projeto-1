<?php
include 'connection.php';
include '../fpdf/fpdf.php';

$sqlSelect = $conn->prepare("SELECT * FROM escola" );
$sqlSelect->execute();
$sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $rowEscola)

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(190, 10, "RELATORIO ESCOLA", 0, 1, "C");
$pdf->Ln(15);

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 10, "NOME DA ESCOLA", 1 , 1, "C");
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(190, 10, "N ome da Escola: ".utf8_decode($rowEscola['nomeEscola']),"", 1);
$pdf->Ln();


$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 10, utf8_decode("DADOS DA ESCOLA"), 1 , 1, "C");
$pdf->SetFont("Arial", "", 12);
//$pdf->Cell(63.3, 10, "Setor: "($rowEscola['setor']), 1, 0);
$pdf->Cell(63.3, 10, "Setor: ", 1, 0);
$pdf->Cell(63.3, 10, "Localidade: ". $rowEscola['localidade'], 1, 0);
$pdf->Cell(63.4, 10, "Responsavel: ". $rowEscola['responsavel'], 1, 0);
$pdf->Ln();
$pdf->Ln();


$pdf->Output();
?>