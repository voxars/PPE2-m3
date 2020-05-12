<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=mrbs","mrbs","mrbs-user");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>