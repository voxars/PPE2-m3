<?php
    include ("top.php");
    include ("connexion.php");
    session_start();
    if($_SESSION["autoriser"]!="oui"){
       header("location:login.php");
       exit();
    }  
    

$log=$_SESSION['login'];
$idu=$_SESSION['id'];
$sel=$pdo->prepare("SELECT level FROM mrbs_users WHERE id=?");
   $sel->execute(array($idu));
   $donnees = $sel->fetch();
   $level = $donnees['level'];
   
if($level <= 1)
{
    ?>
    <table class="table">
    <thead>
    <tr>
    <th scope="col"> id </th>
    <th scope="col"> utilisateur </th>
    <th scope="col"> description </th>
    <th scope="col"> date </th>
    <th scope="col"> PDF </th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sel=$pdo->prepare("SELECT * FROM mrbs_entry WHERE create_by=?");
        $sel->execute(array($log));    
        while ($donnees = $sel->fetch())
        {
            //On affiche l'id et le nom du client en cours
            echo "</TR>";
            echo "<TH scope='row'> ". $donnees['id'] ."</TH>";
            echo "<TH> ". $donnees['create_by'] ."</TH>";
            echo "<TH> ". $donnees['description'] ."</TH>";
            echo "<TH>". $donnees['timestamp'] ."</TH>";
            echo "<TH>" ?><input type="submit" name="bouton" onclick=window.location.href='http://localhost/M2L-SysResSalles/PPE2-m3/web/suite/facture.php'; class="btn btn-primary" value="Afficher facture"> <form method=POST action='http://localhost/M2L-SysResSalles/PPE2-m3/web/suite/facture.php'><input type="hidden" name="idr" value="<?php echo "".$donnees['id']."" ?>"></input></form><?php "/TH>";
            echo "</TR>";
        }
    ?>
    </tbody>
    </table>
    <?php
}

else
{
    ?>
    <table class="table">
    <thead>
    <tr>
    <th scope="col"> id </th>
    <th scope="col"> utilisateur </th>
    <th scope="col"> description </th>
    <th scope="col"> date </th>
    <th scope="col"> PDF </th>
    <th scope="col"> Supprimer </th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sel=$pdo->prepare("SELECT * FROM mrbs_entry");
        $sel->execute(array($log));
        while ($donnees = $sel->fetch())
        {
            //On affiche l'id et le nom du client en cours
            echo "</TR>";
            echo "<TH scope='row'> ". $donnees['id'] ."</TH>";
            echo "<TH> ". $donnees['create_by'] ."</TH>";
            echo "<TH> ". $donnees['description'] ."</TH>";
            echo "<TH>". $donnees['timestamp'] ."</TH>";
            echo "<TH>" ?><input type="submit" name="bouton" onclick=window.location.href='http://localhost/M2L-SysResSalles/PPE2-m3/web/suite/facture.php'; class="btn btn-primary" value="Afficher facture"> <form method=POST action='http://localhost/M2L-SysResSalles/PPE2-m3/web/suite/facture.php'><input type="hidden" name="idr" value="<?php echo "".$donnees['id']."" ?>"></input></form> <?php "/TH>";
            echo "<TH>" ?><input type="submit" name="bouton" onclick=window.location.href='http://localhost/M2L-SysResSalles/PPE2-m3/web/suite/facture.php'; class="btn btn-primary" value="Afficher facture"> <?php "/<TH>";
            echo "</TR>";
        }
    ?>
    </tbody>
    </table>
    <?php
}
?>
<form action="session.php" method="POST">
   <input type="submit" name="bouton" class="btn btn-primary" value="Retour acceuil">
</form></br>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
</body>