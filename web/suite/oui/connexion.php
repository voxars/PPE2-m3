<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=mrbs","mrbs","mrbs-intra");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>