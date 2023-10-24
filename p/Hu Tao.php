<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Hu Tao';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 91;"); // Nourriture
   $stmt->execute();
   $food->execute();
   $bddResults = $stmt->fetch(PDO::FETCH_ASSOC);
   $bddFood = $food->fetch(PDO::FETCH_ASSOC);
   include_once '../inc/header.inc.php';
?>
<img src="img/wish/<?php echo $bddResults['name']; ?>.png" alt="background" class="image-background"> <!--Background-->

<main>
   <div class="filter" id="filter">
      <div class="filter-header">
         <div class="whitneyBold">Détails</div>
         <div data-close-button class="close-button">&times;</div>
      </div>
      <div class="filterContent poppinsLight maxHeightStat">
         <h2 class="statT">Statistiques</h2>
         <table class="tbH tabStat"> <!--Tous les stats-->
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td><!--Stat spécial--></td></tr>
            <tr>  <td>1</td>                <td>1211</td>   <td>8</td>   <td>68</td>   <td>50.0%</td>   </tr>
            <tr>  <td>5</td>                <td>1614</td>   <td>11</td>   <td>91</td>   <td>50.0%</td>   </tr>
            <tr>  <td>10</td>               <td>2120</td>   <td>15</td>   <td>119</td>   <td>50.0%</td>   </tr>
            <tr>  <td>15</td>               <td>2630</td>   <td>18</td>   <td>148</td>   <td>50.0%</td>   </tr>
            <tr class="tdd"><td>20</td>     <td>3141</td>   <td>21</td>   <td>177</td>   <td>50.0%</td>   </tr>
            <tr>  <td>20+</td>              <td>4179</td>   <td>29</td>   <td>235</td>   <td>50.0%</td>   </tr>
            <tr>  <td>25</td>               <td>4693</td>   <td>32</td>   <td>264</td>   <td>50.0%</td>   </tr>
            <tr>  <td>30</td>               <td>5210</td>   <td>36</td>   <td>294</td>   <td>50.0%</td>   </tr>
            <tr>  <td>35</td>               <td>5730</td>   <td>39</td>   <td>323</td>   <td>50.0%</td>   </tr>
            <tr class="tdd"><td>40</td>     <td>6253</td>   <td>43</td>   <td>352</td>   <td>50.0%</td>   </tr>
            <tr>  <td>40+</td>              <td>6990</td>   <td>48</td>   <td>394</td>   <td>59.6%</td>   </tr>
            <tr>  <td>45</td>               <td>7514</td>   <td>51</td>   <td>428</td>   <td>59.6%</td>   </tr>
            <tr class="tdd"><td>50</td>     <td>8042</td>   <td>55</td>   <td>453</td>   <td>59.6%</td>   </tr>
            <tr>  <td>50+</td>              <td>9026</td>   <td>62</td>   <td>508</td>   <td>69.2%</td>   </tr>
            <tr>  <td>55</td>               <td>9556</td>   <td>65</td>   <td>538</td>   <td>69.2%</td>   </tr>
            <tr class="tdd"><td>60</td>     <td>10089</td>   <td>69</td>   <td>568</td>   <td>69.2%</td>   </tr>
            <tr>  <td>60+</td>              <td>10826</td>   <td>74</td>   <td>610</td>   <td>69.2%</td>   </tr>
            <tr>  <td>65</td>               <td>11362</td>   <td>78</td>   <td>640</td>   <td>69.2%</td>   </tr>
            <tr class="tdd"><td>70</td>     <td>11899</td>   <td>81</td>   <td>670</td>   <td>69.2%</td>   </tr>
            <tr>  <td>70+</td>              <td>12637</td>   <td>86</td>   <td>712</td>   <td>78.8%</td>   </tr>
            <tr>  <td>75</td>               <td>13178</td>   <td>90</td>   <td>742</td>   <td>78.8%</td>   </tr>
            <tr class="tdd"><td>80</td>     <td>13721</td>   <td>94</td>   <td>773</td>   <td>78.8%</td>   </tr>
            <tr>  <td>80+</td>              <td>14459</td>   <td>99</td>   <td>815</td>   <td>88.4%</td>   </tr>
            <tr>  <td>85</td>               <td>15004</td>   <td>103</td>   <td>845</td>   <td>88.4%</td>   </tr>
            <tr class="tdd"><td>90</td>     <td>15552</td>   <td>106</td>   <td>876</td>   <td>88.4%</td>   </tr>
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
            <p class="titrePerso">Fragrance nivale</p> <!-- Titre -->
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
         </div>
      </div>

      <div class="profile contenu container poppinsLight">
         <div class="flex align statRow">
            <p class="niv poppinsBold tdv">Lv. 90</p>
            <input type="range" max="6" value="6" class="rangeLv pointer">
         </div>

         <table class="tbH"> <!-- Table des statistiques-->
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M3.5 7.654a.978.978 0 01.449-.571c1.51-.85 3.586 2.117 6.544.548 1.927 6.083-8.893 6.247-6.992.023zM7 14c-3.373 0-6.75-2.421-5.134-7.26A18.543 18.543 0 016.57.213.748.748 0 017 0a.751.751 0 01.432.212 18.543 18.543 0 014.705 6.528C13.749 11.579 10.376 14 7 14zm.22-12.19A.639.639 0 007 1.735a.649.649 0 00-.22.075C5.07 3.134 2.7 7.092 2.839 9.21A4.019 4.019 0 007 12.753a4.019 4.019 0 004.162-3.538c.139-2.123-2.231-6.081-3.942-7.405z"/></svg></span>
                     <p>PV de base</p>
                  </td>
                  <td class="tdv">15552</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">106</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">876</td>  <!--Stat-->
               </tr>
               <tr>
               <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M0 14l3.5-7.764-1.527-4.772L7.255 3.5 14 0l-3.5 7.255 1.527 4.772L7.255 10.5 0 14"/></svg></span>  <!--Icon-->
                     <p>DGT CRIT</p>  <!--Stat-->
                  </td>
                  <td class="tdv">88.4%</td>  <!--Stat-->
               </tr>
         </table>

         <div class="details whitneyBold pointer" data-filter-target="#filter">Détails</div>
         
         <div class="whitneyBold nessMat flex">
            <div class="flex align cost">
               <span class="CM">Requis: </span>
               <img src="img/material/Pierre de la fatalité.png" alt="coût">
               <p>180</p>   <!--prix-->
            </div>
         </div>

         <table class="tbH"> <!-- Table des propriétés-->
               <tr>
                  <td class="flex tdImg">Élément</td>               
                  <td><img src='img/icon/<?php echo $bddResults['element']; ?>.png' width='24' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex tdImg">Arme</td>
                  <td><img src='img/icon/polearm.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Papilio Charontis</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Funérarium Wangsheng</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>7/15</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso"></div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/polearm.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Attaque normale : Lance secrète de Wangsheng</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 6 coups de lance.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour charger en ligne droite et infliger des DGT aux ennemis sur la route.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact.</p> <!--Attaque #3-->
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>

                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût">
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A2.png" alt="icon_apt2"> <!--image icon #2-->
                  <p>Chaperon de la renaissance</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Seule la flamme éternelle peut purifier le mal de ce monde.<br>Hu Tao consomme un certain montant de PV pour repousser les ennemis proches, et entre dans l'état Paramita Papilio.<br><br><span class="spanImp">Paramita Papilio</span><br>· L'ATQ de Hu Tao augmente proportionnellement à ses PV max au moment où elle entre dans cet état. Le bonus ainsi conféré ne peut pas dépasser 400 % de son ATQ de base.<br>· Les DGT d'attaque sont convertis en <span class="pyroS">DGT Pyro</span>, et ne peuvent pas être enchantés.<br>· Les attaques chargées infligent l'effet Bourgeon de prune.<br>· Augmente la RÉS à l'interruption de Hu Tao.<br><br><span class="spanImp">Bourgeon de prune</span><br>Les ennemis affectés par Bourgeon de prune subissent des <span class="pyroS">DGT Pyro</span> toutes les 4 s, qui sont considérés comme des DGT de compétence élémentaire.<br>La même cible ne peut être affectée que par un seul Bourgeon de prune à la fois, et la durée de cet effet ne peut être rafraîchie que par Hu Tao.<br><br>L'état <span class="spanImp">Paramita Papilio</span> se termine à la fin de sa durée, lorsque Hu Tao quitte le champ de bataille ou lorsqu'elle est vaincue.<br><br><span class="spanImp">La technique de la lance secrète est basée sur plusieurs principes, dont le premier est : « la lance ouvre les portes de l'au-delà et les papillons forment un pont entre les deux mondes. »</p> <!--Description-->
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>
                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût">
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A3.png" alt="icon_apt3"> <!--image icon #3-->
                  <p>Apaisement divin</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Faisant appel aux âmes ardentes, Hu Tao inflige des DGT Pyro dans une large zone.<br>Hu Tao récupère à chaque ennemi touché (5 ennemis maximum) une quantité de PV proportionnelle à ses PV max.<br>Les DGT infligés et les PV récupérés sont plus importants si les PV de Hu Tao sont inférieurs ou égaux à 50 % lorsque la compétence touche.<br><br><span class="italic">Le Funérarium Wangsheng ne voit pas d'un bon œil les âmes refusant de quitter ce monde. La crémation est pour Hu Tao le meilleur moyen d'avoir l'esprit tranquille – mais plus elle est anxieuse et plus son feu est puissant.</span></p> <!--Description-->
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>
                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût">
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>
            <h2>Passive</h2><br>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A4.png" alt="icon_pas1"> <!--image icon #4-->
                  <p>Chrysalide</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Le taux CRIT de tous les personnages de l'équipe (hormis Hu Tao) augmente de 12 % pendant 8 s lorsque l'état <span class="spanImp">Paramita Papilio</span> conféré par <span class="spanImp">Chaperon de la renaissance</span> prend fin.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Sang bouillant</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Hu Tao obtient un <span class="pyroS">bonus de DGT Pyro</span> de 33 % lorsque ses PV sont inférieurs ou égaux à 50 %.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Plus il y en a, mieux c'est</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>18 % de chances d'obtenir un plat suspect supplémentaire du même type lorsque vous cuisinez un plat parfait.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Bouquet écarlate</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques chargées de Hu Tao ne consomment pas d'endurance tant qu'elle se trouve dans l'état <span class="spanImp">Paramita Papilio</span> conféré par <span class="spanImp">Chaperon de la renaissance</span>.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Sombres auspices</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Bourgeon de prune</span> inflige un bonus de DGT équivalant à 10 % des PV max de Hu Tao lorsqu'elle bénéficie de l'effet.<br><span class="spanImp">Apaisement divin</span> applique de plus l'effet <span class="spanImp">Bourgeon de prune</span> lorsqu'il touche.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Rituel du sang</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Chaperon de la renaissance</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Jardin du repos éternel</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'un ennemi affecté par <span class="spanImp">Bourgeon de prune</span> est vaincu, le taux CRIT de tous les personnages de l'équipe proches (hormis Hu Tao) augmente de 12 % pendant 15 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Encens floral</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Apaisement divin</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. L'envol du papillon</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque les PV de Hu Tao passent sous le seuil des 25 % ou lorsqu'elle subit assez de DGT pour être vaincue :<br>Hu Tao n'est pas vaincue cette fois-ci. Pendant les 10 s qui suivent, ses RÉS élémentaires et physique augmentent de 200 %, son taux CRIT augmente de 100 %, et sa RÉS à l'interruption augmente considérablement.<br>Cet effet se déclenche automatiquement lorsqu'il ne reste qu'1 PV à Hu Tao.<br>Cet effet peut être déclenché une fois toutes les 60 s.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="ascension contenu hidden">
         <div class="ascGrid">
            <div class="ascMatList flex"> <!--Ressources-->
               <a href="p/material.php?id=5" class="ascRsItem center">
                  <div class="c3"><img src="img/material/mora.png" alt="rs"></div>
                  <div>7M</div>
               </a>
               <a href="p/material.php?id=36" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Fleur de soie.png" alt="rs"></div>  <!--Ressource-->
                  <div>168</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=164" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Astuces du voyageur.png" alt="rs"></div>  <!--Ressource-->
                  <div>2</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=166" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Leçons du héros.png" alt="rs"></div>  <!--Ressource-->
                  <div>418</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=174" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat d'agate agnidus.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=175" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment d'agate agnidus.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=176" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau d'agate agnidus.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=177" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre d'agate agnidus.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=215" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Diligence.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=216" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Diligence.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=217" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Diligence.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=318" class="ascRsItem center">
                  <div class="c1"><img src="img/material/Nectar de Fleur mensongère.png" alt="rs"></div>
                  <div>36</div>
               </a>
               <a href="p/material.php?id=319" class="ascRsItem center">
                  <div class="c2"><img src="img/material/Nectar miroitant.png" alt="rs"></div>
                  <div>96</div>
               </a>
               <a href="p/material.php?id=320" class="ascRsItem center">
                  <div class="c3"><img src="img/material/Nectar élémentaire.png" alt="rs"></div>
                  <div>129</div>
               </a>
               <a href="p/material.php?id=388" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Fragment du démon.png" alt="rs"></div>  <!--Ressource-->
                  <div>18</div>
               </a>
               <a href="p/material.php?id=390" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Jade juvénile.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
            </div>
         </div>
      </div>      
      <div class="autre contenu hidden">
         <div class="autreGrid">         
            <div>
               <h2>Carte de visite</h2>
               <div class="other namecardOther">
                  <div>
                     <img src="img/namecard/<?php echo $bddResults['name']; ?>2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Hu Tao - Pacificatrice</div>  <!--Titre-->
                     <div class="nmDesc">La directrice Hu Tao ne fait pas peur du tout. N'est-ce pas ?</div>  <!--Description-->
                  </div>
               </div>
            </div>
            <div>
               <h2>Plat Spécial</h2>
               <div class="other flex justify-center">
                  <?php echo "<a href='p/food.php?id=" . $bddFood['id'] . "' class='objectList-item'>";
                        echo "<div class='objectList-container'>";
                        echo "<img src='img/nourriture/" . $bddFood['name'] . ".png' alt='" . $bddFood['name'] . "' class='objectList-avatar " . 'c' . $bddFood['rarity'] . "'>";
                        echo "<img src='img/icon/" . $bddFood['type'] . ".png' alt='" . $bddFood['type'] . "' class='objectList-element'>";
                        echo "<div class='br-top10'></div>";
                        echo "<div class='objectList-card whitneyBold'><div class='nameObject'><span class='nmSpan'>" . $bddFood['name'] . "</span></div>";
                           echo "<div class='flex starContainer star-" . $bddFood['rarity'] . "'>";
                              for ($i = 0; $i < $bddFood['rarity'];$i++){
                                 echo "<div class='str_20px'><svg viewBox='0 0 576 512' class='objectListItem-star'><path d='M381.2 150.3l143.7 21.2c11.9 1.7 21.9 10.1 25.7 21.6 3.8 11.6.7 24.2-7.9 32.8L438.5 328.1l24.6 146.6c2 12-2.9 24.2-12.9 31.3-9.9 7.1-23 8-33.7 2.3l-128.4-68.5-128.3 68.5c-10.8 5.7-23.9 4.8-33.8-2.3-9.9-7.1-14.9-19.3-12.8-31.3l24.6-146.6L33.58 225.9c-8.61-8.6-11.67-21.2-7.89-32.8 3.77-11.5 13.74-19.9 25.73-21.6L195 150.3l64.4-132.33C264.7 6.954 275.9-.04 288.1-.04c12.3 0 23.5 6.994 28.8 18.01l64.3 132.33z'/></svg></div>";
                              }
                           echo "</div>";
                        echo "</div>";
                     echo "</div>";
                  echo "</a>"; ?>
               </div>
            </div>
            <div class="outfit">
               <h2>Tenue</h2>
               <div class="other otherOutfit"> <!--À garder s'il y a plusieurs tenue-->
                  <div class="iconsP">
                     <img src="img/perso/<?php echo $bddResults['name']; ?>.png" alt="icon_perso" class="c5 pointer iconPerso active"> <!--Icon Personnage-->
                  </div>
                  <div class="poppinsLight">
                     <div class="descTenue">
                     <p><strong>Fragrance durable</strong></p> <!--Titre-->
                     <p>Tenue de Hu Tao. La tenue habituelle de la responsable du Funérarium Wangsheng.</p> <!--Description-->
                     <img src="img/wish/<?php echo $bddResults['name']; ?>.png" alt="wish"> <!--Tenue image-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <style>
      .ascension{ /*Ascension background*/
         background-image: url("img/wish/<?php echo $bddResults['name']; ?>.png");
         background-position: -58rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>