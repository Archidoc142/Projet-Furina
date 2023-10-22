<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Furina';");
   $stmt->execute();
   $bddResults = $stmt->fetch(PDO::FETCH_ASSOC);
   include_once '../inc/header.inc.php';
?>
<img src="img/wish/Furina.png" alt="background" class="image-background"> <!--Background-->

<main>
   <div class="filter" id="filter">
      <div class="filter-header">
         <div class="whitneyBold">Détails</div>
         <div data-close-button class="close-button">&times;</div>
      </div>
      <div class="filterContent poppinsLight maxHeightStat">
         <h2 class="statT">Statistiques</h2>
         <table class="tbH tabStat"> <!--Tous les stats-->
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Taux CRIT</td></tr>
            <tr><td>1</td>   <td>1192</td>   <td>19</td>   <td>54</td>   <td>5.0%</td></tr>
            <tr><td>5</td>   <td>1588</td>   <td>25</td>   <td>72</td>   <td>5.0%</td></tr>
            <tr><td>10</td>   <td>2087</td>   <td>33</td>   <td>95</td>   <td>5.0%</td></tr>
            <tr><td>15</td>   <td>2588</td>   <td>41</td>   <td>118</td>   <td>5.0%</td></tr>
            <tr><td>20</td>   <td>3091</td>   <td>49</td>   <td>140</td>   <td>5.0%</td></tr>
            <tr><td>20+</td>   <td>4113</td>   <td>66</td>   <td>187</td>   <td>5.0%</td></tr>
            <tr><td>25</td>   <td>4619</td>   <td>74</td>   <td>210</td>   <td>5.0%</td></tr>
            <tr><td>30</td>   <td>5128</td>   <td>82</td>   <td>233</td>   <td>5.0%</td></tr>
            <tr><td>35</td>   <td>5639</td>   <td>90</td>   <td>256</td>   <td>5.0%</td></tr>
            <tr><td>40</td>   <td>6154</td>   <td>98</td>   <td>280</td>   <td>5.0%</td></tr>
            <tr><td>40+</td>   <td>6880</td>   <td>110</td>   <td>313</td>   <td>9.8%</td></tr>
            <tr><td>45</td>   <td>7396</td>   <td>118</td>   <td>336</td>   <td>9.8%</td></tr>
            <tr><td>50</td>   <td>7916</td>   <td>126</td>   <td>360</td>   <td>9.8%</td></tr>
            <tr><td>50+</td>   <td>8884</td>   <td>142</td>   <td>404</td>   <td>14.6%</td></tr>
            <tr><td>55</td>   <td>9406</td>   <td>150</td>   <td>427</td>   <td>14.6%</td></tr>
            <tr><td>60</td>   <td>9930</td>   <td>158</td>   <td>451</td>   <td>14.6%</td></tr>
            <tr><td>60+</td>   <td>10656</td>   <td>170</td>   <td>484</td>   <td>14.6%</td></tr>
            <tr><td>65</td>   <td>11183</td>   <td>178</td>   <td>508</td>   <td>14.6%</td></tr>
            <tr><td>70</td>   <td>11712</td>   <td>187</td>   <td>532</td>   <td>14.6%</td></tr>
            <tr><td>70+</td>   <td>12438</td>   <td>198</td>   <td>565</td>   <td>19.4%</td></tr>
            <tr><td>75</td>   <td>12970</td>   <td>207</td>   <td>589</td>   <td>19.4%</td></tr>
            <tr><td>80</td>   <td>13505</td>   <td>215</td>   <td>614</td>   <td>19.4%</td></tr>
            <tr><td>80+</td>   <td>14231</td>   <td>227</td>   <td>647</td>   <td>24.2%</td></tr>
            <tr><td>85</td>   <td>14768</td>   <td>235</td>   <td>671</td>   <td>24.2%</td></tr>
            <tr><td>90</td>   <td>15307</td>   <td>244</td>   <td>696</td>   <td>24.2%</td></tr>
         </table>
      </div>
   </div>
   <div id="overlay"></div>

   <div class="persoInfo whitneyBold">
      <div class="categorie">
         <div class="persoPresentation container">
            <div class="flex namePerso">
               <img src='img/icon/<?php echo $bddResults['element']; ?>.png' width='32' alt='element'>
               <p><?php echo $bddResults['name']; ?></p>
            </div>
            <p class="titrePerso">Solo infini de solitude</p> <!-- Titre -->
            <?php
               echo "<div class='flex'>";
               for ($i = 0; $i < $bddResults['rarity'];$i++){
                  echo "<svg viewBox='0 0 576 512' class='persoRarity'><path d='M381.2 150.3l143.7 21.2c11.9 1.7 21.9 10.1 25.7 21.6 3.8 11.6.7 24.2-7.9 32.8L438.5 328.1l24.6 146.6c2 12-2.9 24.2-12.9 31.3-9.9 7.1-23 8-33.7 2.3l-128.4-68.5-128.3 68.5c-10.8 5.7-23.9 4.8-33.8-2.3-9.9-7.1-14.9-19.3-12.8-31.3l24.6-146.6L33.58 225.9c-8.61-8.6-11.67-21.2-7.89-32.8 3.77-11.5 13.74-19.9 25.73-21.6L195 150.3l64.4-132.33C264.7 6.954 275.9-.04 288.1-.04c12.3 0 23.5 6.994 28.8 18.01l64.3 132.33z'/></svg>";
               }
               echo "</div>";
            ?>
         </div>
         <div class="container whitneyBold onglet">
            <div class="cat pointer active"><p>Profile</p></div>
            <div class="cat pointer"><p>Talent</p></div>
            <div class="cat pointer"><p>Constellation</p></div>
            <div class="cat pointer"><p>Ascension</p></div>
            <div class="cat pointer"><p>Autres</p></div>
            <div class="cat pointer"><p>Histoire</p></div>
         </div>
      </div>

      <div class="profile contenu container poppinsLight">
         <div class="flex align statRow">
            <p class="niv poppinsBold">Lv. 90</p>
            <input type="range" max="6" value="6" class="rangeLv pointer">
         </div>

         <table class="tbH"> <!-- Table des statistiques-->
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M3.5 7.654a.978.978 0 01.449-.571c1.51-.85 3.586 2.117 6.544.548 1.927 6.083-8.893 6.247-6.992.023zM7 14c-3.373 0-6.75-2.421-5.134-7.26A18.543 18.543 0 016.57.213.748.748 0 017 0a.751.751 0 01.432.212 18.543 18.543 0 014.705 6.528C13.749 11.579 10.376 14 7 14zm.22-12.19A.639.639 0 007 1.735a.649.649 0 00-.22.075C5.07 3.134 2.7 7.092 2.839 9.21A4.019 4.019 0 007 12.753a4.019 4.019 0 004.162-3.538c.139-2.123-2.231-6.081-3.942-7.405z"/></svg></span>
                     <p>PV de base</p>
                  </td>
                  <td>15307</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td>244</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td>696</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M14 0L7.256 3.5 1.973 1.465 3.5 6.236 0 14l7.256-3.5 4.771 1.527L10.5 7.256zm-3.24 3.24L8.88 7.136 9.701 9.7l-2.564-.82-3.898 1.88 1.88-4.17-.82-2.565L7.137 5.12z"/></svg></span>
                     <p>Taux CRIT</p>
                  </td>
                  <td>24.2%</td>
               </tr>
         </table>

         <div class="details whitneyBold pointer" data-filter-target="#filter">Détails</div>
         
         <div class="whitneyBold nessMat flex">
            <div class="flex align cost">
               <span class="CM">Requis: </span>
               <img src="img/material/Pierre de la fatalité.png" alt="coût"> <!--Prix-->
               <p>180</p>
            </div>
         </div>

         <table class="tbH"> <!-- Table des propriétés-->
               <tr>
                  <td class="flex tdImg">Élément</td>               
                  <td><img src='img/icon/<?php echo $bddResults['element']; ?>.png' width='24' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex tdImg">Arme</td>
                  <td><img src='img/icon/sword.png' width='26' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Animula Choragi</td>
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cour de Fontaine</td>
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>10/13</td>
               </tr>
         </table>

         <div class="descPerso">Le point central absolu de la scène du jugement, jusqu'aux applaudissements finaux.</div>
      </div>

      <div class="talent contenu hidden">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur cum sint esse quaerat nulla expedita accusantium laudantium id exercitationem dicta molestias quae nemo pariatur eius deserunt odit, quis impedit.</p>
      </div>

      <div class="constellation contenu hidden">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur cum sint esse quaerat nulla expedita accusantium laudantium id exercitationem dicta molestias quae nemo pariatur eius deserunt odit, quis impedit.</p>
      </div>

      <div class="ascension contenu hidden">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur cum sint esse quaerat nulla expedita accusantium laudantium id exercitationem dicta molestias quae nemo pariatur eius deserunt odit, quis impedit.</p>
      </div>

      <div class="autre contenu hidden">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur cum sint esse quaerat nulla expedita accusantium laudantium id exercitationem dicta molestias quae nemo pariatur eius deserunt odit, quis impedit.</p>
      </div>

      <div class="histoire contenu hidden">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur cum sint esse quaerat nulla expedita accusantium laudantium id exercitationem dicta molestias quae nemo pariatur eius deserunt odit, quis impedit.</p>
      </div>
   </div>
   
<style> 
   .image-background {    
    position: fixed;
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    z-index: -1;
}
</style>

<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>