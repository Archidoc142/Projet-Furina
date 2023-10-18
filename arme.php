<?php
require_once 'classe/PDOFactory.php';
$bdd = PDOFactory::getMySQLConnection();
$bddResults = $bdd->query("SELECT * FROM arme;");
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
            <div class="filter-element">
               <div class="flex whitneyBold">
                  <h3>Rareté</h3>
                  <div class="filter-button active button-all"><p>All</p></div>
               </div>
               <div class="flex poppinsLight filter-rarity-con">
                  <p class="filter-button active" data-val='1'>1★</p>
                  <p class="filter-button active" data-val='2'>2★</p>
                  <p class="filter-button active" data-val='3'>3★</p>
                  <p class="filter-button active" data-val='4'>4★</p>
                  <p class="filter-button active" data-val='5'>5★</p>               
               </div>
            </div>
            <div class="filter-element">
               <div class="flex whitneyBold">
                  <h3>Type</h3>
                  <div class="filter-button active button-all"><p>All</p></div>
               </div>
               <div class="flex filter-arme-con">
                  <img class="filter-button active" src="img/icon/sword.png" alt="sword_icon" data-val='0'>
                  <img class="filter-button active" src="img/icon/claymore.png" alt="claymore_icon" data-val='1'>
                  <img class="filter-button active" src="img/icon/polearm.png" alt="polearm_icon" data-val='2'>
                  <img class="filter-button active" src="img/icon/bow.png" alt="bow_icon" data-val='3'>
                  <img class="filter-button active" src="img/icon/catalyst.png" alt="catalyst_icon" data-val='4'>
               </div>
            </div>
            <div class="filter-element hidden">
               <div class="flex whitneyBold">
                  <h3>Élément</h3>
                  <div class="filter-button active button-all"><p>All</p></div>
               </div>
               <div class="flex filter-element-con">
                  <img class="filter-button active" src="img/icon/Anémo.png" alt="anemo_icon" data-val='Anémo'>
                  <img class="filter-button active" src="img/icon/Géo.png" alt="geo_icon" data-val='Géo'>
                  <img class="filter-button active" src="img/icon/Électro.png" alt="electro_icon" data-val='Électro'>
                  <img class="filter-button active" src="img/icon/Dendro.png" alt="dendro_icon" data-val='Dendro'>
                  <img class="filter-button active" src="img/icon/Hydro.png" alt="hydro_icon" data-val='Hydro'>
                  <img class="filter-button active" src="img/icon/Pyro.png" alt="pyro_icon" data-val='Pyro'>
                  <img class="filter-button active" src="img/icon/Cryo.png" alt="cryo_icon" data-val='Cryo'>
               </div>
            </div>
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
            $j = 1;
            foreach ($bddResults as $row) {
               echo "<a href='p/arme/" . rawurlencode($row['name']) . ".php' class='objectList-item' data-nom='" . $row['name'] . "' data-rarity='" . $row['rarity'] . "' data-arme='" . $row['type_id'] . "' style='order:" . $j . "'>";
               echo "<div class='objectList-container'>";
                     echo "<img src='img/arme/" . rawurlencode($row['name']) . ".png' alt='" . $row['name'] . "' class='objectList-avatar " . 'c' . $row['rarity'] . "'>";
                     echo "<div class='br-top10'></div>";
                     echo "<div class='objectList-card whitneyBold'><div class='nameObject'><span>" . $row['name'] . "</span></div>";
                        echo "<div class='flex starContainer star-" . $row['rarity'] . "'>";
                           for ($i = 0; $i < $row['rarity'];$i++){
                              echo "<div class='str_20px'><img src='img/icon/star.png' class='objectListItem-star'></div>";
                           }
                        echo "</div>";
                     echo "</div>";
                  echo "</div>";
               echo "</a>";
               $j++;
            }
         ?>
      </div>
   </div>

<?php include_once 'inc/footer.inc.php';?>