<?php

require('fpdf.php');
require_once "../defaultincludes.inc";
require_once "../mrbs_sql.inc";
require_once "../functions_view.inc";
class pdf extends tFPDF
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

    function body()
    {
        
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
$id = $_POST['resa'];
//var_dump($id);
$sql = "SELECT from_unixtime(start_time) as debut,from_unixtime(end_time) as  fin,timestampdiff(SECOND,from_unixtime(start_time),from_unixtime(end_time))/3600 as duree, price, create_by,room_name, email FROM mrbs_entry e INNER JOIN mrbs_room r on r.id=e.room_id INNER JOIN mrbs_users u on e.create_by=u.name where e.id = ".$id.";";
  $info = sql_query($sql);
  $ligne = sql_row($info,0);

/* var_dump($info);
var_dump($ligne); */
// Instanciation de la classe dérivée
$pdf = new pdf();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Membre : '.$ligne[4],0,1);
$pdf->Cell(0,10,'Mail : '.$ligne[6],0,1);
$pdf->Cell(0,10,'Date : '.$ligne[0],0,1);
$pdf->Cell(0,10,'Duree : '.$ligne[2],0,1);
$pdf->Cell(0,10,'Prix total : '.$ligne[2]*$ligne[3],0,1); 
$pdf->Output();

 // observations
 $pdf->SetFont( "Arial", "BU", 10 ); $pdf->SetXY( 5, 75 ) ; $pdf->Cell($pdf->GetStringWidth("Observations"), 0, "Observations", 0, "L");
 $pdf->SetFont( "Arial", "", 10 ); $pdf->SetXY( 5, 78 ) ; $pdf->MultiCell(190, 4, $row[5], 0, "L");
?>

