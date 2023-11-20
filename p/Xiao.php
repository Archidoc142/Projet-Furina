<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Xiao';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 61;"); // Nourriture
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
            <tr> <td>1</td> <td>991</td> <td>27</td> <td>62</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1322</td> <td>36</td> <td>83</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1736</td> <td>48</td> <td>109</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>2153</td> <td>59</td> <td>135</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2572</td> <td>71</td> <td>161</td> <td>5.0%</td> </tr>
            <tr><td>20+</td> <td>3422</td> <td>94</td> <td>215</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3843</td> <td>105</td> <td>241</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>4267</td> <td>117</td> <td>268</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>4692</td> <td>129</td> <td>294</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5120</td> <td>140</td> <td>321</td> <td>5.0%</td> </tr>
            <tr><td>40+</td> <td>5724</td> <td>157</td> <td>359</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>6154</td> <td>169</td> <td>386</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6586</td> <td>181</td> <td>413</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>7391</td> <td>203</td> <td>464</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>7825</td> <td>215</td> <td>491</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8262</td> <td>227</td> <td>519</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>8866</td> <td>243</td> <td>556</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>9304</td> <td>255</td> <td>584</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9744</td> <td>267</td> <td>612</td> <td>14.6%</td> </tr>
            <tr><td>70+</td> <td>10348</td> <td>284</td> <td>649</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>10791</td> <td>296</td> <td>677</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11236</td> <td>308</td> <td>705</td> <td>19.4%</td> </tr>
            <tr><td>80+</td> <td>11840</td> <td>325</td> <td>743</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>12287</td> <td>337</td> <td>771</td> <td>24.2%</td> </tr>
            <tr class="tdd"><td>90</td> <td>12736</td> <td>349</td> <td>799</td> <td>24.2%</td> </tr>
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
            <p class="titrePerso">Gardien Yaksha</p> <!-- Titre -->
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
                  <td class="tdv">12736</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">349</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">799</td>  <!--Stat-->
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
                  <td><img src='img/icon/polearm.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Alatus Nemeseos</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Adeptes de Liyue</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>4/17</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Un des Adeptes de Liyue, aussi connu sous le nom de « Dompteur de démons » et « Général des Yakshas ».</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/polearm.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Coup de tourbillon</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 6 coups de lance.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour déclencher une attaque ascendante.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact.<br>Xiao ne subit pas de DGT lorsqu'il exécute une attaque plongeante.</p> <!--Attaque #3-->
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
                  <p>Cycle du vent lemniscatique</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Xiao se précipite vers l'avant, infligeant des <span class="anemoS">DGT Anémo</span> aux ennemis sur sa route.<br>Fonctionne aussi dans les airs.<br>Xiao commence avec 2 charges.<br><br><span class="italic">La légende d'un lointain pays raconte qu'un jour, le monde périra entre deux roues à aubes. La maîtrise totale de la lance permet à Xiao d'écraser ses ennemis, à l'image des roues légendaires écrasant le monde.</span></p> <!--Description-->
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
                  <p>Fléau du mal</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Xiao revêt le Masque du Yaksha, qui, il y a bien longtemps, fit trembler dieux et démons.<br><br><span class="spanImp">Masque du Yaksha</span><br>· Améliore considérablement la capacité de saut de Xiao.<br>· Augmente la portée et les DGT d'attaque.<br>· Les DGT d'attaque sont convertis en <span class="anemoS">DGT Anémo</span> ne pouvant pas être enchantés.<br><br>Cet effet consomme des PV de façon continue.<br><br>L'état prend fin lorsque Xiao quitte le champ de bataille.<br><br><span class="italic">En revêtant le Masque du Yaksha, Xiao prend la forme terrifiante du Gardien Yaksha Dompteur de démons. Mais un tel pouvoir a un prix... Aussi l'appelle-t-on : le Fléau du mal.</span></p> <!--Description-->
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
                  <p>Dompteur de démons : Conquérant du mal</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Xiao inflige 5 % de DGT supplémentaires tant que <span class="spanImp">Fléau du mal</span> est actif. Un cumul de 5 % de DGT supplémentaires est ensuite appliqué toutes les 3 s tant que dure la compétence.<br>Cumul maximum : 25 % de DGT supplémentaires.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Dissolution d'éon : Chute des cieux</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Cycle du vent lemniscatique</span> inflige 15 % de DGT en plus lorsqu'il est relancé dans les 7 s.<br>Cet effet dure 7 s et peut être cumulé 3 fois maximum. Le délai est réinitialisé à chaque nouveau cumul.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Transcendance : Contrôleur de gravité</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Diminue la consommation d'endurance de vos personnages dans l'équipe de 20 % lors de l'escalade.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Dissolution d'éon : Destructeur de mondes</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère une utilisation supplémentaire de <span class="spanImp">Cycle du vent lemniscatique</span>.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Annihilation d'éon : Fleur du kaléidoscope</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La recharge d'énergie de Xiao augmente de 25 % lorsqu'il fait partie de l'équipe mais n'est pas déployé.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Dompteur de démons : Déité de la colère</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Cycle du vent lemniscatique</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Transcendance : Extinction de la souffrance</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Xiao bénéficie d'un bonus de DÉF de 100 % quand ses PV sont inférieurs à 50 %.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Évolution d'éon : Origine de l'ignorance</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Fléau du mal</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Dompteur de démons : Gardien Yaksha</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque <span class="spanImp">Fléau du mal</span> est actif, les attaques plongeantes touchant au moins 2 ennemis confèrent immédiatement un cumul de <span class="spanImp">cycle du vent lemniscatique</span> supplémentaire, qui peut être activé dans la seconde qui suit même s'il n'est pas entièrement rechargé.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=38" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Fleur de Qingxin.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=390" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Jade juvénile.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=349" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Ombre du guerrier.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Xiao - Masque2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Xiao - Masque</div>  <!--Titre-->
                     <div class="nmDesc">Il attend avec impatience le jour où il pourra porter le masque et danser non pas pour conquérir des démons mais au son de cette fameuse flûte, dans un océan de fleurs.</div>  <!--Description-->
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
                     <p><strong>Passage du millénaire</strong></p> <!--Titre-->
                     <p>Tenue de Xiao. Un habit de combat classique ayant été témoin de la chute de plus d'un démon.</p> <!--Description-->
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
         background-position: -55rem -16rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>