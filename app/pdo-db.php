<?php

/*
Use https://github.com/becodeorg/LIE-Jepsen-1.9/tree/master/02-the-hill/docker-compose-postgres
docker-compose up
http://php.net/manual/fr/pdostatement.fetch.php
*/

try
   {
       $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=becode', 'becode', 'becode');
   }
 catch (PDOException $e)
 {
     echo $e->getMessage();
 }

 function readData($dbh) {
   echo "olé";
   /*$sql = 'SELECT id, name, profile FROM about';
   try {
     $stmt = $dbh->prepare($sql);
     $stmt->execute();
     //Lie par les numéros de colonnes
     $stmt->bindColumn(1, $id);
     $stmt->bindColumn(2, $name);
     //Lie par les noms de colonnes
     $stmt->bindColumn('profile', $profile);

     while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
       $data = $id . "\t" . $name . "\t" . $profile . "\n";
       echo $data;
     }
   }
   catch (PDOException $e) {
     print $e->getMessage();
   }*/
 }
//readData($dbh);
