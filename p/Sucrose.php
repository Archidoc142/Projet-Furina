<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Sucrose';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 68;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Bonus de DGT Anémo<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>775</td> <td>14</td> <td>59</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1031</td> <td>19</td> <td>78</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1351</td> <td>25</td> <td>103</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>1671</td> <td>31</td> <td>127</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>1991</td> <td>37</td> <td>151</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>2570</td> <td>47</td> <td>195</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>2890</td> <td>53</td> <td>220</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>3209</td> <td>59</td> <td>244</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>3529</td> <td>65</td> <td>268</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>3850</td> <td>71</td> <td>293</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>4261</td> <td>78</td> <td>324</td> <td>6.0%</td> </tr>
            <tr> <td>45</td> <td>4581</td> <td>84</td> <td>348</td> <td>6.0%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>4901</td> <td>90</td> <td>373</td> <td>6.0%</td> </tr>
            <tr> <td>50+</td> <td>5450</td> <td>100</td> <td>414</td> <td>12.0%</td> </tr>
            <tr> <td>55</td> <td>5770</td> <td>106</td> <td>439</td> <td>12.0%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6090</td> <td>112</td> <td>463</td> <td>12.0%</td> </tr>
            <tr> <td>60+</td> <td>6501</td> <td>120</td> <td>494</td> <td>12.0%</td> </tr>
            <tr> <td>65</td> <td>6820</td> <td>125</td> <td>519</td> <td>12.0%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>7141</td> <td>131</td> <td>543</td> <td>12.0%</td> </tr>
            <tr><td>70+</td> <td>7552</td> <td>139</td> <td>574</td> <td>18.0%</td> </tr>
            <tr> <td>75</td> <td>7872</td> <td>145</td> <td>599</td> <td>18.0%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>8192</td> <td>151</td> <td>623</td> <td>18.0%</td> </tr>
            <tr><td>80+</td> <td>8604</td> <td>158</td> <td>654</td> <td>24.0%</td> </tr>
            <tr> <td>85</td> <td>8924</td> <td>164</td> <td>679</td> <td>24.0%</td> </tr>
            <tr class="tdd"><td>90</td> <td>9244</td> <td>170</td> <td>703</td> <td>24.0%</td> </tr>
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
            <p class="titrePerso">Alchimiste 100 % naturelle</p> <!-- Titre -->
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
                  <td class="tdv">9244</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">170</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">703</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path fill="#80ffe6" d="M.2 4.905c.764 1.2 1.813 2.475 3.362 2.434 1.025-.067 2.374.224 2.679 1.36.313.864-.825 1.981-1.513 1.123-.108-.186-.04-.3.173-.325 1 .02 1.348-1.12.4-1.514-.813-.1-1.548.527-2.33.707C.792 9.32-.523 6.729.2 4.907zm9.912 2.43c-1.056-.074-2.45.563-2.375 1.785a.973.973 0 001.1.985c.316.012.724-.547.294-.613-1.621 0-1.022-2.1.346-1.4a5.222 5.222 0 002.343.687c1.8-.177 2.572-2.3 1.989-3.859-.871 1.303-1.957 2.597-3.697 2.414zm-2.42-.772a7.516 7.516 0 002.226-.861A3.067 3.067 0 009.286.09a5.143 5.143 0 01-1.594 6.473zm-1.343-.014A5.071 5.071 0 014.734.07a3.075 3.075 0 00-1.122 5.287 7.944 7.944 0 002.7 1.235zm5.342-.09c-1.143.656-2.594.363-3.651 1.217a1.557 1.557 0 00.07 2.768c.234.1.462.206.689.014.223-.167.4-.162.72-.012a9.094 9.094 0 00-2.512 3.482 9.217 9.217 0 00-2.523-3.478.605.605 0 01.726 0c.6.347 1.443-.4 1.555-1 .247-1.179-.936-2.106-1.982-2.33-.512-.12-1.038-.182-1.55-.3C.866 6.337.51 3.94 1.669 2.105c.668 4.9 4 3.555 5.332 6.26 1.32-2.67 4.678-1.382 5.345-6.26.81 1.415 1.054 3.522-.655 4.354zM7.57 11.65L7 11.271l-.572.385.58.972zM7 10.137a1.592 1.592 0 01-1 .911.925.925 0 00.99-.272c.427.327.795.417 1.047.255A1.561 1.561 0 017 10.137z"/></svg></span>  <!--Icon-->
                     <p>Bonus de DGT Anémo</p>  <!--Stat-->
                  </td>
                  <td class="tdv">24.0%</td>  <!--Stat-->
               </tr>
         </table>

         <div class="details whitneyBold pointer" data-filter-target="#filter">Détails</div>
         
         <div class="whitneyBold nessMat flex">
            <div class="flex align cost">
               <span class="CM">Requis: </span>
               <img src="img/material/Pierre de la fatalité.png" alt="coût">
               <p>10</p>   <!--prix-->
            </div>
         </div>

         <table class="tbH"> <!-- Table des propriétés-->
               <tr>
                  <td class="flex tdImg">Élément</td>               
                  <td><img src='img/icon/<?php echo $bddResults['element']; ?>.png' width='24' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex tdImg">Arme</td>
                  <td><img src='img/icon/catalyst.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Ampulla</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Ordre de Favonius</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>11/26</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une alchimiste très curieuse du monde qui l'entoure. Elle se spécialise dans la bio-alchimie.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Esprit du vent</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 attaques de vent qui infligent des <span class="anemoS">DGT Anémo</span>.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour infliger des <span class="anemoS">DGT Anémo de zone</span> après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant ses pouvoirs Anémo, infligeant des DGT aux ennemis en chemin et des <span class="anemoS">DGT Anémo de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Esprit du vent : Sujet 6308</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Sucrose invoque un Esprit du vent de taille réduite, qui attire les ennemis et les objets proches à lui, projetant les ennemis dans les airs et leur infligeant des <span class="anemoS">DGT Anémo</span>.<br><br><span class="italic">C'est un peu embarrassant, mais il faut bien reconnaître que malgré leur courte durée de vie, les entités élémentaires créées via ce procédé sont particulièrement utiles pour l'aventure. Comme quoi, même les expériences ratées peuvent servir.</span></p> <!--Description-->
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
                  <p>Esprit du vent : Isomorphe 75 Type II</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Sucrose jette une concoction instable qui libère un Esprit du vent de grande taille.<br>L'Esprit attire les ennemis et les objets proches à lui, projetant les ennemis dans les airs et leur infligeant des <span class="anemoS">DGT Anémo</span>.<br><br><span class="spanImp">Absorption élémentaire</span><br>L'Esprit du vent absorbe les éléments <span class="hydroS">Hydro</span>, <span class="pyroS">Pyro</span>, <span class="cryoS">Cryo</span> et <span class="electroS">Cryo</span> avec lesquels il entre en contact ; ceux-ci lui confèrent leurs attributs, et infligent un bonus de DGT de l'élément correspondant.<br>Une seule réaction d'absorption élémentaire peut avoir lieu par utilisation.<br><br><span class="italic">Sucrose aime à donner des noms à ses Hypostases Anémo instables ; leur lignée est encore plus longue que celle du Baron Lapinou 893e du nom.</span></p> <!--Description-->
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
                  <p>Permutation de catalyste</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Tous les personnages de l'équipe du type élémentaire concerné (hormis Sucrose) obtiennent un bonus de 50 pts de maîtrise élémentaire pendant 8 s lorsque Sucrose déclenche une réaction de Dispersion.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Mollis Favonius</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque <span class="spanImp">Esprit du vent : Sujet 6308</span> ou <span class="spanImp">Esprit du vent : Isomorphe 75 Type II</span> touche un ennemi, tous les personnages de l'équipe (hormis Sucrose) bénéficient pendant 8 s d'un bonus de maîtrise élémentaire équivalant à 20 % de la maîtrise élémentaire de Sucrose.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Fragile découverte</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>10 % de chances d'obtenir le double de produits lors de la synthèse de matériaux d'amélioration de personnage ou d'arme.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Champ du néant</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère une utilisation supplémentaire de <span class="spanImp"></span>Esprit du vent : Sujet 6308.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Bett : Forme éthérée</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Prolonge la durée d'<span class="spanImp">Esprit du vent : Isomorphe 75 Type II</span> de 2 s.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Zéro défaut</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Esprit du vent : Sujet 6308</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Alchémania</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Sucrose réduit le TdR d'<span class="spanImp">Esprit du vent : Sujet 6308</span> de 1 à 7 s tous les 7 coups d'attaque normale ou chargée qu'elle inflige à un ennemi.<br>Un coup peut être compté toutes les 0,1 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Flasque standard</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Esprit du vent : Isomorphe 75 Type II</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Théorie de l'entropie</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>En cas d'absorption élémentaire, <span class="spanImp">Esprit du vent : Isomorphe 75 Type II</span> confère à tous les personnages de l'équipe un bonus de DGT élémentaires de 20 % pour l'élément absorbé tant que la compétence est active.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=31" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Chrysanthème à aubes.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=190" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=191" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=192" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=193" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=203" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Liberté.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=204" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Liberté.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=205" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Liberté.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=318" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Nectar de Fleur mensongère.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=319" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Nectar miroitant.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=320" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Nectar élémentaire.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=375" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Graine d'ouragan.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=382" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Esprit de Borée.png" alt="rs"></div>  <!--Ressource-->
                  <div>18</div>
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
                     <img src="img/namecard/Sucrose - Bio-alchimie2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Sucrose - Bio-alchimie</div>  <!--Titre-->
                     <div class="nmDesc">Si vous examinez avec soin une Hypostase Anémo avant qu'elle ne disparaisse, vous découvrirez que tout cela lui donne un air plutôt perplexe.</div>  <!--Description-->
                  </div>
               </div>
            </div>
            <div>
               <h2>Plat Spécial</h2>
               <div class="other flex justify-center">
                  <?php echo "<a href='p/food.php?id=" . $bddFood['id'] . "' class='objectList-item'>";
                        echo "<div class='objectList-container'>";
                        echo "<img src='img/nourriture/" . rawurlencode($bddFood['name']) . ".png' alt='" . $bddFood['name'] . "' class='objectList-avatar " . 'c' . $bddFood['rarity'] . "'>";
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
                     <p><strong>Vent naissant</strong></p> <!--Titre-->
                     <p>Tenue de Sucrose. Un uniforme d'alchimiste de l'Ordre de Favonius fait spécialement pour Sucrose.</p> <!--Description-->
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
         background-position: -56rem -8rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>