<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Yelan';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 167;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Taux CRIT<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1125</td> <td>19</td> <td>43</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1500</td> <td>25</td> <td>57</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1970</td> <td>33</td> <td>75</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>2443</td> <td>41</td> <td>93</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2918</td> <td>49</td> <td>111</td> <td>5.0%</td> </tr>
            <tr> <td>20+</td> <td>3883</td> <td>66</td> <td>147</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>4361</td> <td>74</td> <td>165</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>4841</td> <td>82</td> <td>184</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>5324</td> <td>90</td> <td>202</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5810</td> <td>98</td> <td>220</td> <td>5.0%</td> </tr>
            <tr> <td>40+</td> <td>6495</td> <td>110</td> <td>246</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>6982</td> <td>118</td> <td>265</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>7472</td> <td>126</td> <td>283</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>8386</td> <td>142</td> <td>318</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>8879</td> <td>150</td> <td>337</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>9374</td> <td>158</td> <td>355</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>10059</td> <td>170</td> <td>381</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>10556</td> <td>178</td> <td>400</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>11056</td> <td>187</td> <td>419</td> <td>14.6%</td> </tr>
            <tr> <td>70+</td> <td>11741</td> <td>198</td> <td>445</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>12244</td> <td>207</td> <td>464</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>12749</td> <td>215</td> <td>483</td> <td>19.4%</td> </tr>
            <tr> <td>80+</td> <td>13434</td> <td>227</td> <td>509</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>13941</td> <td>235</td> <td>529</td> <td>24.2%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>14450</td> <td>244</td> <td>548</td> <td>24.2%</td> </tr>         
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
            <p class="titrePerso">Orchidée de la vallée</p> <!-- Titre -->
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
                  <td class="tdv">14450</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">244</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">548</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M14 0L7.256 3.5 1.973 1.465 3.5 6.236 0 14l7.256-3.5 4.771 1.527L10.5 7.256zm-3.24 3.24L8.88 7.136 9.701 9.7l-2.564-.82-3.898 1.88 1.88-4.17-.82-2.565L7.137 5.12z"/></svg></span>  <!--Icon-->
                     <p>Taux CRIT</p>  <!--Stat-->
                  </td>
                  <td class="tdv">24.2%</td>  <!--Stat-->
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
                  <td>Umbrabilis Orchis</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Maison de thé Yanshang</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>4/20</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une mystérieuse personne qui prétend travailler pour le Bureau des affaires civiles. Cependant, elle n'apparaît nulle part dans leur registre.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Sagette furtive</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un tir visé plus précis infligeant davantage de DGT.<br>Lors de la visée, la flèche se charge de flux d'eau, infligeant des <span class="hydroS">DGT Hydro</span> quand elle est complètement chargée.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Percée</span>
                  <p>Si l'équipe est hors combat pendant 5s, Yelan entre dans l'état Percée permettant de diminuer le temps de charge de son prochain tir visé de 80%, et une fois le tir complètement chargé, elle peut tirer une flèche perçante qui inflige des <span class="hydroS">DGT Hydro de zone</span> selon ses PV max.</p> <!--Attaque #3-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l'impact.</p> <!--Attaque #4-->
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
                  <p>Ligne vitale persistante</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Tire une ligne vitale et court à grande vitesse, enchevêtrant et marquant les ennemis sur son chemin.<br>À la fin du déplacement, la ligne vitale explose, infligeant des <span class="hydroS">DGT Hydro</span> aux ennemis marqués selon les PV max de Yelan.<br><br><span class="spanImp">Appui simple</span><br>Avance rapidement sur une certaine distance.<br><br><span class="spanImp">Appui long</span><br>Avance rapidement de façon continue, tout en augmentant la RÉS à l'interruption de Yelan pendant son mouvement.<br>Pendant ce déplacement, Yelan peut contrôler la direction de sa course et peut s'arrêter en utilisant à nouveau la compétence.<br><br>De plus, chaque ennemi marqué par la ligne vitale lorsqu'elle explose accorde à Yelan 34 % de chances d'obtenir l'état Percée.<br><br><span class="italic">Ce n'est que lorsqu'elle commence à tirer sur la corde que les malfaiteurs, les escrocs et les tricheurs se rendent compte qu'il n'y a pas d'échappatoire...</span></p> <!--Description-->
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
                  <p>Dé exquis des profondeurs</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Inflige des <span class="hydroS">DGT Hydro de zone</span> et crée un dé exquis pour aider en combat.<br><br><span class="spanImp">Dé exquis</span><br>Suit le personnage et déclenche une attaque coordonnée dans les circonstances suivantes, infligeant des <span class="hydroS">DGT Hydro</span> selon les PV max de Yelan :<br>· Chaque fois que votre personnage déployé utilise une attaque normale, cet effet pouvant être déclenché une fois toutes les secondes.<br>· Chaque fois que la ligne vitale de Yelan explose et touche des ennemis.<br><br><span class="italic">« Devenir accro au jeu ne vous fera aucun bien... Je veux dire, je suis la croupière, alors faites le calcul : selon vous, quelles sont vos chances de me battre, alors que j'ai sept dés et que vous n'en avez qu'un seul ? »</span></p> <!--Description-->
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
                  <p>Contrôle stratégique</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si l'équipe comprend des personnages de 1/2/3/4 types élémentaires, les PV max de Yelan augmentent de 6%/12%/18%/30%.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Adaptation aisée</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Tant qu'un <span class="spanImp">dé exquis</span> est en combat, les DGT infligés par votre personnage déployé augmentent de 1 %, puis de 3,5% supplémentaires toutes les secondes. Les DGT peuvent être augmentés d'un maximum de 50 % de cette manière.<br>Utiliser à nouveau Dé exquis des profondeurs pendant la durée de l'effet décrit ci-dessus dissipera ce dernier.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Longue considération</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente les récompenses d'une expédition de 20 h à Liyue de 25 %.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Tricheur en jeu</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère une utilisation supplémentaire de <span class="spanImp">Ligne vitale persistante</span>.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Offert par la maison</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'un <span class="spanImp">dé exquis</span> déclenche une attaque coordonnée, une flèche d'eau supplémentaire est envoyée pour infliger des DGT Hydro équivalant à 14 % des PV max de Yelan.<br>Cet effet peut être déclenché une fois toutes les 1,8 s.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Dé pipé</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Dé exquis des profondeurs</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Tour de passe-passe</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente les PV max de tous les personnages de l'équipe de 10 % pendant 25 s pour chaque ennemi marqué par la <span class="spanImp">ligne vitale</span> lorsqu'elle explose. Les PV max peuvent être augmentés jusqu'à 40 % de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Dextérité de la croupière</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Ligne vitale persistante</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Tout pour le vainqueur</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Après avoir utilisé <span class="spanImp">Dé exquis des profondeurs</span>, Yelan entre dans l'état Stratège.<br>Ses attaques normales deviennent alors des flèches perçantes spéciales. Ces flèches possèdent les mêmes capacités que les flèches perçantes normales, et les DGT qu'elles infligent sont considérés comme des DGT d'attaque chargée infligeant 156% des DGT des flèches perçantes normales.<br><br>L'état Stratège dure 20 s maximum ou est annulé après avoir tiré 5 flèches.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=40" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Conque d'étoile.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=178" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de lazurite varunada.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=179" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de lazurite varunada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=180" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de lazurite varunada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=181" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de lazurite varunada.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=212" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=213" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=214" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=312" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Insigne de nouvelle recrue.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=313" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Insigne de sergent.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=314" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Insigne d'officier.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=409" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Croc runique.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=393" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Écaille dorée.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Yelan - Jet2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Yelan - Jet</div>  <!--Titre-->
                     <div class="nmDesc">« Il n'est pas facile de fabriquer des dés qui donnent des chances égales aux joueurs. Sur les dés de mauvaise facture, les faces ont des poids différents. »</div>  <!--Description-->
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
                     <p><strong>Instant final</strong></p> <!--Titre-->
                     <p>Tenue de Yelan. Comme leur porteuse, ces vêtements ont pendant longtemps été dans l'ombre, et à un tel point, qu'ils semblent posséder un caractère mystérieux telle une orchidée s'épanouissant la nuit.</p> <!--Description-->
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