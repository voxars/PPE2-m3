<?php
include ("top.php");

$log=$_SESSION['login'];

$sel=$pdo->prepare("SELECT * FROM mrbs_entry WHERE name=?");
   $sel->execute(array($log));
   $donnees = $sel->fetch();
?>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>