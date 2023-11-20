<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Lyney';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 239;"); // Nourriture
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
            <tr> <td>1</td> <td>858</td> <td>25</td> <td>42</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1144</td> <td>33</td> <td>56</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1502</td> <td>43</td> <td>73</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>1864</td> <td>54</td> <td>91</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2226</td> <td>64</td> <td>109</td> <td>5.0%</td> </tr>
            <tr><td>20+</td> <td>2961</td> <td>85</td> <td>145</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3326</td> <td>96</td> <td>162</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>3692</td> <td>107</td> <td>180</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>4060</td> <td>117</td> <td>198</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4431</td> <td>128</td> <td>216</td> <td>5.0%</td> </tr>
            <tr><td>40+</td> <td>4954</td> <td>143</td> <td>242</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>5325</td> <td>154</td> <td>260</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5699</td> <td>164</td> <td>278</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>6396</td> <td>185</td> <td>312</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>6772</td> <td>195</td> <td>331</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>7150</td> <td>206</td> <td>349</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>7672</td> <td>221</td> <td>375</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>8051</td> <td>232</td> <td>393</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>8432</td> <td>243</td> <td>412</td> <td>14.6%</td> </tr>
            <tr><td>70+</td> <td>8955</td> <td>258</td> <td>437</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>9339</td> <td>270</td> <td>456</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>9724</td> <td>281</td> <td>475</td> <td>19.4%</td> </tr>
            <tr><td>80+</td> <td>10247</td> <td>296</td> <td>500</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>10633</td> <td>307</td> <td>519</td> <td>24.2%</td> </tr>
            <tr class="tdd"><td>90</td> <td>11021</td> <td>318</td> <td>538</td> <td>24.2%</td> </tr>
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
            <p class="titrePerso">Spectacle de fantasmagorie</p> <!-- Titre -->
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
                  <td class="tdv">11021</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">318</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">538</td>  <!--Stat-->
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
                  <td>Felis Fuscus</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Hôtel Bouffes d'été</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>2/2</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Un célèbre magicien fontainois qui a un esprit agile et un grand don pour le bagou. Le public est captivé par ses compétences exquises et s'accroche à chacun de ses mots intelligents.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Cartomagie</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l'impact.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un <span class="spanImp">tir visé</span> plus précis infligeant davantage de DGT.<br>Lors de la visée, la puissance du feu vient se concentrer sur la pointe de la flèche. Les effets varient selon le nombre de charges :<br>· 1 charge : Tire une flèche enflammée qui inflige des <span class="pyroS">DGT Pyro</span>.<br>· 2 charges : Tire une flèche postiche qui inflige des <span class="pyroS">DGT Pyro</span> et invoque un chapeau félinois après avoir touché.<br>Si Lyney tire une flèche postiche en ayant plus de 60 % de PV, il consomme une partie de ses PV pour obtenir un cumul de fantasmagorie. Cet effet peut être cumulé 5 fois maximum, et sera annulé après 30 s si Lyney quitte le combat.<br>Les PV de Lyney peuvent être diminués jusqu'à 60 % de cette manière.</p> <!--Attaque #3-->
                  <br>
                  <span class="spanImp">Chapeau félinois</span>
                  <p>· Permet de narguer les ennemis proches pour attirer leurs attaques, chaque ennemi pouvant être nargué par le chapeau une fois toutes les 5 s.<br>· La durabilité du chapeau est proportionnelle aux PV max de Lyney.<br>· Lorsque le chapeau est éliminé ou expire, il tire une <span class="spanImp">balle d'artifice</span> sur un ennemi proche, infligeant des <span class="pyroS">DGT Pyro</span>.<br>Il ne peut exister qu'un seul chapeau félinois à la fois.</p> <!--Attaque #4-->
                  <br>
                  <span class="spanImp">Arkhe : Pneuma</span>
                  <p>Régulièrement, une épine d'inhalation descend à l'emplacement touché par une flèche postiche pour infliger des <span class="pyroS">DGT Pyro</span> chargés d'énergie pneuma.</p> <!--Attaque #5-->
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
                  <p>Lumières de fioriture</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Lyney agite son chapeau pour déclencher un feu d'artifice surprise.<br>L'utilisation de cette capacité consomme tous les cumuls de fantasmagorie possédés et inflige des <span class="pyroS">DGT Pyro de zone</span> aux ennemis en face. Les DGT augmentent selon la quantité de cumuls consommés, et les PV de Lyney sont aussi restaurés selon ses PV max.<br><br>Lorsqu'un chapeau félinois créé par Lyney est présent sur le champ de bataille, le feu d'artifice le fait exploser pour infliger des <span class="pyroS">DGT Pyro de zone</span> d'une valeur équivalant aux DGT d'une balle d'artifice.<br>Les DGT infligés par un chapeau félinois de cette manière sont considérés comme des DGT d'attaque chargée.<br><br><span class="italic">« Tout le monde sait que les magiciens détournent intentionnellement le public... Eh oui, pendant que vous me regardiez, mon chapeau et mon assistant là-bas ont tous deux disparu... Fascinant, n'est-ce pas ? »</span></p> <!--Description-->
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
                  <p>Clou du spectacle : Parade prodigieuse</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Libérant sa magie, Lyney se transforme en un félin chaponois qui peut se déplacer rapidement. (À ne pas confondre avec son chapeau félinois. Ce sont deux accessoires bien différents !)<br>Lorsque le félin chaponois s'approche des ennemis, il fait pleuvoir des flammes sur ces derniers, infligeant une fois des <span class="pyroS">DGT Pyro</span> à chaque ennemi. Une fois la durée terminée, le félin chaponois se dissipe en faisant exploser un magnifique feu d'artifice, ce qui inflige des <span class="pyroS">DGT Pyro de zone</span>, invoque un chapeau félinois et lui accorde un cumul de fantasmagorie.<br><br>Un félin chaponois peut être dissipé manuellement.<br><br><span class="italic">« Regardez attentivement. C'est le moment du miracle, et il n'appartient qu'à nous ! »</span></p> <!--Description-->
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
                  <p>Performance périlleuse</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si Lyney consomme des PV en tirant une <span class="spanImp">flèche postiche</span>, lorsque le chapeau félinois invoqué touche un ennemi, Lyney récupère 3 pts d'énergie élémentaire et les DGT infligés augmentent d'une valeur équivalant à 80 % de l'ATQ.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Ovation concluante</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les DGT infligés par Lyney aux ennemis affectés par l'élément <span class="pyroS">Pyro</span> bénéficient des augmentations suivantes :<br>· +60 % de base.<br>· +20 % pour chacun des personnages de type <span class="pyroS">Pyro</span> (hormis Lyney) dans l'équipe.<br>Les DGT infligés par Lyney aux ennemis affectés par l'élément <span class="pyroS">Pyro</span> peuvent être augmentés d'un maximum de 100 % de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Observation triviale</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Affiche l'emplacement des <span class="spanImp">produits de Fontaine</span> sur la mini-carte.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Art de mysticité</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Un maximum de 2 <span class="spanImp">chapeaux félinois</span> peut exister en même temps.<br>De plus, les flèches postiches invoquent 2 chapeaux félinois et accordent un cumul supplémentaire de fantasmagorie après avoir touché. Cet effet peut être déclenché une fois toutes les 15 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Cajolerie affable</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lyney obtient un cumul de lucidité toutes les 2 s qu'il passe sur le terrain, augmentant ses DGT CRIT de 20 %. Cet effet peut être cumulé 3 fois maximum, et cesse lorsque Lyney quitte le champ de bataille.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Dextérité d'illusionnisme</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Attaque normale : Cartomagie</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Planification de familiarité</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La <span class="pyroS">RÉS Pyro</span> des ennemis touchés par l'attaque chargée de type <span class="pyroS">Pyro</span> de Lyney diminue de 20 % pendant 6 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Malice de révélation</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Clou du spectacle : Parade prodigieuse</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Sourire diplomatique</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Lyney décoche une <span class="spanImp">flèche postiche</span>, il tire une balle d'artifice répliquée qui inflige des DGT d'une valeur équivalant à 80% des DGT d'une balle d'artifice. Ces DGT sont considérés comme des DGT d'attaque chargée.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=135" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Rose arc-en-ciel.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=240" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Équité.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=241" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Équité.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=242" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Équité.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=425" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Résolution de l'empereur.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=421" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Floraison première de l'oasis.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Lyney - Simulacre2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Lyney - Simulacre</div>  <!--Titre-->
                     <div class="nmDesc">L'un des principaux types de magie consiste à faire « disparaître » les choses, et Lyney a un arsenal de tours dans sa manche. Étant son acolyte, tant que vous êtes d'accord pour fermer les yeux, tous vos problèmes peuvent également disparaître.</div>  <!--Description-->
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
                     <p><strong>Sen-chat-tionnel</strong></p> <!--Titre-->
                     <p>Tenue de Lyney. Les chats ne s'étirent que devant ceux en qui ils ont entièrement confiance. Sinon, ils se contentent de dissimuler leurs griffes derrière un sourire... Intime et réservé, à l'image des mots doux de ce magicien...</p> <!--Description-->
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