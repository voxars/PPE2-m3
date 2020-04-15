<?php
require('fpdf.php');

class PDF extends tFPDF
{
// En-tête
function Header()
{
    
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,10,'Facture',1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$sql="SELECT create_by
FROM mrbs_entry
WHERE id = 1";
$user = sql_query1($sql);
// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Association : '.$row['user'],0,1);
$pdf->Cell(0,10,'Membre : ',0,1);
$pdf->Cell(0,10,'Mail : ',0,1);
$pdf->Cell(0,10,'Date : ',0,1);
$pdf->Cell(0,10,'Durée : ',0,1);
$pdf->Cell(0,10,'Prix total : ',0,1);
$pdf->Output();
?>