<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Venti';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 47;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Recharge d'énergie<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>820</td> <td>20</td> <td>52</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1093</td> <td>27</td> <td>69</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1436</td> <td>36</td> <td>91</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>1781</td> <td>44</td> <td>113</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2127</td> <td>53</td> <td>135</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>2830</td> <td>71</td> <td>180</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>3178</td> <td>79</td> <td>202</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>3528</td> <td>88</td> <td>224</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>3880</td> <td>97</td> <td>246</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4234</td> <td>106</td> <td>269</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>4734</td> <td>118</td> <td>301</td> <td>8.0%</td> </tr>
            <tr> <td>45</td> <td>5089</td> <td>127</td> <td>323</td> <td>8.0%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5446</td> <td>136</td> <td>346</td> <td>8.0%</td> </tr>
            <tr> <td>50+</td> <td>6112</td> <td>153</td> <td>388</td> <td>16.0%</td> </tr>
            <tr> <td>55</td> <td>6471</td> <td>162</td> <td>411</td> <td>16.0%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6832</td> <td>171</td> <td>434</td> <td>16.0%</td> </tr>
            <tr> <td>60+</td> <td>7331</td> <td>183</td> <td>465</td> <td>16.0%</td> </tr>
            <tr> <td>65</td> <td>7694</td> <td>192</td> <td>488</td> <td>16.0%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>8058</td> <td>201</td> <td>512</td> <td>16.0%</td> </tr>
            <tr><td>70+</td> <td>8557</td> <td>214</td> <td>543</td> <td>24.0%</td> </tr>
            <tr> <td>75</td> <td>8924</td> <td>223</td> <td>567</td> <td>24.0%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>9292</td> <td>232</td> <td>590</td> <td>24.0%</td> </tr>
            <tr><td>80+</td> <td>9791</td> <td>245</td> <td>622</td> <td>32.0%</td> </tr>
            <tr> <td>85</td> <td>10160</td> <td>254</td> <td>645</td> <td>32.0%</td> </tr>
            <tr class="tdd"><td>90</td> <td>10531</td> <td>263</td> <td>669</td> <td>32.0%</td> </tr>
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
            <p class="titrePerso">Barde itinérant</p> <!-- Titre -->
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
                  <td class="tdv">10531</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">263</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">669</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M1.217 7c0 3.516 2.875 6.391 6.391 6.391S14 10.517 14 7 11.124.607 7.608.607v2.345a4.03 4.03 0 014.047 4.047 4.03 4.03 0 01-4.047 4.046 4.03 4.03 0 01-4.046-4.046z"/><path d="M5.756 8.528L0 9.689l1.872-5.565z"/></svg></span>  <!--Icon-->
                     <p>Recharge d'énergie</p>  <!--Stat-->
                  </td>
                  <td class="tdv">32.0%</td>  <!--Stat-->
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
                  <td><img src='img/icon/bow.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Carmen Dei</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cité de Mondstadt</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>6/16</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Un des nombreux bardes de Mondstadt, qui aime à se promener dans tous les recoins de la cité.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Archerie divine</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 6 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un <span class="spanImp">tir visé</span> plus précis infligeant davantage de DGT.<br>Lors de la visée, la flèche se charge en élément Anémo, infligeant de considérables DGT Anémo quand elle est complètement chargée.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l'impact.</p> <!--Attaque #3-->
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
                  <p>Sonnet des Vents célestes</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Le vent porteur de chants et de mélodies vient faire voler les êtres foulant cette terre.<br><br><span class="spanImp">Appui simple</span><br>Venti invoque une bourrasque sur la position de l'ennemi, infligeant des DGT Anémo de zone et projette les ennemis en l'air.<br><br><span class="spanImp">Appui long</span><br>Venti invoque une bourrasque plus puissante sur sa position, infligeant des DGT Anémo de zone et projette les ennemis proches en l'air.<br>L'appui long permet à Venti de voler dans les airs.<br><br>Les ennemis projetés en l'air retombent lentement au sol.<br><br><span class="italic">Aux temps anciens où dieux et hommes se partageaient la terre, nombreux furent les chants qui atteignirent les cieux. Ce sonnet possède une mélodie oubliée depuis longtemps.</span></p> <!--Description-->
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
                  <p>Ode au Vent</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Venti tire une flèche porteuse de la puissance de mille vents et de l'Œil de la tempête. Ce dernier attire les ennemis en son centre, et inflige des DGT Anémo continus.<br><br><span class="spanImp">Absorption élémentaire</span><br>L'Œil de la tempête absorbe les éléments <span class="hydroS">Hydro</span>, <span class="pyroS">Pyro</span>, <span class="cryoS">Cryo</span> et <span class="electroS">Électro</span> avec lesquels il entre en contact, ceux-ci lui conférant leurs attributs et infligeant un bonus de DGT de l'élément correspondant.<br>Une seule réaction d'absorption élémentaire peut avoir lieu par utilisation.<br><br><span class="italic">Nombre de poèmes chantant la gloire de l'Archon Anémo ont été perdus. Celui-ci raconte sa puissance, et la puissance des vents.</span></p> <!--Description-->
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
                  <p>Embrasse des vents</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'appui long de <span class="spanImp">Sonnet des Vents célestes</span> génère une bourrasque ascendante qui dure 20 s.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Œil de la tempête</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Venti récupère 15 pts d'énergie élémentaire à la fin d'<span class="spanImp">Ode au Vent</span>.<br>En cas d'absorption élémentaire, les personnages de l'élément correspondant récupèrent également 15 pts d'énergie élémentaire.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Chevaucheur du vent</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Diminue la consommation d'endurance de vos personnages dans l'équipe de 20 % lors du planage.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Vent violent fractionné</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Le <span class="spanImp">tir visé</span> tire 2 flèches supplémentaires, chacune infligeant 33 % des DGT de la flèche d'origine.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Bise de réminiscence</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Sonnet des Vents célestes</span> diminue la <span class="anemoS">RÉS Anémo</span> et la RÉS physique des ennemis de 12 % pendant 10 s.<br>La <span class="anemoS">RÉS Anémo</span> et la RÉS physique des ennemis projetés en l'air par <span class="spanImp">Sonnet des Vents célestes</span> diminuent de 12 % tant qu'ils sont en l'air.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. L'Ode aux mille vents</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Ode au Vent</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Vent glacial de liberté</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Venti inflige 25 % de <span class="anemoS">DGT Anémo</span> supplémentaires pendant 10 s lorsqu'il obtient un orbe ou une particule élémentaire.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Concerto céleste</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Sonnet des Vents célestes</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Tempête de résistance</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La <span class="anemoS">RÉS Anémo</span> des ennemis touchés par <span class="spanImp">Ode au Vent</span> diminue de 20 %.<br>En cas d'absorption élémentaire, leur RÉS à l'élément correspondant diminue également de 20 %.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=30" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Cécilia.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=191" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=192" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=193" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=194" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=209" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Poésie.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=210" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Poésie.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=211" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Poésie.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=282" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Bave de Blob.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=283" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Mucus de Blob.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=284" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Essence de Blob.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=375" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Graine d'ouragan.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=380" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Queue de Borée.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Venti - Ciel d'azur2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Venti - Ciel d'azur</div>  <!--Titre-->
                     <div class="nmDesc">La douce couleur azur d'un ciel sans nuages et le ton mélodieux de Fehling se complètent de façon parfaite.</div>  <!--Description-->
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
                     <p><strong>Poème à la brise</strong></p> <!--Titre-->
                     <p>Tenue de Venti. Le vêtement d'un barde libre d'esprit.</p> <!--Description-->
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
         background-position: -56rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>