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
        echo "<TH> <br> $donnees[id] </TH>";
        echo "<TH> <br> $donnees[timestamp] </TH>";
        echo "<TH> <br> $donnees[name] </TH>";
        echo "<TH> <br> $donnees[description] </TH>";
        echo "<br></TR>";
    }
?>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>