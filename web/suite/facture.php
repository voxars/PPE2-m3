<?php

include ("connexion.php");
$id = $_POST["idr"];
echo $id;
$sql =$pdo->prepare("SELECT from_unixtime(start_time) as debut,from_unixtime(end_time) as  fin,timestampdiff(SECOND,from_unixtime(start_time),from_unixtime(end_time))/3600 as duree, price, create_by,room_name, email FROM mrbs_entry e INNER JOIN mrbs_room r on r.id=e.room_id INNER JOIN mrbs_users u on e.create_by=u.name where e.id =?;");
$sql->execute(array($id));
$info = $sql-> fetch(PDO::FETCH_ASSOC);

require('fpdf.php');

  

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


// Instanciation de la classe dérivée
ob_get_clean();
/*$pdf = new pdf();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
*/
$pdf=new pdf();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Membre : '.$info['create_by']);
$pdf->Ln(15);
$pdf->Cell(40,10,'Mail : '.$info['email']);
$pdf->Ln(15);
$pdf->Cell(40,10,'Date : '.$info['debut']);
$pdf->Ln(15);
$pdf->Cell(40,10,'Duree : '.$info['duree'] .'h');
$pdf->Ln(15);
$pdf->Cell(40,10,'Prix total : '.$info['price']*$info['duree']);
$pdf->Output();
/*$pdf->Cell(0,10,'Membre : '.$info['create_by']);
$pdf->Cell(0,10,'Mail : '.$info['email']);
$pdf->Cell(0,10,'Date : '.$info['debut']);
$pdf->Cell(0,10,'Duree : '.$info['duree']);
$pdf->Cell(0,10,'Prix total : '.$info['price']*$info['duree']); 
$pdf->Output();*/
ob_end_flush();


