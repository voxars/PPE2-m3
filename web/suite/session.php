<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   @$login=$_POST["login"];
include('top.php');  
include('connexion.php');  
$req=$pdo->query("SELECT * FROM mrbs_entry WHERE creat_by=$login");

while ($re = $req->fetch())
{
   echo $re['id'];
   echo $re['create_by'];
   echo $re['name'];
   echo $re['room_id'];
}
	
      
?>

<button type="submit" name="valider" class="btn btn-primary " values="S'authentifier">Facture</button></br>
   <body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>

</html>