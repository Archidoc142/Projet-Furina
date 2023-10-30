<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Yoimiya';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 128;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Taux CRIT</td></tr>
            <tr> <td>1</td> <td>791</td> <td>25</td> <td>48</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1055</td> <td>34</td> <td>64</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1385</td> <td>44</td> <td>84</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>1719</td> <td>55</td> <td>104</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2053</td> <td>65</td> <td>124</td> <td>5.0%</td> </tr>
            <tr><td>20+</td> <td>2731</td> <td>87</td> <td>165</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3067</td> <td>97</td> <td>186</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>3405</td> <td>108</td> <td>206</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>3745</td> <td>119</td> <td>227</td> <td>5.0%</td> </tr>
            <tr class="tdd"><td>40</td> <td>4086</td> <td>130</td> <td>247</td> <td>5.0%</td> </tr>
            <tr> <td>40+</td> <td>4568</td> <td>145</td> <td>276</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>4911</td> <td>156</td> <td>297</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5256</td> <td>167</td> <td>318</td> <td>9.8%</td> </tr>
            <tr><td>50+</td> <td>5899</td> <td>187</td> <td>357</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>6245</td> <td>198</td> <td>378</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6593</td> <td>209</td> <td>399</td> <td>14.6%</td> </tr>
            <tr><td>60+</td> <td>7075</td> <td>225</td> <td>428</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>7425</td> <td>236</td> <td>449</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>7777</td> <td>247</td> <td>470</td> <td>14.6%</td> </tr>
            <tr><td>70+</td> <td>8259</td> <td>262</td> <td>500</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>8612</td> <td>274</td> <td>521</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>8968</td> <td>285</td> <td>542</td> <td>19.4%</td> </tr>
            <tr><td>80+</td> <td>9450</td> <td>300</td> <td>572</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>9806</td> <td>312</td> <td>593</td> <td>24.2%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>10164</td> <td>323</td> <td>615</td> <td>24.2%</td> </tr>
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
            <p class="titrePerso">Flamme gambadante</p> <!-- Titre -->
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
                  <td class="tdv">10164</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">323</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">615</td>  <!--Stat-->
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
                  <td>Carassius Auratus</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Feux de Naganohara</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>6/21</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Propriétaire des « Feux de Naganohara ». Connue sous le nom de « Reine du festival d'été », elle excelle dans son art de créer des feux d'artifice qui symbolisent les espoirs et les rêves des gens.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Flambée pyrotechnique</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 5 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un <span class="spanImp">tir visé</span> plus précis et infligeant davantage de DGT.<br>En visant, des flammes viennent se concentrer sur le carreau de la flèche avant d'être tirées lors de l'attaque. L'effet varie selon le nombre de charges :<br>· 1 charge : Tire une flèche enflammée qui inflige des <span class="pyroS">DGT Pyro</span>.<br>· 2 charges : Génère jusqu'à 3 flèches chercheuses en fonction du temps de charge, qui sont libérées lors du tir visé. Les flèches suivent les ennemis proches, et infligent lorsqu'elles touchent des <span class="pyroS">DGT Pyro</span>.</p> <!--Attaque #2-->
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
                  <p>Danse du feu « Niwabi »</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Yoimiya brandit un cierge magique, s'entourant d'un champ de salpêtres.<br><br><span class="spanImp">Niwabi Enshou</span><br>Pendant la durée de cette aptitude, les flèches tirées lors de l'attaque normale de Yoimiya sont des flèches enflammées, infligeant davantage de DGT, et dont les DGT sont convertis en <span class="pyroS">DGT Pyro</span>. Pendant cette période, le second niveau de charge de son attaque normale Flambée pyrotechnique ne génère pas de flèches chercheuses.<br><br>L'effet s'arrête lorsque Yoimiya quitte le champ de bataille.<br><br><span class="italic">Le « Niwabi » est une sorte de feux d'artifice à base d'encens inventé par Yoimiya, qui ne requiert aucune formation ou préparation préalable, ce qui le rend particulièrement populaire. Après plusieurs incidents, la Commission administrative a interdit l'usage du « Niwabi » dans l'enceinte de la ville, mais il arrive encore que de discrètes étincelles illuminent la nuit. Vues des hauteurs, on dirait de petites étoiles filantes.</span></p> <!--Description-->
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
                  <p>Saxifrage Ryuukin</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Yoimiya s'élance dans les airs avec sa création originale, le « Saxifrage Ryuukin » et tire des roquettes flamboyantes pleines de surprises, qui infligent des <span class="pyroS">DGT Pyro de zone</span>, et marquent un ennemi d'une « Flamme Ryuukin ».<br><br>Flamme Ryuukin<br>Les attaques normales, chargées et plongeantes, les compétences élémentaires et les déchaînements élémentaires de tous les personnages de l'équipe (hormis Yoimiya) génèrent une explosion lorsqu'elles touchent un ennemi marqué d'une Flamme Ryuukin, infligeant des <span class="pyroS">DGT Pyro de zone</span>.<br>Lorsqu'un ennemi marqué d'une Flamme Ryuukin est vaincu avant la fin de l'effet, ce dernier est transféré à un ennemi proche qui hérite de la durée restante.<br><br>Il est possible de générer ainsi une explosion une fois toutes les 2 s. Quand Yoimiya est vaincue, l'effet Flammes Ryuukin généré par ses compétences prend fin.<br><br><span class="italic">Les feux d'artifice sont les étoiles créées par l'homme, comètes destinées aux cieux. Et même si elle n'est qu'éphémère, la lumière qu'ils génèrent peut demeurer longtemps dans le cœur des hommes.</span></p> <!--Description-->
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
                  <p>Tour de passe-passe</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Tant que <span class="spanImp">Danse du feu « Niwabi »</span> est active, les attaques normales de Yoimiya augmentent son <span class="pyroS">bonus de DGT Pyro</span> de 2 %. Cet effet dure 3 s et peut être cumulé 10 fois maximum.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Aube d'une nuit d'été</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Yoimiya libère <span class="spanImp">Saxifrage Ryuukin</span>, l'ATQ de tous les autres personnages de l'équipe (hormis Yoimiya) augmente de 10 % pendant 15 s. De plus, chaque cumul de l'aptitude passive « Tour de passe-passe » que Yoimiya possède lorsqu'elle exécute <span class="spanImp">Saxifrage d'or</span> augmente ce bonus d'ATQ de 1 %.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Rentabilisation maximum</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lors de la fabrication de décorations de type aménagement, ornement ou paysage, une partie des matériaux est récupérée.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Agate Ryuukin</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Prolonge la durée de la Flamme Ryuukin générée par <span class="spanImp">Saxifrage Ryuukin</span> de 4 s.<br>De plus, lorsqu'un ennemi affecté par Flamme Ryuukin est vaincu pendant la durée de l'effet, l'ATQ de Yoimiya augmente de 20 % pendant 20 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Procession de feux de joie</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque les <span class="pyroS">DGT Pyro</span> infligés par Yoimiya résultent en un coup CRIT, cette dernière obtient pendant 6 s un <span class="pyroS">bonus de DGT Pyro</span> de 25 %.<br>Cet effet s'applique également lorsque Yoimiya fait partie de l'équipe mais n'est pas déployée.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Flammes ingénieuses</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Danse du feu « Niwabi »</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Pro de la pyrotechnie</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Réduit le TdR de <span class="spanImp">Danse du feu « Niwabi »</span> de 1,2 s lorsque Flamme Ryuukin de Yoimiya déclenche une explosion.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Nuit d'un festival d'été</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Saxifrage Ryuukin</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Pluie de météores de Naganohara</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Tant que <span class="spanImp">Danse du feu «Niwabi »</span> est active, les attaques normales de Yoimiya ont 50 % de chances de libérer une flèche enflammée supplémentaire qui inflige 60 % des DGT d'origine. Ces DGT sont considérés comme des DGT d'attaque normale.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=108" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Herbe à sanglots.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=222" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Éphémère.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=223" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Éphémère.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=224" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Éphémère.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=288" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Parchemin divinatoire.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=289" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Parchemin sigillé.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=290" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Parchemin maudit.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=398" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Perle brûlante.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=391" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne du roi dragon.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Yoimiya - Étincelle dorée2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Yoimiya - Étincelle dorée</div>  <!--Titre-->
                     <div class="nmDesc">Même des étincelles momentanées peuvent laisser des flammes inextinguibles dans le cœur de ceux qui regardent le ciel nocturne.</div>  <!--Description-->
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
                     <p><strong>Koï des mille feux</strong></p> <!--Titre-->
                     <p>Tenue de Yoimiya. Une combinaison des festivals des années passées.</p> <!--Description-->
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
         background-position: -54rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>