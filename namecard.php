<?php
require_once 'classe/PDOFactory.php';
$bdd = PDOFactory::getMySQLConnection();
$bddResults = $bdd->query("SELECT id, name, type FROM namecard ORDER BY id;");
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
               <option value="1">Autre</option>
               <option value="2">Passe de combat</option>
               <option value="3">Amitié</option>
               <option value="4">Succès</option>
               <option value="5">Réputation</option>
               <option value="6">Évènement</option>
            </select>
         </div>
         <div class="searchBar flex">
            <input type="text" placeholder="Search..." name="bar" id="searchBar"  autocomplete="off" data-sheetId="monstre">
         </div>
      </div>

      <div class="flex objectList">
         <?php
            $j = 1;
            foreach ($bddResults as $row) {
               echo "<a href='p/namecard.php?id=" . $row['id'] . "' class='objectList-item' data-nom='" . $row['name'] . "' data-type='" . $row['type'] . "' style='order:" . $j . "'>";
               echo "<div class='objectList-container'>";
                     echo "<img src='img/namecard/" . rawurlencode($row['name']) . ".png' alt='" . $row['name'] . "' class='objectList-avatar c4'>";
                     echo "<div class='br-top10'></div>";
                     echo "<div class='objectList-card whitneyBold'><div class='nameObject'><span class='nmSpan'>" . $row['name'] . "</span></div>";
                     echo "<div class='flex starContainer star-4'>";
                           for ($i = 0; $i < 4;$i++){
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