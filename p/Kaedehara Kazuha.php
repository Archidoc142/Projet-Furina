<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Kaedehara Kazuha';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 127;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Maîtrise élémentaire</td></tr>
            <tr> <td>1</td> <td>1039</td> <td>23</td> <td>63</td> <td>0</td> </tr>
            <tr> <td>5</td> <td>1385</td> <td>31</td> <td>84</td> <td>0</td> </tr>
            <tr> <td>10</td> <td>1819</td> <td>40</td> <td>110</td> <td>0</td> </tr>
            <tr> <td>15</td> <td>2257</td> <td>50</td> <td>136</td> <td>0</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2695</td> <td>60</td> <td>163</td> <td>0</td> </tr>
            <tr> <td>20+</td> <td>3586</td> <td>80</td> <td>217</td> <td>0</td> </tr>
            <tr> <td>25</td> <td>4028</td> <td>90</td> <td>244</td> <td>0</td> </tr>
            <tr> <td>30</td> <td>4472</td> <td>99</td> <td>270</td> <td>0</td> </tr>
            <tr> <td>35</td> <td>4918</td> <td>109</td> <td>297</td> <td>0</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5366</td> <td>119</td> <td>324</td> <td>0</td> </tr>
            <tr> <td>40+</td> <td>5999</td> <td>133</td> <td>363</td> <td>29</td> </tr>
            <tr> <td>45</td> <td>6449</td> <td>143</td> <td>390</td> <td>29</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6902</td> <td>153</td> <td>417</td> <td>29</td> </tr>
            <tr> <td>50+</td> <td>7747</td> <td>172</td> <td>468</td> <td>58</td> </tr>
            <tr> <td>55</td> <td>8202</td> <td>182</td> <td>496</td> <td>58</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8659</td> <td>192</td> <td>523</td> <td>58</td> </tr>
            <tr> <td>60+</td> <td>9292</td> <td>206</td> <td>562</td> <td>58</td> </tr>
            <tr> <td>65</td> <td>9751</td> <td>217</td> <td>590</td> <td>58</td> </tr>
            <tr class="tdd"> <td>70</td> <td>10213</td> <td>227</td> <td>617</td> <td>58</td> </tr>
            <tr> <td>70+</td> <td>10846</td> <td>241</td> <td>656</td> <td>86</td> </tr>
            <tr> <td>75</td> <td>11310</td> <td>251</td> <td>684</td> <td>86</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11777</td> <td>262</td> <td>712</td> <td>86</td> </tr>
            <tr> <td>80+</td> <td>12410</td> <td>276</td> <td>750</td> <td>115</td> </tr>
            <tr> <td>85</td> <td>12877</td> <td>286</td> <td>779</td> <td>115</td> </tr>
            <tr class="tdd"> <td>90</td> <td>13348</td> <td>297</td> <td>807</td> <td>115</td> </tr>
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
            <p class="titrePerso">Tourbillon de feuilles écarlates</p> <!-- Titre -->
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
                  <td class="tdv">13348</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">297</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">807</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M8.076 8.152l-.017-.05A4.335 4.335 0 007.3 6.796a4.431 4.431 0 00-.325-.346A2.113 2.113 0 107 2.223a2.144 2.144 0 00-1.838 3.18 4.374 4.374 0 00-1.2-.168 4.42 4.42 0 00-.755.066l-.038.007C1.836-.24 10.7-1.672 10.962 4.342a3.985 3.985 0 01-2.886 3.81zm3.662-2.137a3.949 3.949 0 00-.626-.235 4.473 4.473 0 01-1.105 1.7h.031a2.113 2.113 0 11-2.113 2.113 4.09 4.09 0 00-.025-.445 3.968 3.968 0 00-1.863-2.931l-.19-.11a3.963 3.963 0 10.645 6.535c.082-.068.16-.14.236-.214L6.7 12.39a4.367 4.367 0 01-.891-1.765 2.112 2.112 0 11-.883-2.914q.1.05.189.11a2.111 2.111 0 01.942 1.49 2.159 2.159 0 01.018.28 3.963 3.963 0 105.663-3.577z"/></svg></span>  <!--Icon-->
                     <p>Maîtrise élémentaire</p>  <!--Stat-->
                  </td>
                  <td class="tdv">115</td>  <!--Stat-->
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
                  <td>Acer Palmatum</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Flotte du Crux</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>10/29</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Un samouraï errant d'Inazuma qui fait actuellement partie de la Flotte du Crux. Une âme douce et insouciante dont le cœur cache de nombreuses blessures.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/sword.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Escrime de Garyuu</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 5 coups d'épée.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour déclencher deux coups d'épée rapides.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact. Si une attaque plongeante est effectuée pendant « Véhémence divine », elle se transforme en « Attaque plongeante : Contrôle du chaos ».</p> <!--Attaque #3-->
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
                  <p>Véhémence divine</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Libère une technique secrète aussi violente qu'une bourrasque déchaînée qui attire les ennemis et les objets vers la position actuelle de Kazuha, avant de projeter les ennemis situés dans la zone, leur infligeant des <span class="anemoS">DGT Anémo</span> et d'élever Kazuha sur un courant de vent impétueux.<br>Si Kazuha déclenche une attaque plongeante depuis les airs dans un délai de 10 s après la compétence élémentaire « Véhémence divine », il provoque une attaque plongeante particulièrement puissante connue sous le nom de Contrôle du chaos.<br><br><span class="spanImp">Appui simple</span><br>Permet d'utiliser l'aptitude dans les airs.<br><br><span class="spanImp">Appui long</span><br>Charge l'aptitude avant de libérer davantage de <span class="anemoS">DGT Anémo</span> sur une zone plus large que lors d'un appui simple.<br><br><span class="spanImp">Attaque plongeante : Contrôle du chaos</span><br>Lorsqu'une attaque plongeante est déclenchée en utilisant les effets de la compétence élémentaire « Véhémence divine », ses DGT sont convertis en <span class="anemoS">DGT Anémo</span> et un petit tunnel venteux est créé à l'atterrissage à l'aide d'une technique d'épée secrète pour attirer les objets et les ennemis proches.<br>Les DGT infligés par Contrôle du chaos sont considérés comme des DGT d'attaque plongeante.<br><br><span class="italic">« Les vents dans les érables pleurent, pour les dieux et les hommes du passé, comme des montagnes rouges d'automne. »</span></p> <!--Description-->
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
                  <p>Coupure de mille feuilles</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Déclenche la technique ultime de Garyuu, une coupure unique semblable à une tempête grondante qui inflige des DGT Anémo de zone.<br>Le trajet de la lame laissera derrière lui un champ appelé « Vent d'automne » qui inflige des DGT Anémo de façon intermittente aux ennemis à l'intérieur.<br><br><span class="spanImp">Absorption élémentaire</span><br>Le vent d'automne absorbe les éléments <span class="hydroS">Hydro</span>, <span class="pyroS">Pyro</span>, <span class="cryoS">Cryo</span> et <span class="electroS">Électro</span> avec lesquels il entre en contact ; ceux-ci lui confèrent leurs attributs, et infligent un bonus de DGT de l'élément correspondant.<br>Un seul élément peut être absorbé à la fois.<br><br><span class="italic">« Je vois passer l'éternité en un instant, les automnes de plusieurs années d'une seule feuille ; ainsi je trancherai cet érable en un éclair, et je poserai la question des âges... »</span></p> <!--Description-->
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
                  <p>Lame d'érosion</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si <span class="spanImp">Véhémence divine</span> entre en contact avec l'élément <span class="hydroS">Hydro</span>, <span class="pyroS">Pyro</span>, <span class="cryoS">Cryo</span> ou <span class="electroS">Électro</span> lors de son utilisation, l'attaque plongeante « Contrôle du chaos » déclenchée après cette <span class="spanImp">Véhémence divine</span> bénéficie d'une absorption élémentaire, ajoutant ensuite des DGT de l'élément correspondant pour 200 % de l'attaque, ces DGT étant considérés comme des DGT d'attaque plongeante.<br>Un seul élément peut être absorbé à chaque utilisation de <span class="spanImp">Véhémence divine</span>.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Haïku de la brise</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pour chaque point de maîtrise élémentaire de Kazuha, ce dernier accorde à tous les personnages de l'équipe un bonus de 0,04 % de DGT de l'élément correspondant pendant 8 s lorsqu'il a déclenché une Dispersion. Il est possible de cumuler les bonus de DGT de différents éléments grâce à cette méthode.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Vent d'aube</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Diminue la consommation d'endurance de vos personnages dans l'équipe de 20 % lors du sprint.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Montagnes écarlates</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Réduit le TdR de <span class="spanImp">Véhémence divine</span> de 10 %.<br><span class="spanImp">Coupure de mille feuilles</span> réinitialise le TdR de <span class="spanImp">Véhémence divine</span> lorsqu'elle est activée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Zanshin des montagnes cruelles</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Le champ de vent d'automne créé par <span class="spanImp">Coupure de mille feuilles</span> a les effets suivants :<br>· Tant qu'il est actif, la maîtrise élémentaire de Kazuha est augmentée de 200 pts.<br>· La maîtrise élémentaire des personnages déployés dans le champ est augmentée de 200 pts.<br><br>Les effets d'augmentation de maîtrise élémentaire de cette constellation ne se cumulent pas.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Mystère d'érable</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Véhémence divine</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Illusion du néant</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Quand l'énergie élémentaire de Kazuha tombe en dessous de 45 pts, il obtient les effets suivants :<br>· Cliquer simplement ou longuement pour utiliser <span class="spanImp">Véhémence divine</span> restaure l'énergie élémentaire de Kazuha de 3 ou 4 pts, respectivement.<br>· Planer restaure l'énergie élémentaire de Kazuha de 2 pts toutes les secondes.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Collection ancestrale</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Coupure de mille feuilles</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Pétales écarlates</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Kazuha bénéficie d'un <span class="anemoS">enchantement Anémo</span> pendant 5 s après avoir utilisé <span class="spanImp">Véhémence divine</span> ou <span class="spanImp">Coupure de mille feuilles</span>. De plus, chaque point de maîtrise élémentaire de Kazuha augmente les DGT infligés par son attaque normale, son attaque chargée et son attaque plongeante de 0,2 %.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=109" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Ganoderma marin.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=315" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Insigne des Pilleurs.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=316" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Insigne de corbeau en argent.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=316" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Insigne de corbeau en or.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=396" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Mécanisme oni.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Kazuha - Chasse en montagne d'automne2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Kazuha - Chasse en montagne d'automne</div>  <!--Titre-->
                     <div class="nmDesc">« Le chant du pin résonne pendant que les feuilles rouges frissonnent. »</div>  <!--Description-->
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
                     <p><strong>Feuilles volantes</strong></p> <!--Titre-->
                     <p>Tenue de Kaedehara Kazuha. La tenue d'un samouraï errant, ornée de motifs de feuilles volantes.</p> <!--Description-->
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