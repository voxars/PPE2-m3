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
   $sel->execute(array($id));
   $donnees = $sel->fetch();
?>
<table class="table">
<thead>
<tr>
 <th scope="col"> id </th>
 <th scope="col"> utilisateur </th>
 <th scope="col"> description </th>
 <th scope="col"> date </th>
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
        echo "</TR>";
    }
    
?>
</tbody>
</table>
<form action="session.php" method="POST">
   <input type="submit" name="bouton" class="btn btn-primary" value="Retour acceuil">
</form></br>
<body onLoad="document.fo.login.focus()">
      [ <a href="deconnexion.php">Se déconnecter</a> ]
</body>