<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Neuvillette';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 254;"); // Nourriture
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
            <tr> <td>1</td> <td>1144</td> <td>16</td> <td>45</td> <td>50.0%</td> </tr>
            <tr> <td>5</td> <td>1525</td> <td>22</td> <td>60</td> <td>50.0%</td> </tr>
            <tr> <td>10</td> <td>2003</td> <td>28</td> <td>79</td> <td>50.0%</td> </tr>
            <tr> <td>15</td> <td>2485</td> <td>35</td> <td>97</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2967</td> <td>42</td> <td>116</td> <td>50.0%</td> </tr>
            <tr><td>20+</td> <td>3948</td> <td>56</td> <td>155</td> <td>50.0%</td> </tr>
            <tr> <td>25</td> <td>4435</td> <td>63</td> <td>174</td> <td>50.0%</td> </tr>
            <tr> <td>30</td> <td>4923</td> <td>70</td> <td>193</td> <td>50.0%</td> </tr>
            <tr> <td>35</td> <td>5414</td> <td>77</td> <td>212</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5908</td> <td>84</td> <td>232</td> <td>50.0%</td> </tr>
            <tr><td>40+</td> <td>6605</td> <td>94</td> <td>259</td> <td>59.6%</td> </tr>
            <tr> <td>45</td> <td>7100</td> <td>101</td> <td>279</td> <td>59.6%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>7599</td> <td>108</td> <td>298</td> <td>59.6%</td> </tr>
            <tr> <td>50+</td> <td>8528</td> <td>121</td> <td>335</td> <td>69.2%</td> </tr>
            <tr> <td>55</td> <td>9029</td> <td>128</td> <td>354</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>9533</td> <td>135</td> <td>374</td> <td>69.2%</td> </tr>
            <tr> <td>60+</td> <td>10230</td> <td>145</td> <td>401</td> <td>69.2%</td> </tr>
            <tr> <td>65</td> <td>10735</td> <td>152</td> <td>421</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>11243</td> <td>159</td> <td>441</td> <td>69.2%</td> </tr>
            <tr><td>70+</td> <td>11940</td> <td>169</td> <td>468</td> <td>78.8%</td> </tr>
            <tr> <td>75</td> <td>12451</td> <td>177</td> <td>488</td> <td>78.8%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>12965</td> <td>184</td> <td>509</td> <td>78.8%</td> </tr>
            <tr><td>80+</td> <td>13662</td> <td>194</td> <td>536</td> <td>88.4%</td> </tr>
            <tr> <td>85</td> <td>14177</td> <td>201</td> <td>556</td> <td>88.4%</td> </tr>
            <tr class="tdd"><td>90</td> <td>14695</td> <td>208</td> <td>576</td> <td>88.4%</td> </tr>
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
            <p class="titrePerso">Ordonnateur du jugement inexorable</p> <!-- Titre -->
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
                  <td class="tdv">14695</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">208</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">576</td>  <!--Stat-->
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
                  <td><img src='img/icon/catalyst.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Leviathan Judicator</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cour de Fontaine</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>12/18</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Le juge suprême de Fontaine, également connu comme l'iudex, est réputé pour son impartialité sans faille.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Stabilité de l'eau</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Agite légèrement sa canne, ordonnant aux marées de déclencher jusqu'à 3 attaques qui infligent des <span class="hydroS">DGT Hydro</span>.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Charge d'attaque chargée : Avertissement procédural</span>
                  <p>Pendant la charge, Neuvillette concentre progressivement la puissance de l'eau en un sceau d'arbitrage. Dans cet état, Neuvillette peut se déplacer, changer d'orientation et absorber les gouttes d'eau de source à portée.<br>Chaque goutte absorbée permet d'augmenter la vitesse de formation du sceau d'arbitrage et soigne les PV de Neuvillette.<br>À la fin de la charge, Neuvillette déclenche une attaque chargée si le sceau d'arbitrage est incomplet. Si ce dernier est complet, il déclenche une attaque chargée « Jugement équitable».</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour attaquer les ennemis avec un cercle d'eau qui inflige des <span class="hydroS">DGT Hydro de zone</span>.</p> <!--Attaque #3-->
                  <br>
                  <span class="spanImp">Attaque chargée : Jugement équitable</span>
                  <p>Neuvillette libère un torrent déferlant qui inflige des <span class="hydroS">DGT Hydro de zone</span> de façon continue aux ennemis en ligne droite devant lui.<br>Le jugement équitable ne consomme pas l'endurance et dure 3 s.<br>Lorsque ses PV sont supérieurs à 50%, Neuvillette perd des PV de façon continue en utilisant cette attaque.</p> <!--Attaque #4-->
                  <span class="spanImp">Attaque chargée : Jugement équitable</span>
                  <p>Attaque plongeante</p> <!--Attaque #5-->
                  <div class="labelInfo center whitneyBold marg-tt">Concentre la puissance de l'élément Hydro avant de plonger depuis les airs pour frapper le sol, infligeant des DGT aux ennemis sur la route et des <span class="hydroS">DGT Hydro de zone</span> à l'impact.</div>

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
                  <p>Ô larmes, je rembourse</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Neuvillette invoque une cascade déchaînée qui inflige des <span class="hydroS">DGT Hydro de zone</span> aux ennemis en face de lui selon ses PV max. Après avoir touché un ennemi, 3 gouttes d'eau de source sont générées à proximité de ce dernier.<br><br><span class="spanImp">Arkhe : Pneuma</span><br>Régulièrement, après avoir invoqué une cascade déchaînée, une épine d'inhalation qui transperce les ennemis est libérée pour infliger des <span class="hydroS">DGT Hydro</span> chargés d'énergie pneuma.<br><br><span class="italic">« La loi peut restreindre toutes sortes de crimes, mais elle ne peut extirper le mal lui-même. »</span></p> <!--Description-->
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
                  <p>Ô marées, je reviens</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Neuvillette déchaîne une vague de rupture qui inflige des <span class="hydroS">DGT Hydro de zone</span> selon ses PV max. Après un court délai, 2 cascades sont invoquées pour infliger des <span class="hydroS">DGT Hydro</span> sur une petite zone et générer 6 gouttes d'eau de source en avant.<br><br><span class="italic">« Une loi n'est établie qu'après sa publication, et surtout, les lois de la nature régissent toutes les espèces et les époques depuis les temps anciens. »</span></p> <!--Description-->
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
                  <p>Héritier de l'autorité de l'ancienne mer</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'un personnage de l'équipe déclenche une réaction d'Évaporation, de Gel, d'Électrocution, de Fleurissement, de Dispersion Hydro ou de Cristallisation Hydro sur un ennemi, Neuvillette obtient un cumul de gloire draconique passée pendant 30 s : peut être cumulé 3 fois maximum, ce qui augmente les DGT de l'attaque chargée « Jugement équitable » à une valeur équivalant à 110 %, 125 % ou 160 % des DGT d'origine, selon le nombre de cumuls.<br>Les cumuls de gloire draconique passée de chaque réaction élémentaire existent indépendamment les uns des autres.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Discipline de l'arbitrage suprême</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pour chaque tranche de 1 % de PV actuels au-dessus de 30 % de ses PV max, Neuvillette obtient un <span class="hydroS">bonus de DGT Hydro</span> de 0,6 %. Le bonus peut être augmenté d'un maximum de 30 % de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Rassemblement de la marée</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente la VIT de sprint sous l'eau de vos personnages dans l'équipe de 15%.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>Création de l'honneur</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Neuvillette obtient un cumul de gloire draconique passée de l'aptitude passive « Héritier de l'autorité de l'ancienne mer » lorsqu'il est déployé au combat. L'aptitude passive « Héritier de l'autorité de l'ancienne mer » doit être déjà débloquée.<br>De plus, sa RÉS à l'interruption augmente lors de la charge de l'attaque chargée « Avertissement procédural » et de l'utilisation de l'attaque chargée « Jugement équitable ».</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>Exhortation de la loi</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'aptitude passive « Héritier de l'autorité de l'ancienne mer » est renforcée : chaque cumul de gloire draconique passée augmente les DGT CRIT de l'attaque chargée « Jugement équitable » de 14 %, les DGT CRIT pouvant être augmentés d'un maximum de 42 % de cette manière.<br>L'aptitude passive « Héritier de l'autorité de l'ancienne mer » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>Postulat de l'antan</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Attaque normale : Stabilité de l'eau</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>Couronne de la commisération</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Neuvillette est déployé et reçoit des soins, 1 goutte d'eau de source est générée. Cet effet peut être déclenché une fois toutes les 4 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>Verdict de l'axiome</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Ô marées, je reviens</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>Récompense du courroux</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>En utilisant l'attaque chargée «Jugement équitable », Neuvillette peut aspirer les gouttes d'eau de source à portée. Chaque goutte absorbée permet de prolonger la durée de l'attaque chargée «Jugement équitable » de 1 s.<br>De plus, lorsque l'attaque chargée « Jugement équitable » touche un ennemi, 2 torrents supplémentaires sont libérés toutes les 2 s, chacun infligeant des <span class="hydroS">DGT Hydro</span> pour une valeur équivalant à 10 % des PV max de Neuvillette. Les DGT infligés de cette manière sont considérés comme des DGT de l'attaque chargée « Jugement équitable ».</p></div>  <!--Description-->
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
               <a href="p/material.php?id=136" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Sombrétoile.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=360" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Perle transocéanique.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=361" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Morceau transocéanique.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=362" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Cristal xénochromatique.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=427" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Corne fontemarine.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=422" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Constambre.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Neuvillette - Afflux2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Neuvillette - Afflux</div>  <!--Titre-->
                     <div class="nmDesc">La surface de l'eau peut sembler placide comme un joyau immaculé, mais elle peut être en train d'attendre que le moment de jaillir vienne.</div>  <!--Description-->
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
                     <p><strong>Arbitrage sans équivoque</strong></p> <!--Titre-->
                     <p>Tenue de Neuvillette. L'habit solennel et élégant de l'iudex, en raison de la complexité de sa conception, cause, il est vrai, quelques désagréments lors des mouvements. Mais pour son porteur, le fait que ce vêtement corresponde à sa réputation est un point bien plus important.</p> <!--Description-->
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
         background-position: -55rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>