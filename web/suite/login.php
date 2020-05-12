<?php 
   include("top.php");
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("connexion.php");
      $sel=$pdo->prepare("select * from mrbs_users where name=? and password=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["autoriser"]="oui";
         header("location:session.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>


<body onLoad="document.fo.login.focus()">
   <form name="fo" method="post" action="">
   <div class="form-group px-md-5">
      <label for="exampleInputEmail1">Pseudo</label>
      <input type="text" class="form-control" name="login" id="pseudo" >
   </div>
   <div class="form-group px-md-5">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
   </div>
   
   <button type="submit" name="valider" class="btn btn-primary">Submit</button>
   </form>
</body>