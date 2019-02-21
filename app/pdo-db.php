<?php

/*
Use https://github.com/becodeorg/LIE-Jepsen-1.9/tree/master/02-the-hill/docker-compose-postgres
docker-compose up
http://php.net/manual/fr/pdostatement.fetch.php
*/

try
   {
       $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=becode', 'becode', 'becode');
   }
 catch (PDOException $e)
 {
     echo $e->getMessage();
 }

 function readData($pdo) {
   $sql = 'SELECT `id`, `name`, profile FROM `about`';
   try {
     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     //by column number
     $stmt->bindColumn(1, $id);
     $stmt->bindColumn(2, $name);
     //Lby column name
     $stmt->bindColumn('profile', $profile);

     while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
       $data = $id . "\t" . $name . "\t" . $profile . "\n";
       echo $data;
     }
   }
   catch (PDOException $e) {
     print $e->getMessage();
   }
 }
//readData($pdo);
