<?php
require '../fpdf/fpdf.php';
require 'connection.php';
class PDF extends FPDF{

function Header(){
//header
        // $this->Image('img/logo.png',10,6,30);
        $this->Cell(80);        
        $this->Ln(5);

        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'ProjUninassau',0,0,'C');
        $this->Ln(20);
    }
//footer
function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
    }
}
//select no banco
$idVisita = $_GET['idVisita'];

$sql = $conn->prepare("SELECT * FROM visita WHERE idVisita = $idVisita");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
foreach (new RecursiveArrayIterator($sql->fetchAll()) as $x=>$row){
    
//inicio pdf
$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(190, 10, "RELATORIO DE VISITA", 0, 1, "C");
$pdf->Ln(15);

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 10, utf8_decode("INFORMAÇÕES"), 1 , 1, "C");
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(190, 10, "Coordenador: ".utf8_decode($row['coordenador'])."", 1);
$pdf->Ln();

$pdf->Cell(95, 10, "Quantidade de alunos: " .$row['qtAluno']. "", 1, 0);
$pdf->Cell(95, 10, "Conteudo do dia: " .$row['conteudoDia']. "", 1, 0);
$pdf->Ln();
$pdf->Cell(95, 10, "Telefone(Professor): " .$row['telProf']. "", 1, 0);
$pdf->Cell(95, 10, "Data da visita: " .$row['dataVisita']. "", 1, 0);
$pdf->Ln();
$pdf->Ln();


$pdf->Output();
}//end foreach
?>