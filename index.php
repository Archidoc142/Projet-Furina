<?php
   require_once 'classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();

   $bddResults = $bdd->query("SELECT * FROM personnage ORDER BY id DESC");

   foreach ($bddResults as $row) {
      echo $row['name'];
      echo "<br>";
   }

?>