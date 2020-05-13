<?php
include ("top.php");
include ("connexion.php");
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}  
$id = $_POST["idr"];
echo $id;
/*$sel=$pdo->prepare("DELETE FROM mrbs_entry WHERE id=?");
$sel->execute(array($donnees['id']));
echo "Facture Clôturée";*/
?></br>
<form action="session.php" method="POST">
   <input type="submit" name="bouton" class="btn btn-primary" value="Retour acceuil">
</form></br>
