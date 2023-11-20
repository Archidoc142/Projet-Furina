<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Diluc';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 28;"); // Nourriture
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
            <tr> <td>1</td> <td>1011</td> <td>26</td> <td>61</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1347</td> <td>35</td> <td>81</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1769</td> <td>46</td> <td>107</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>2195</td> <td>57</td> <td>133</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2621</td> <td>68</td> <td>158</td> <td>5.0%</td> </tr>
            <tr><td>20+</td> <td>3488</td> <td>90</td> <td>211</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3917</td> <td>101</td> <td>237</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>4349</td> <td>112</td> <td>263</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>4782</td> <td>123</td> <td>289</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5219</td> <td>135</td> <td>315</td> <td>5.0%</td> </tr>
            <tr><td>40+</td> <td>5834</td> <td>151</td> <td>352</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>6272</td> <td>162</td> <td>379</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6712</td> <td>173</td> <td>405</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>7533</td> <td>194</td> <td>455</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>7976</td> <td>206</td> <td>482</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8421</td> <td>217</td> <td>509</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>9036</td> <td>233</td> <td>546</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>9483</td> <td>245</td> <td>573</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9932</td> <td>256</td> <td>600</td> <td>14.6%</td> </tr>
            <tr><td>70+</td> <td>10547</td> <td>272</td> <td>637</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>10999</td> <td>284</td> <td>664</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11453</td> <td>295</td> <td>692</td> <td>19.4%</td> </tr>
            <tr><td>80+</td> <td>12068</td> <td>311</td> <td>729</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>12523</td> <td>323</td> <td>756</td> <td>24.2%</td> </tr>
            <tr class="tdd"><td>90</td> <td>12981</td> <td>335</td> <td>784</td> <td>24.2%</td> </tr>
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
            <p class="titrePerso">Ombre de l'Aurore</p> <!-- Titre -->
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
                  <td class="tdv">12981</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">335</td>  <!--Stat-->
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
                  <td><img src='img/icon/claymore.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Noctua</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Domaine de l'Aurore</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>4/30</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Un jeune noble possédant la plupart des entreprises du vin de Mondstadt. Nul ne saurait sous-estimer sa richesse, sa réputation et ses capacités.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/claymore.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Épée trempée</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 coups d'épée.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance de façon continue pour exécuter une succession d'entailles aussi rapides que tranchantes.<br>L'attaque chargée se termine sur un coup puissant.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact.</p> <!--Attaque #3-->
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
                  <p>Assaut brûlant</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Diluc fait tournoyer sa lourde épée vers l'avant, infligeant des <span class="pyroS">DGT Pyro</span>.<br>Cette attaque peut être enchaînée 3 fois de suite.<br>Elle entre en TdR si l'enchaînement n'est pas assez rapide.<br><br><span class="italic">Chacune de ces attaques représente les valeurs chères à Diluc : justice, courage et responsabilité.</span></p> <!--Description-->
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
                  <p>Aurore</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Diluc érupte en une explosion de flammes qui repoussent les ennemis et leur infligent des <span class="pyroS">DGT Pyro</span>. Les flammes convergent ensuite sur son arme, pour renaître en un phénix qui inflige d'importants <span class="pyroS">DGT Pyro</span> et repousse les ennemis sur sa route. Le phénix explose lorsqu'il atteint sa destination et inflige d'importants <span class="pyroS">DGT Pyro de zone</span>.<br>Les flammes confèrent à l'arme de Diluc un <span class="pyroS">enchantement Pyro</span>.<br><br><span class="italic">Celui qui apporte la lumière doit marcher dans les ténèbres. Les flammes au loin ne sont que le prélude de l'aube à venir.</span></p> <!--Description-->
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
                  <p>Impitoyable</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques chargées de Diluc consomment 50 % d'endurance en moins, et durent 3 s de plus.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Bénédiction du phénix</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Prolonge l'<span class="pyroS">enchantement Pyro</span> d'<span class="spanImp">Aurore</span> de 4 s. Diluc inflige 20 % de <span class="pyroS">DGT Pyro</span> supplémentaires pendant la durée de cet effet.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Légende de l'aurore</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque vous forgez une épée à deux mains, 15 % du minerai utilisé vous sera rendu.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>Conviction</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Diluc inflige 15 % de DGT supplémentaires aux ennemis dont les PV sont supérieurs à 50 %.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>Chaleur des cendres</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'ATQ de Diluc augmente de 10 % et sa VIT d'attaque de 5 % pendant 10 s lorsqu'il subit des DGT.<br>Cet effet peut être cumulé 3 fois maximum et déclenché une fois toutes les 1,5 s.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>Feu et acier</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Assaut brûlant</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>Flamme courante</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Exécuter <span class="spanImp">Assaut brûlant</span> en rythme augmente considérablement les DGT infligés.<br>2 s après le lancement d'Assaut brûlant, les DGT du prochain <span class="spanImp">Assaut brûlant</span> sont augmentés de 40 % pendant 2 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>Phénix, Messager de l'Aube</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Aurore</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>L'épée des flammes brise-nuit</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère aux 2 attaques normales dans les 6 s suivant le lancement d'<span class="spanImp">Assaut brûlant</span> un bonus de 30 % de DGT et de VIT d'attaque normale.<br>De plus, Assaut brûlant n'interrompt plus les enchaînements d'attaques normales.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=46" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Herbe à lampe.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=385" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Graine de feu.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=377" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Plume de Stormterror.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Diluc - Flambée mortelle2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Diluc - Flambée mortelle</div>  <!--Titre-->
                     <div class="nmDesc">Maître Crepus a peint nombre d'aigles de son vivant, mais jamais il n'aurait pu imaginer peindre un jour un aigle brûlant d'un tel feu.</div>  <!--Description-->
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
                     <p><strong>Feu de la nuit</strong></p> <!--Titre-->
                     <p>Tenue de Diluc. Une tenue discrète et élégante digne d'un gentleman.</p> <!--Description-->
                     <img src="img/wish/<?php echo $bddResults['name']; ?>.png" alt="wish"> <!--Tenue image-->
                  </div>
                  <div class="descTenue hidden">
                     <p><strong>Nuit écarlate</strong></p> <!--Titre-->
                     <p>Une tenue que Diluc porte lorsqu'il part en mission secrète. Elle ressemble à une flamme dansante dans l'ombre dont les traces écarlates hanteront les nuits des ennemis pour le restant de leurs jours.</p> <!--Description-->
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