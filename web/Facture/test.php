<?php

//
// exemple de facture avec mysqli
// gere le multi-page
// Ver 1.0 THONGSOUME Jean-Paul
//


   
    
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        include("../config/config.php");
        $bdd = new PDO($Hote_BD_PDO, $user_PDO, $PW_PDO, $pdo_options);
         
        $file = fopen ("fichier.txt" , "w+");
        $req = $bdd->query("SELECT * FROM licence ORDER BY id_licence DESC ");
        while($donnees = $req->fetch())
        {
            $_xml = $donnees['nomproduit'].";".$donnees['quantite_licence'].";".$donnees['prix']." \r\n";
            fputs ($file , $_xml);
            fputs ($file , "\n");
        }
        fclose($file);
        $req->closeCursor();
         
         
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
      
      
        ///////////////////////////////////////////
        // Génération du fichier PDF /////////////
        /////////////////////////////////////////
      
      
        require('fpdf.php');
          
        class PDF extends tFPDF
        {
        //Chargement des données
        function LoadData($file)
        {
            //Lecture des lignes du fichier
            $lines=file($file);
            $data=array();
            foreach($lines as $line)
                $data[]=explode(';',chop($line));
            return $data;
        }
          
        //Tableau Données
        function FancyTable($header,$data)
        {
            //Couleurs, épaisseur du trait et police grasse
            $this->SetFillColor(255,0,0);
            $this->SetTextColor(255);
            $this->SetDrawColor(128,0,0);
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            //En-tête
            $w=array(40,35,45);
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7,$header[$i],1,0,'C',1);
            $this->Ln();
            //Restauration des couleurs et de la police
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            //Données
            $fill=false;
            foreach($data as $row)
            {
                $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
                $this->Cell($w[1],6,$row[1],'LR',0,'R',$fill);
                $this->Cell($w[2],6,utf8_decode($row[2]),'LR',0,'R',$fill);
                $this->Ln();
                $fill=!$fill;
            }
            $this->Cell(array_sum($w),0,'','T');
        }
        }
          
        $pdf=new PDF();
        //Titres des colonnes
        $header=array('Nom produit','Quantité','Prix');
        //Chargement des données
        $data=$pdf->LoadData('fichier.txt');
        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->FancyTable($header,$data);
        $pdf->Output();
        //}