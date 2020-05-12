<?php
    include ("top.php");
    include ("connexion.php");
    session_start();
    if($_SESSION["autoriser"]!="oui"){
       header("location:login.php");
       exit();
    }  

$log=$_SESSION['login'];

    $sel=$pdo->prepare("SELECT * FROM mrbs_entry WHERE create_by=?");
    $sel->execute(array($log));
    while ($donnees = $sel->fetch())
    {
        //On affiche l'id et le nom du client en cours
        echo "</TR>";
        echo "<TH> $donnees[id] </TH>";
        echo "<TH> $donnees[timastamp] </TH>";
        echo "<TH> $donnees[name] </TH>";
        echo "<TH> $donnees[description] </TH>";
        echo "</TR>";
    }
?>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>