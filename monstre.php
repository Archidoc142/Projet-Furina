<?php
require_once 'classe/PDOFactory.php';
$bdd = PDOFactory::getMySQLConnection();
$bddResults = $bdd->query("SELECT * FROM monstre ORDER BY type, id;");
include_once 'inc/header.inc.php';
?>

<main>
   <div class="box-object">
      <h1 class="whitneyBold">Archive / Monstres</h1>

      <div class="flex box-object-tri">
         <div class="ordre">
            <a class="whitneyBold">▲</a>
         </div>
         <div class="typeNPC">
            <select name="selectionType" id="selectionType" class="whitneyBold" onchange="selectObject()">
               <option value="0">Tout</option>
               <option value="1">Entités élémentaires</option>
               <option value="2">Brutocollinus</option>
               <option value="3">Ordre de l'Abîme</option>
               <option value="4">Automates</option>
               <option value="5">Humains</option>
               <option value="6">Bêtes mystiques</option>
               <option value="7">Boss</option>
            </select>
         </div>
         <div class="searchBar flex">
            <input type="text" placeholder="Search..." name="bar" id="searchBar"  autocomplete="off">
         </div>
      </div>

      <div class="flex objectList">
         <?php
            $j = 1;
            foreach ($bddResults as $row) {
               echo "<a href='p/monstre/" . rawurlencode($row['name']) . ".php' class='objectList-item' data-nom='" . $row['name'] . "' data-type='" . $row['type'] . "' style='order:" . $j . "'>";
               echo "<div class='objectList-container'>";
                     echo "<img src='img/npc/" . rawurlencode($row['name']) . ".png' alt='" . $row['name'] . "' class='objectList-avatar c1'>";
                     echo "<div class='br-top10'></div>";
                     echo "<div class='objectList-card whitneyBold'><div class='nameObject'><span>" . $row['name'] . "</span></div>";
                     echo "</div>";
                  echo "</div>";
               echo "</a>";
               $j++;
            }
         ?>
      </div>
   </div>

<?php include_once 'inc/footer.inc.php';?>