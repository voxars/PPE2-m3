<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   @$login=$_POST["login"];
include('top.php');  
include('connexion.php');  
   $req=$pdo->prepare("select * from mrbs_entry where create_by=?");
   $req->execute(array($login));
   $oui=$req->fetchAll();
   print_r($oui)
?>

<button type="submit" name="valider" class="btn btn-primary " values="S'authentifier">Facture</button></br>
   <body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>

</html>