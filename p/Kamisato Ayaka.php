<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Kamisato Ayaka';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 126;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>DGT CRIT<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1001</td> <td>27</td> <td>61</td> <td>50.0%</td> </tr>
            <tr> <td>5</td> <td>1334</td> <td>35</td> <td>81</td> <td>50.0%</td> </tr>
            <tr> <td>10</td> <td>1753</td> <td>47</td> <td>107</td> <td>50.0%</td> </tr>
            <tr> <td>15</td> <td>2174</td> <td>58</td> <td>133</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2597</td> <td>69</td> <td>158</td> <td>50.0%</td> </tr>
            <tr> <td>20+</td> <td>3455</td> <td>92</td> <td>211</td> <td>50.0%</td> </tr>
            <tr> <td>25</td> <td>3880</td> <td>103</td> <td>237</td> <td>50.0%</td> </tr>
            <tr> <td>30</td> <td>4308</td> <td>115</td> <td>263</td> <td>50.0%</td> </tr>
            <tr> <td>35</td> <td>4737</td> <td>126</td> <td>289</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5170</td> <td>138</td> <td>315</td> <td>50.0%</td> </tr>
            <tr> <td>40+</td> <td>5779</td> <td>154</td> <td>352</td> <td>59.6%</td> </tr>
            <tr> <td>45</td> <td>6213</td> <td>165</td> <td>379</td> <td>59.6%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6649</td> <td>177</td> <td>405</td> <td>59.6%</td> </tr>
            <tr> <td>50+</td> <td>7462</td> <td>198</td> <td>455</td> <td>69.2%</td> </tr>
            <tr> <td>55</td> <td>7901</td> <td>210</td> <td>482</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8341</td> <td>222</td> <td>509</td> <td>69.2%</td> </tr>
            <tr> <td>60+</td> <td>8951</td> <td>238</td> <td>546</td> <td>69.2%</td> </tr>
            <tr> <td>65</td> <td>9393</td> <td>250</td> <td>573</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9838</td> <td>262</td> <td>600</td> <td>69.2%</td> </tr>
            <tr> <td>70+</td> <td>10448</td> <td>278</td> <td>637</td> <td>78.8%</td> </tr>
            <tr> <td>75</td> <td>10895</td> <td>290</td> <td>664</td> <td>78.8%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11345</td> <td>302</td> <td>692</td> <td>78.8%</td> </tr>
            <tr"> <td>80+</td> <td>11954</td> <td>318</td> <td>729</td> <td>88.4%</td> </tr>
            <tr> <td>85</td> <td>12405</td> <td>330</td> <td>756</td> <td>88.4%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>12858</td> <td>342</td> <td>784</td> <td>88.4%</td> </tr>         
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
            <p class="titrePerso">Héron de givre</p> <!-- Titre -->
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
                  <td class="tdv">12858</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">342</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">784</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M0 14l3.5-7.764-1.527-4.772L7.255 3.5 14 0l-3.5 7.255 1.527 4.772L7.255 10.5 0 14"/><path d="M7.045.19a6.756 6.756 0 00-3.326.857l3.613 1.392L10.168.967A6.648 6.648 0 007.045.189zM1.502 3.073A6.812 6.812 0 00.309 6.947c0 .925.189 1.808.529 2.612l1.601-3.555-.937-2.93zm11.63.998l-1.571 3.26 1.076 3.361a6.709 6.709 0 00.496-6.621zm-5.8 7.489l-3.11 1.5c.86.399 1.817.623 2.823.623 1.328 0 2.567-.39 3.613-1.059l-3.326-1.064z"/></svg></span>  <!--Icon-->
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
                  <td><img src='img/icon/sword.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Grus Nivis</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Commission culturelle</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>9/28</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso"></div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/sword.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>École Kamisato - Sveltesse</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 5 coups d'épée.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour déclencher deux lames du vent rapides.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des DGT de zone à l'impact.</p> <!--Attaque #3-->
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
                  <p>École Kamisato : Fleur de glace</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Ayaka invoque une fleur glacée qui projette les ennemis proches, leur infligeant des <span class="cryoS">DGT Cryo de zone</span>.<br><br><span class="italic">« Les nuages enveloppent la lune, le désir descend tel un brouillard, emplissant le cœur du voyageur. »</span></p> <!--Description-->
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
                  <p>École Kamisato : Sentier de givre</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p><span class="spanImp">Sprint alternatif</span><br>Ayaka consomme de l'endurance pour se déplacer rapidement au milieu d'un brouillard de glace.<br><br>Sous Sentier de givre, Ayaka peut se déplacer rapidement sur l'eau.<br>À la fin de l'état, elle réapparaît, et deux choses se produisent alors simultanément :<br>· Elle libère une énergie glacée qui applique aux ennemis proches l'élément <span class="cryoS">Cryo</span>.<br>· Le froid se concentre sur son épée : les DGT qu'inflige cette dernière sont momentanément convertis en <span class="cryoS">DGT Cryo</span>.<br><br><span class="italic">« Volent les ailes mouillées ; le héron blanc marche sur l'eau ; d'une vision parfaite »</span></p> <!--Description-->
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>
                  <div class="whitneyBold nessMat flex">
                  </div>
               </div>
            </div>
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A4.png" alt="icon_apt4"> <!--image icon #4-->
                  <p>École Kamisato : Givre mortel</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Ayaka adopte une posture magnifique pour libérer un tourbillon givré qui avance sans s'arrêter.<br><br><span class="spanImp">Tourbillon givré</span><br>· Le tourbillon givré lacère de façon continue les ennemis qui se trouvent sur sa route, infligeant des DGT Cryo.<br>· Le tourbillon finit par exploser, infligeant des <span class="cryoS">DGT Cryo de zone</span>.<br><br><span class="italic">« Le blizzard dissimule les pensées du héron, au cœur rempli de pitié. »</span></p> <!--Description-->
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
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas1"> <!--image icon #5-->
                  <p>Sanctification de l'impur</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère aux attaques normales et chargées d'Ayaka suivant dans les 6 s le lancement d'<span class="spanImp">École Kamisato : Fleur de glace</span> un bonus de 30 % de DGT.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas2"> <!--image icon #6-->
                  <p>Bénédiction de Kanten Senmyou</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'énergie glacée libérée à la fin du Sentier de givre d'<span class="spanImp">École Kamisato : Sentier de givre</span> confère à Ayaka les effets suivants lorsqu'elle touche l'ennemi :<br>Régénération de 10 pts d'endurance.<br><span class="cryoS">Bonus de DGT Cryo</span> de 18 % pendant 10 s.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A7.png" alt="icon_pas3">  <!--image icon #7-->
                  <p>Fruits de Shinsa</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>10 % de chances d'obtenir le double de produits lors de la synthèse de matériaux d'élévation d'arme.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Cerise givrée</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques normales et chargées d'Ayaka ont 50 % de chances de réduire le TdR d'<span class="spanImp">École Kamisato : Fleur de glace</span> de 0,3 s lorsqu'elles infligent des <span class="cryoS">DGT Cryo</span> aux ennemis. Cet effet peut être déclenché une fois toutes les 0,1 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Lame de blizzard Seki</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Deux petits tourbillons givrés supplémentaires sont libérés à l'activation d'<span class="spanImp">École Kamisato : Givre mortel</span> ; chacun inflige 20 % des DGT du tourbillon d'origine.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Confettis de fleuraison givrée</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau de compétence <span class="spanImp">École Kamisato : Givre mortel</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Retour prééminent</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La DÉF des ennemis subissant les DGT infligés par le tourbillon givré d'<span class="spanImp">École Kamisato : Givre mortel</span> diminue de 30 % pendant 6 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Lune entre les nuages</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau de compétence <span class="spanImp">École Kamisato : Fleur de glace</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Danse de la lune</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Kamisato Ayaka s'illumine d'une gracieuseté gelée toutes les 10 s, augmentant les DGT infligés par son attaque chargée de 298 %. Cet effet s'annule 0,5 s après que l'attaque chargée d'Ayaka touche un ennemi, puis le chronomètre de cette capacité démarre.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=105" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Fleur de cerisier.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=194" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de jade shivada.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=195" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de jade shivada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=196" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de jade shivada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=197" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de jade shivada.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=225" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Élégance.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=226" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Élégance.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=227" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Élégance.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=324" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Garde-main ancien.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=325" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Garde-main kageuchi.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=326" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Garde-main célèbre.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=397" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Cœur perpétuel.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=392" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Branche de jade cramoisi.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Kamisato Ayaka - Éventail2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Kamisato Ayaka - Éventail</div>  <!--Titre-->
                     <div class="nmDesc">Ayaka change constamment d'éventail. Si vous voulez en donner en cadeau, évitez un éventail d'été ou un éventail de lancer. Les éventails de danse ou pour le thé sont de bons choix cependant.</div>  <!--Description-->
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
                     <img src="img/perso/<?php echo $bddResults['name']; ?>2.png" alt="icon_perso" class="c5 pointer iconPerso"> <!--Icon Personnage-->
                  </div>
                  <div class="poppinsLight">
                     <div class="descTenue">
                     <p><strong>Brillance parfaite</strong></p> <!--Titre-->
                     <p>Tenue de Kamisato Ayaka. Cette tenue raffinée comporte une jupe recouverte de pièces d'armure, faisant clairement affichage de la noblesse et de la ténacité de la Shirasagi Himegimi.</p> <!--Description-->
                     <img src="img/wish/<?php echo $bddResults['name']; ?>.png" alt="wish"> <!--Tenue image-->
                  </div>
                  <div class="descTenue hidden">
                     <p><strong>Missive de floraison printanière</strong></p> <!--Titre-->
                     <p>Tenue de voyage d'Ayaka. Sa conception est basée sur les robes fontainoises représentées dans les romans légers et semble refléter le style de vie des dames respectables qui résident dans cette nation.</p> <!--Description-->
                     <img src="img/wish/<?php echo $bddResults['name']; ?>2.png" alt="wish"> <!--Tenue image-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <style>
      .ascension{ /*Ascension background*/
         background-image: url("img/wish/<?php echo $bddResults['name']; ?>.png");
         background-position: -55rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>