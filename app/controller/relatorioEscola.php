<?php
include '../fpdf/fpdf.php';
include_once '../model/DAO/conexaoMysql.php';

class PDF extends FPDF{

function Header(){
//header
        // $this->Image('img/logo.png',10,6,30);
        $this->Cell(80);        
        $this->Ln(5);

        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'RelatorioEscola',0,0,'C');
        $this->Ln(20);
    }
//footer
function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
    }
}
//select no banco
$id = $_GET['id'];

$sqlEscola = "SELECT * FROM escola WHERE Escola = $id";
$resuEscola = Conexao::getConn()->prepare($sqlEscola);
$resultEscola->execute();
$rowEscola = $resultEscola->fetch(PDO::FETCH_OBJ);


// $sqlAtividade = "SELECT * FROM atividade WHERE codAtiv = " . $rowFeirante['cadastro_atividade_id'];
// $resultAtividade = $conn->query($sqlAtividade);
// $rowAtividade = $resultAtividade->fetch_assoc();

//inicio pdf
$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(190, 10, "RELATÓRIO ESCOLA", 0, 1, "C");
$pdf->Ln(15);

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 10, "NOME DA ESCOLA", 1 , 1, "C");
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(190, 10, "Nome da Escola: ".utf8_decode($rowEscola->nome)."", 1);
$pdf->Ln();


$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(190, 10, utf8_decode("DADOS DA ESCOLA"), 1 , 1, "C");
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(63.3, 10, "Setor: ". $rowSetores->setor, 1, 0);
$pdf->Cell(63.3, 10, "Localidade: ". $rowLocalidade->localidade, 1, 0);
$pdf->Cell(63.4, 10, "Responsavel: ". $rowResponsavel->responsavel, 1, 0);
$pdf->Ln();
$pdf->Ln();


$pdf->Output();
?>
