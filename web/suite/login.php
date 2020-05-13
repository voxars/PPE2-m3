<?php 
   include("top.php");
   session_start();
   $_SESSION['login']=@$login=$_POST["login"];
   
   $_SESSION['pass']=@$pass=md5($_POST["pass"]);
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
      else{
         $erreur="Mauvais login ou mot de passe!";
      }
   }
?>

<body onLoad="document.fo.login.focus()">
      <div class="container login-container">
         <div class="col-md-6 login-form-2">
            <h3>Connexion au module de facturation:</h3>
            <form name="fo" method="post" action="">
               <div class="form-group">
                     <input type="text" class="form-control" placeholder="Entrez votre pseudo" value="" name="login" id="pseudo" />
               </div>
               <div class="form-group">
                     <input type="password" class="form-control" placeholder="Entrez votre mot de passe" value="" name="pass" id="exampleInputPassword1"/>
               </div>
               <div class="form-group">
                     <input type="submit" class="btnSubmit" value="Cliquez ici pour vous connecter" name="valider" />
               </div>
            </form>
         </div>
      </div>
</body>