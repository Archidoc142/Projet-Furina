<?php
require_once 'classe/PDOFactory.php';
$bdd = PDOFactory::getMySQLConnection();
$bddResults = $bdd->query("SELECT * FROM personnage ORDER BY id DESC;");
$results = $bddResults->fetchAll(); // Temporaire
include_once 'inc/header.inc.php';
?>

<main>
   <div class="filter" id="filter">
      <div class="filter-header">
         <div class="whitneyBold">Filtre</div>
         <div data-close-button class="close-button">&times;</div>
      </div>
      <div class="filterContent">
         <div class="filter-body">
            
         </div>
      </div>
   </div>
   <div id="overlay"></div>


   <div class="box-object">
      <h1 class="whitneyBold">Archive / Personnages</h1>

      <div class="flex box-object-tri">
         <div class="ordre">
            <a class="whitneyBold">▲</a>
         </div>
         <div class="flex filtre" data-filter-target="#filter">
            <img src="img/icon/filtre.png" alt="filtre_icon">
            <a class="whitneyBold">Filtre</a>
         </div>
         <div class="searchBar flex">
            <input type="text" placeholder="Search..." name="bar" id="searchBar"  autocomplete="off">
         </div>
      </div>

      <div class="flex objectList">
         <?php
            foreach ($results as $row) {
               echo "<a href='" . $row['name'] . "' class='objectList-item' data-nom=" . $row['name'] . " data-element=" . $row['element'] . " data-rarity=" . $row['rarity'] . " data-arme=" . $row['type_id'] . ">";
                  echo "<div class='objectList-container'>";
                     echo "<img src='img/perso/" . $row['name'] . ".png' alt='" . $row['name'] . "' class='objectList-avatar " . 'c' . $row['rarity'] . "'>";
                     echo "<img src='img/icon/" . $row['element'] . ".png' alt='" . $row['element'] . "' class='objectList-element'>";
                     echo "<div class='br-top10'></div>";
                     echo "<div class='objectList-card whitneyBold " . (strlen($row['name']) > 14 ? 'center-name' : '') . "'><span>" . $row['name'] . "</span>";
                        echo "<div class='flex starContainer star-" . $row['rarity'] . "'>";
                           for ($i = 0; $i < $row['rarity'];$i++){
                              echo "<div class='str_20px'><img src='img/icon/star.png' class='objectListItem-star'></div>";
                           }
                        echo "</div>";
                     echo "</div>";
                  echo "</div>";
               echo "</a>";
            }
         ?>
      </div>
   </div>

<?php include_once 'inc/footer.inc.php';?>