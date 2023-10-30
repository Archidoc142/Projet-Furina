<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Cyno';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 197;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>DGT CRIT</td></tr>
            <tr> <td>1</td> <td>972</td> <td>25</td> <td>67</td> <td>50.0%</td> </tr>
            <tr> <td>5</td> <td>1296</td> <td>33</td> <td>89</td> <td>50.0%</td> </tr>
            <tr> <td>10</td> <td>1703</td> <td>43</td> <td>117</td> <td>50.0%</td> </tr>
            <tr> <td>15</td> <td>2112</td> <td>54</td> <td>145</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2522</td> <td>64</td> <td>174</td> <td>50.0%</td> </tr>
            <tr> <td>20+</td> <td>3356</td> <td>85</td> <td>231</td> <td>50.0%</td> </tr>
            <tr> <td>25</td> <td>3769</td> <td>96</td> <td>259</td> <td>50.0%</td> </tr>
            <tr> <td>30</td> <td>4185</td> <td>107</td> <td>288</td> <td>50.0%</td> </tr>
            <tr> <td>35</td> <td>4602</td> <td>117</td> <td>317</td> <td>50.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5022</td> <td>128</td> <td>345</td> <td>50.0%</td> </tr>
            <tr> <td>40+</td> <td>5614</td> <td>143</td> <td>386</td> <td>59.6%</td> </tr>
            <tr> <td>45</td> <td>6035</td> <td>154</td> <td>415</td> <td>59.6%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6459</td> <td>164</td> <td>444</td> <td>59.6%</td> </tr>
            <tr> <td>50+</td> <td>7249</td> <td>185</td> <td>499</td> <td>69.2%</td> </tr>
            <tr> <td>55</td> <td>7675</td> <td>195</td> <td>528</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8103</td> <td>206</td> <td>557</td> <td>69.2%</td> </tr>
            <tr> <td>60+</td> <td>8695</td> <td>221</td> <td>598</td> <td>69.2%</td> </tr>
            <tr> <td>65</td> <td>9125</td> <td>232</td> <td>628</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9557</td> <td>243</td> <td>657</td> <td>69.2%</td> </tr>
            <tr> <td>70+</td> <td>10149</td> <td>258</td> <td>698</td> <td>78.8%</td> </tr>
            <tr> <td>75</td> <td>10584</td> <td>270</td> <td>728</td> <td>78.8%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11020</td> <td>281</td> <td>758</td> <td>78.8%</td> </tr>
            <tr> <td>80+</td> <td>11613</td> <td>296</td> <td>799</td> <td>88.4%</td> </tr>
            <tr> <td>85</td> <td>12050</td> <td>307</td> <td>829</td> <td>88.4%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>12491</td> <td>318</td> <td>859</td> <td>88.4%</td> </tr>
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
            <p class="titrePerso">Juge des secrets</p> <!-- Titre -->
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
                  <td class="tdv">12491</td>  <!--Stat-->
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
                  <td class="tdv">859</td>  <!--Stat-->
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
                  <td><img src='img/icon/polearm.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Lupus Aureus</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Temple du silence</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>6/23</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Le général mahamatra chargé de superviser les chercheurs de l'Académie. On dit que lorsqu'il se met au travail, il est encore plus efficace que le grand vayuvyastra fabriqué par le Kshahrewar.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/polearm.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Lance d'invocation</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 coups de lance.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour charger en ligne droite et infliger des DGT aux ennemis sur la route.</p> <!--Attaque #2-->
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
                  <p>Rite : Traversée abyssale</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Effectue un assaut rapide, infligeant des <span class="electroS">DGT Électro</span> aux ennemis en chemin.<br><br>Lorsque Cyno est sous l'effet d'éclaireur sermenté de son déchaînement élémentaire « Liturgie : Rapidité lupine », il déclenche à la place un <span class="spanImp"></span>rite mortuaire qui inflige de tonitruants <span class="electroS">DGT Électro de zone</span> et prolonge la durée d'éclaireur sermenté.<br><br><span class="italic">« Ce jugement ne tolère aucun choix. Il n'y a ici ni rejet ni acceptation... Nous sommes tous deux liés depuis longtemps à cette conviction. »</span></p> <!--Description-->
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
                  <p>Liturgie : Rapidité lupine</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Invoque un esprit divin pour le posséder, se transformant en éclaireur sermenté.<br><br><span class="spanImp">Éclaireur sermenté</span><br>· Les DGT infligés par les attaques normales, chargées ou plongeantes de Cyno seront convertis en <span class="electroS">DGT Électro</span> ne pouvant pas être enchantés.<br>· La maîtrise élémentaire et la RÉS à l'interruption de Cyno augmentent et il devient immunisé contre les DGT infligés par les réactions d'Électrocution.<br><br>Ces effets cessent lorsque Cyno quitte le champ de bataille ou après une durée de 18 s.<br><br><span class="italic">Les rites secrets transmis au sein de l'ancienne nation sont comme un jugement définitif pour le général mahamatra.<br>Que ce soit maintenant ou dans le passé, qu'il s'agisse d'une tempête ou d'un serpent, personne n'ébranlera la majesté de la loi.</span></p> <!--Description-->
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
                  <p>Jugement des plumes</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Cyno est sous l'effet d'éclaireur sermenté de <span class=spanImp>Liturgie : Rapidité lupine</span>, il entre en posture de prophète final de façon intermittente. S'il utilise <span class="spanImp">Rite : Traversée abyssale</span> dans cette posture, il active l'effet Ordalie, augmentant les DGT infligés par cette utilisation de Rite : Traversée abyssale de 35 % et tirant vers l'avant 3 éclairs de sable qui infligent des <span class="electroS">DGT Électro</span> d'une valeur équivalant à 100 % de son ATQ.<br>Les DGT infligés par les éclairs de sable sont considérés comme des DGT de compétence élémentaire.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Autorité sur les neuf arcs</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les DGT de certaines attaques de Cyno augmentent selon sa maîtrise élémentaire :<br>· Les DGT de ses attaques normales sous l'effet d'éclaireur sermenté augmentent d'une valeur équivalant à 150 % de sa maîtrise élémentaire.<br>· Les DGT des éclairs de sable de son aptitude passive « Jugement des plumes » augmentent d'une valeur équivalant à 250 % de sa maîtrise élémentaire.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Le don du silence</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente les récompenses d'une expédition de 20 h à Sumeru de 25 %.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Sacrement : Vigile incessante</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Après avoir utilisé <span class="spanImp">Liturgie : Rapidité lupine</span>, la VIT d'attaque des attaques normales de Cyno augmente de 20 % pendant 10 s. Si l'effet Ordalie de l'aptitude passive « Jugement des plumes » est déclenché pendant <span class="spanImp">Rite : Traversée abyssale</span>, la durée de cette augmentation est actualisée.<br>L'aptitude passive « Jugement des plumes » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Cérémonie : Retour des esprits</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque l'attaque normale de Cyno a touché un ennemi, son bonus de DGT Électro augmente de 10 % pendant 4 s. Cet effet peut être déclenché une fois toutes les 0,1 s et cumulé 5 fois maximum.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Ordonnance : Exécution légale</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Liturgie : Rapidité lupine</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Protocole : Garde d'interdiction</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Sous l'effet d'éclaireur sermenté de <span class="spanImp">Liturgie : Rapidité lupine</span>, lorsque Cyno a déclenché une réaction d'Électrocution, de Supraconduction, de Surcharge, de Stimulation, de Suractivation, d'Exubérance ou de Dispersion Électro, tous les personnages de l'équipe à proximité (hormis Cyno) récupèrent 3 pts d'énergie élémentaire.<br>Cet effet peut être déclenché 5 fois par utilisation de Liturgie : Rapidité lupine.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Funéraille : Passage de la lumière stellaire</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Rite : Traversée abyssale</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Ascension : Balance de justice</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Après avoir utilisé <span class="spanImp">>Liturgie : Rapidité lupine</span> ou déclenché l'effet Ordalie de l'aptitude passive « Jugement des plumes », Cyno obtient 4 cumuls de rite charognard. En touchant un ennemi avec une attaque normale, Cyno consomme 1 cumul pour tirer un éclair de sable.<br>L'effet Rite charognard dure 8 s, peut être cumulé 8 fois maximum, et est annulé à la fin de l'effet d'éclaireur sermenté de « Liturgie: Rapidité lupine ».<br>L'éclair de sable peut être déclenché une fois toutes les 0,4s de cette manière.<br>L'aptitude passive « Jugement des plumes » doit être déjà débloquée.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=127" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Scarabée.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=186" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=187" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=188" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=189" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=231" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Admonestation.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=232" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Admonestation.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=233" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Admonestation.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=411" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Fruit du tonnerre.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=406" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Mudra du général maléfique.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Cyno - Sérénité2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Cyno - Sérénité</div>  <!--Titre-->
                     <div class="nmDesc">Chaque fois que Cyno tombe dans un silence serein, il envisage un jugement de poids... Ou peut-être envisage-t-il simplement quelque chose d'amusant...</div>  <!--Description-->
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
                     <p><strong>Cœur des balances</strong></p> <!--Titre-->
                     <p>Tenue de Cyno. Cet ensemble affiche la dignité du général mahamatra et les principes justes auxquels il se tient. C'était une pièce assez compliquée à commander en raison de la demande de Cyno pour des ornements de tête sur mesure et elle nécessite donc un entretien régulier.</p> <!--Description-->
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
         background-position: -57rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>