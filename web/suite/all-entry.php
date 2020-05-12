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
        echo $donnees['id'];
        echo $donnees[timestamp];
        echo $donnees[name];
        echo $donnees[description];
        
    }
?>
<form action="session.php" method="POST">
   <input type="submit" name="bouton" class="btn btn-primary" value="Retour acceuil">
</form></br>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
   </body>