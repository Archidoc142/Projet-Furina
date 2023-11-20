<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Wriothesley';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 255;"); // Nourriture
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
            <tr> <td>1</td> <td>1058</td> <td>24</td> <td>59</td> <td>50.0%</td> </tr>
            <tr> <td>5</td> <td>1411</td> <td>32</td> <td>79</td> <td>50.0%</td> </tr>
            <tr> <td>10</td> <td>1853</td> <td>42</td> <td>104</td> <td>50.0%</td> </tr>
            <tr> <td>15</td> <td>2298</td> <td>53</td> <td>129</td> <td>50.0%</td> </tr>
            <tr class="tdd"><td>20</td> <td>2745</td> <td>63</td> <td>154</td> <td>50.0%</td> </tr>
            <tr> <td>20+</td> <td>3652</td> <td>84</td> <td>205</td> <td>50.0%</td> </tr>
            <tr> <td>25</td> <td>4102</td> <td>94</td> <td>230</td> <td>50.0%</td> </tr>
            <tr> <td>30</td> <td>4554</td> <td>104</td> <td>256</td> <td>50.0%</td> </tr>
            <tr> <td>35</td> <td>5008</td> <td>115</td> <td>281</td> <td>50.0%</td> </tr>
            <tr class="tdd"><td>40</td> <td>5465</td> <td>125</td> <td>307</td> <td>50.0%</td> </tr>
            <tr> <td>40+</td> <td>6110</td> <td>140</td> <td>343</td> <td>59.6%</td> </tr>
            <tr> <td>45</td> <td>6568</td> <td>150</td> <td>369</td> <td>59.6%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>7029</td> <td>161</td> <td>395</td> <td>59.6%</td> </tr>
            <tr> <td>50+</td> <td>7889</td> <td>180</td> <td>443</td> <td>69.2%</td> </tr>
            <tr> <td>55</td> <td>8352</td> <td>191</td> <td>469</td> <td>69.2%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8818</td> <td>202</td> <td>495</td> <td>69.2%</td> </tr>
            <tr> <td>60+</td> <td>9462</td> <td>216</td> <td>531</td> <td>69.2%</td> </tr>
            <tr> <td>65</td> <td>9930</td> <td>227</td> <td>558</td> <td>69.2%</td> </tr>
            <tr class="tdd"><td>70</td> <td>10400</td> <td>238</td> <td>584</td> <td>69.2%</td> </tr>
            <tr> <td>70+</td> <td>11045</td> <td>253</td> <td>620</td> <td>78.8%</td> </tr>
            <tr> <td>75</td> <td>11518</td> <td>263</td> <td>647</td> <td>78.8%</td> </tr>
            <tr class="tdd"><td>80</td> <td>11993</td> <td>274</td> <td>673</td> <td>78.8%</td> </tr>
            <tr> <td>80+</td> <td>12637</td> <td>289</td> <td>710</td> <td>88.4%</td> </tr>
            <tr> <td>85</td> <td>13114</td> <td>300</td> <td>736</td> <td>88.4%</td> </tr>
            <tr class="tdd"><td>90</td> <td>13593</td> <td>311</td> <td>763</td> <td>88.4%</td> </tr>
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
            <p class="titrePerso">Émissaire de l'iniquité solitaire</p> <!-- Titre -->
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
                  <td class="tdv">13593</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">311</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">763</td>  <!--Stat-->
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
                  <td>Cerberus</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Forteresse de Méropide</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>11/23</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Le duc de la Forteresse de Méropide est dans l'ombre le seigneur des profondeurs troubles.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Poing vigoureux du givre</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Condense du givre sur son poing et déclenche un puissant <span class="spanImp">poing de réprimande</span>, enchaînant jusqu'à 5 attaques rapides qui infligent des <span class="cryoS">DGT Cryo</span>.<br>De plus, l'enchaînement d'attaques normales ne sera pas réinitialisé pendant une courte période après la compétence élémentaire « Ruée glaciale du croc » ou l'initiation d'un sprint.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour sauter et déclencher un <span class="spanImp">poing bondissant</span> qui inflige des <span class="cryoS">DGT Cryo de zone</span>.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des <span class="cryoS">DGT Cryo de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Ruée glaciale du croc</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>En ajustant sa respiration, son rythme et sa cadence, Wriothesley sprinte vers l'avant sur une courte distance, entrant dans l'état <span class="spanImp">Châtiment algide</span> qui lui permet de déclencher des attaques encore plus puissantes.<br><br><span class="spanImp">Châtiment algide</span><br>· Augmente la RÉS à l'interruption de Wriothesley.<br>· Lorsque les PV de Wriothesley sont supérieurs à 50 % : le poing de réprimande de l'<span class="spanImp">attaque normale « Poing vigoureux du givre »</span> est renforcé et ses DGT augmentés, et toucher avec ce poing consomme une quantité fixe des PV de Wriothesley, les PV pouvant être perdus une fois toutes les 0,1 s de cette manière.<br>Cet effet cesse lorsque Wriothesley quitte le champ de bataille.<br><br><span class="italic">« Les condamnations passées sont passées. Ce sont nos choix futurs que nous devons appréhender.<br>Si vous ne voulez pas vous faire consumer par les péchés du moment, alors s'il vous plaît, chérissez cet instant. »</span></p> <!--Description-->
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
                  <p>Morsure lupine de l'or</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Activant ses gants de boxe, Wriothesley déclenche un coup droit condensé de givre, puis utilise un impact de stalactite pour infliger plusieurs fois des <span class="cryoS">DGT Cryo de zone</span>.<br><br><span class="spanImp">Arkhe : Ousia</span><br>Après la fin de l'impact de stalactite, une lame fluide descend à l'emplacement de l'ennemi pour infliger des <span class="cryoS">DGT Cryo</span> chargés d'énergie ousia.<br><br><span class="italic">Il y a des choses contre lesquelles même le duc de la Forteresse de Méropide ne peut pas faire grand-chose : par exemple, la paperasserie compliquée, les futilités d'un superviseur ou bien... les petits enfants qui collent toute une série d'autocollants mignons mais difficiles à enlever sur ses gants de boxe...</span></p> <!--Description-->
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
                  <p>Plaidoirie pour la justice</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque les PV de Wriothesley sont inférieurs à 60 %, il obtient une réprimande miséricordieuse qui convertit la prochaine attaque chargée de son <span class="spanImp">attaque normale « Poing vigoureux du givre »</span> en poing bondissant de réprimande : ne consomme pas d'endurance, augmente les DGT infligés de 50 %, et restaure les PV de Wriothesley d'une valeur équivalant à 30 % de ses PV max en touchant.<br>Une réprimande miséricordieuse peut être obtenue une fois toutes les 5 s de cette manière.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Rétribution pour le péché</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque les PV actuels de Wriothesley augmentent ou diminuent et s'il est sous l'effet du châtiment algide accordé par <span class="spanImp">Ruée glaciale du croc</span>, le châtiment algide obtient un cumul d'édit d'accusation. Cet effet peut être cumulé 5 fois maximum, chaque cumul permettant d'augmenter l'ATQ de Wriothesley de 6 %.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Clémence du duc</p> <!--Passif #3-->
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
                  <p>Terreur pour les malfaiteurs</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La réprimande miséricordieuse de l'aptitude passive « Plaidoirie pour la justice » est modifiée :<br>Si les PV de Wriothesley sont inférieurs à 60 % ou s'il est sous l'effet du châtiment algide de <span class="spanImp">Ruée glaciale du croc</span>, il obtient une réprimande miséricordieuse lorsque la 5e attaque du poing de réprimande touche. Une réprimande miséricordieuse peut être obtenue une fois toutes les 2,5 s.<br><br>De plus, le poing bondissant de réprimande obtient les renforcements suivants :<br>· Le bonus de DGT infligés augmente davantage jusqu'à 200 %.<br>· En touchant alors que Wriothesley est sous l'effet d'un châtiment algide, la durée du châtiment se prolonge de 4 s. Une seule prolongation de durée peut avoir lieu par châtiment algide.<br><br>L'aptitude passive « Plaidoirie pour la justice » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>Entrave pour les arrogants</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>En utilisant <span class="spanImp">Morsure lupine de l'or</span>, chaque cumul d'édit d'accusation de l'aptitude passive « Rétribution pour le péché » augmente les DGT infligés de 40 %.<br>L'aptitude passive « Rétribution pour le péché » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>Punition pour les frauduleux</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Attaque normale : Poing vigoureux du givre</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>Rédemption pour les nécessiteux</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les PV que le poing bondissant de réprimande restaure à Wriothesley augmentent à une valeur équivalant à 50 % de ses PV max. L'aptitude passive « Plaidoirie pour la justice » doit être déjà débloquée.<br>De plus, lorsque Wriothesley reçoit un soin et si la quantité du soin dépasse la quantité maximum que Wriothesley peut recevoir, les effets suivants se produisent selon si Wriothesley est déployé ou non : s'il est déployé, sa VIT d'attaque augmente de 20 % pendant 4 s ; s'il fait partie de l'équipe mais n'est pas déployé, la VIT d'attaque de tous vos personnages dans l'équipe augmente de 10 % pendant 6 s. Ces deux effets d'augmentation de VIT d'attaque ne peuvent pas se cumuler.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>Indulgence pour les innocents</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Morsure lupine de l'or</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>Estime pour les irréprochables</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Le taux CRIT du poing bondissant de réprimande augmente de 10 % et ses DGT CRIT de 80 %, et son déclenchement permet de libérer un pic de glace supplémentaire infligeant des <span class="cryoS">DGT Cryo</span> d'une valeur équivalant à 100 % des DGT d'origine. Les DGT infligés de cette manière sont considérés comme des DGT d'attaque chargée.<br>L'aptitude passive « Plaidoirie pour la justice » doit être déjà débloquée.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=138" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Unité de sous-détection.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=246" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Ordre.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=247" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Ordre.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=248" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Ordre.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=363" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Engrenage de maillage.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=364" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Engrenage à coupe droite.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=365" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Engrenage dynamique artificié.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=426" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/« Appareil Tourbillon ».png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Wriothesley - Détention2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Wriothesley - Détention</div>  <!--Titre-->
                     <div class="nmDesc">Maintenir l'ordre à la Forteresse de Méropide n'est pas une mince affaire. Ainsi, une main habile et parfois ferme est nécessaire... avec une petite pincée de cruauté légèrement regrettable.</div>  <!--Description-->
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
                     <p><strong>Murmure nocturne de l'hiver</strong></p> <!--Titre-->
                     <p>Tenue de Wriothesley. Elle rayonne à la fois de dignité et de force, avec une chaîne de loup gris servant de symbole de sa mainmise sur la Forteresse de Méropide.</p> <!--Description-->
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
         background-position: -58rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>