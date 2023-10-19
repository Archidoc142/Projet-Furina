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
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="overlay"></div>


   <div class="box-object">
      <h1 class="whitneyBold">Archive / Armes</h1>

      <div class="flex box-object-tri">
         <div class="ordre">
            <a class="whitneyBold">▲</a>
         </div>
         <div class="flex filtre" data-filter-target="#filter">
            <svg viewBox="0 0 512 512">
               <path d="M3.853 54.87A39.987 39.987 0 0140 32h432c15.5 0 29.5 8.9 36.1 22.87 6.7 13.97 4.6 30.5-6 42.46L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6-10.8 5.4-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6v-79.1L9.042 97.33a40 40 0 01-5.188-42.46h-.001z"/>
            </svg>
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
                              echo "<div class='str_20px'><svg viewBox='0 0 576 512' class='objectListItem-star'><path d='M381.2 150.3l143.7 21.2c11.9 1.7 21.9 10.1 25.7 21.6 3.8 11.6.7 24.2-7.9 32.8L438.5 328.1l24.6 146.6c2 12-2.9 24.2-12.9 31.3-9.9 7.1-23 8-33.7 2.3l-128.4-68.5-128.3 68.5c-10.8 5.7-23.9 4.8-33.8-2.3-9.9-7.1-14.9-19.3-12.8-31.3l24.6-146.6L33.58 225.9c-8.61-8.6-11.67-21.2-7.89-32.8 3.77-11.5 13.74-19.9 25.73-21.6L195 150.3l64.4-132.33C264.7 6.954 275.9-.04 288.1-.04c12.3 0 23.5 6.994 28.8 18.01l64.3 132.33z'/></svg></div>";
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