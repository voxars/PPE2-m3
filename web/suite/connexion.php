<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=mrbs","mrbs","mrbs-intra");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>