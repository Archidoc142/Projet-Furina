<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Mona';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 48;"); // Nourriture
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
            <tr> <td>1</td> <td>810</td> <td>22</td> <td>51</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1080</td> <td>30</td> <td>68</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1419</td> <td>39</td> <td>89</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>1760</td> <td>49</td> <td>110</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2102</td> <td>58</td> <td>132</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>2797</td> <td>77</td> <td>176</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>3141</td> <td>87</td> <td>197</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>3487</td> <td>96</td> <td>219</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>3835</td> <td>106</td> <td>241</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4185</td> <td>115</td> <td>263</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>4678</td> <td>129</td> <td>294</td> <td>8.0%</td> </tr>
            <tr> <td>45</td> <td>5029</td> <td>139</td> <td>316</td> <td>8.0%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5383</td> <td>148</td> <td>338</td> <td>8.0%</td> </tr>
            <tr> <td>50+</td> <td>6041</td> <td>167</td> <td>379</td> <td>16.0%</td> </tr>
            <tr> <td>55</td> <td>6396</td> <td>176</td> <td>401</td> <td>16.0%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6752</td> <td>186</td> <td>424</td> <td>16.0%</td> </tr>
            <tr> <td>60+</td> <td>7246</td> <td>200</td> <td>455</td> <td>16.0%</td> </tr>
            <tr> <td>65</td> <td>7604</td> <td>210</td> <td>477</td> <td>16.0%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>7964</td> <td>220</td> <td>500</td> <td>16.0%</td> </tr>
            <tr><td>70+</td> <td>8458</td> <td>233</td> <td>531</td> <td>24.0%</td> </tr>
            <tr> <td>75</td> <td>8820</td> <td>243</td> <td>554</td> <td>24.0%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>9184</td> <td>253</td> <td>576</td> <td>24.0%</td> </tr>
            <tr><td>80+</td> <td>9677</td> <td>267</td> <td>607</td> <td>32.0%</td> </tr>
            <tr> <td>85</td> <td>10042</td> <td>277</td> <td>630</td> <td>32.0%</td> </tr>
            <tr class="tdd"><td>90</td> <td>10409</td> <td>287</td> <td>653</td> <td>32.0%</td> </tr>
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
            <p class="titrePerso">Réflexion astrale</p> <!-- Titre -->
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
                  <td class="tdv">10409</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">287</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">653</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M1.217 7c0 3.516 2.875 6.391 6.391 6.391S14 10.517 14 7 11.124.607 7.608.607v2.345a4.03 4.03 0 014.047 4.047 4.03 4.03 0 01-4.047 4.046 4.03 4.03 0 01-4.046-4.046z"/></svg></span>  <!--Icon-->
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
                  <td><img src='img/icon/catalyst.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Astrolabos</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cité de Mondstadt</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>8/31</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Jeune astromancienne mystérieuse, Mona se surnomme elle-même « la grande astromancienne Mona », et fait preuve d'une force singulière et d'une érudition hors norme qui ne désavouent pas cette appellation.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Ondes du destin</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 attaques d'eau qui infligent des <span class="hydroS">DGT Hydro</span>.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour infliger des <span class="hydroS">DGT Hydro de zone</span> après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant ses pouvoirs Hydro, infligeant des DGT aux ennemis en chemin et des <span class="hydroS">DGT Hydro de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Mirage aqueux</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Mona invoque un mirage du destin créé à partir de projections aqueuses.<br><br><span class="spanImp">Mirage</span><br>Le mirage a les effets suivants :<br>· Nargue les ennemis proches et attire leur attention.<br>· Inflige des <span class="hydroS">DGT Hydro</span> continus aux ennemis proches.<br>· Lorsque le mirage prend fin, il explose et inflige des <span class="hydroS">DGT Hydro de zone</span>.<br><br><span class="spanImp">Appui long</span><br>Mona utilise la puissance de l'eau pour se propulser rapidement en arrière et invoque un mirage du destin.<br>Il ne peut exister qu'un seul mirage à la fois.<br><br><span class="italic">Les astromanciens les plus doués ont toujours rêvé de pouvoir créer un sosie d'eux-mêmes pour pouvoir faire face au danger, mais Mona est sans doute la première à avoir réalisé ce tour de main.</span></p> <!--Description-->
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
                  <p>Vicissitude</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p><span class="spanImp">Sprint alternatif</span><br>Mona consomme de l'endurance pour se déplacer aussi vite qu'un torrent sous la forme d'un courant d'eau.<br><br>Dans l'état Vicissitude, Mona peut se déplacer rapidement sur l'eau.<br>À la fin de l'état, Mona <span class="hydroS">trempe</span> les ennemis proches lorsqu'elle réapparaît.<br><br><span class="italic">Voici une technique que Mona est capable d'effectuer, mais pas son maître. Ce n'est pas comme si cette dernière souhaitait apprendre quoi que ce soit au sujet de l'œil divin Hydro...</span></p> <!--Description-->
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
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A4.png" alt="icon_apt3"> <!--image icon #4-->
                  <p>Voie divine</p> <!--Aptitude #4-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Mona invoque des vagues chatoyantes pour créer un reflet du ciel étoilé, infligeant l'état Bulle nocturne aux ennemis dans un large rayon.<br><br><span class="spanImp"></span>Bulle nocturne<br>Emprisonne les ennemis, et les <span class="trempe"></span>. Les ennemis les plus faibles sont immobilisés.<br>Lorsqu'un ennemi emprisonné subit des DGT, il subit également les effets suivants :<br>· Un présage est appliqué à l'ennemi, qui subit alors une augmentation de DGT, y compris de l'attaque l'ayant provoqué.<br>· L'effet Bulle nocturne disparaît, et inflige des <span class="DGT Hydro"></span> supplémentaires.<br><br><span class="spanImp"></span>Présage<br>Le présage augmente les DGT subis par l'ennemi tant qu'il est actif.<br><br><span class="italic">C'est lorsque le regard des dieux dessina les étoiles que la notion de « destin » naquit.</span></p> <!--Description-->
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
                  <p>Leurre du fatum</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Entrer dans l'état <span class="spanImp">Vicissitude</span> invoque automatiquement un mirage après 2 s en cas de présence d'ennemis proches.<br>Le mirage ainsi invoqué dure 2 s, et ses DGT d'explosion sont équivalents à 50 % des DGT de <span class="spanImp">Mirage aqueux</span>.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #6-->
                  <p>Que le destin décide</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère à Mona un <span class="hydroS">bonus de DGT Hydro</span> équivalant à 20 % de sa recharge d'énergie.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A7.png" alt="icon_pas3">  <!--image icon #7-->
                  <p>Principes d'astromancie</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque vous fabriquez un matériau d'élévation d'arme, il y a 25 % de chances qu'une partie des matières premières vous soit rendue.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Prophétie immersive</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les effets des <span class="hydroS">réactions liées à l'élément Hydro</span> sont renforcés pendant 8 s lorsqu'une attaque de vos personnages dans l'équipe touche un ennemi marqué par un présage :<br>· Les DGT d'Électrocution, d'Évaporation, de Dispersion Hydro augmentent de 15 %.<br>· La durée de Gel augmente de 15 %.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Chaîne lunaire</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques normales ont 20 % de chances d'être suivies par une attaque chargée.<br>Cet effet peut être déclenché une fois toutes les 5 s.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Révolution éternelle</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Voie divine</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Prophétie de la fin</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente le taux CRIT de 15 % lorsque vos personnages dans l'équipe attaquent un ennemi marqué par un présage.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Un tour du destin</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Mirage aqueux</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Rhétorique de l'adversité</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Dans l'état <span class="spanImp">Vicissitude</span>, Mona obtient un bonus de 60 % de DGT pour sa prochaine attaque chargée à chaque seconde passée à se déplacer.<br>Cet effet peut être cumulé 3 fois maximum (bonus de 180 %) et dure 8 s.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=32" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Champignon anémophile.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=206" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Résistance.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=207" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Résistance.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=208" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Résistance.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=386" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Cœur d'eau pure.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=381" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Nectar élémentaire.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Mona - Astromancie2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Mona - Astromancie</div>  <!--Titre-->
                     <div class="nmDesc">Contemplant le reflet des étoiles sur la surface de l'eau la jeune fille médite sur les joies et peines de la vie.</div>  <!--Description-->
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
                     <img src="img/perso/<?php echo $bddResults['name']; ?>2.png" alt="icon_perso" class="c5 pointer iconPerso"> <!--Icon Personnage-->
                  </div>
                  <div class="poppinsLight">
                     <div class="descTenue">
                     <p><strong>Fluide destinée</strong></p> <!--Titre-->
                     <p>Tenue de Mona. Un vêtement d'astromancienne simple et bon marché. Visiblement, des économies ont été faites au niveau de la quantité de tissu utilisée.</p> <!--Description-->
                     <img src="img/wish/<?php echo $bddResults['name']; ?>.png" alt="wish"> <!--Tenue image-->
                  </div>
                  <div class="descTenue hidden">
                     <p><strong>Pacte des étoiles et de la lune</strong></p> <!--Titre-->
                     <p>La tenue de Mona. Un costume spécialement conçu pour englober le concept astrologique du « moment destiné », grâce au billet de réduction de 30 % qu'elle a obtenu grâce au remboursement du planétarium.</p> <!--Description-->
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
         background-position: -56rem -8rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>