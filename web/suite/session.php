<?php
   include("top.php");
   include("connexion.php");
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }   
   $log=$_SESSION['login'];
   $pass=$_SESSION['pass'];
   $sel=$pdo->prepare("SELECT id FROM mrbs_users WHERE name=? AND password=?");
   $sel->execute(array($log,$pass));
   $donnees = $sel->fetch();
   $_SESSION['id']=$donnees['id'];
   $idu=$_SESSION['id'];

   
?>
<form action="all-entry.php" method="POST">
<center><input type="submit" name="bouton" class="btn btn-primary" value="Cliquez ici pour visualiser l'ensemble des factures"></center>
</form></br>



   <body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Déconnexion</a> ]
   </body>

</html>