<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Alhaitham';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 208;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Bonus de DGT Dendro<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1039</td> <td>24</td> <td>61</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1385</td> <td>33</td> <td>81</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1819</td> <td>43</td> <td>107</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>2257</td> <td>53</td> <td>132</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2695</td> <td>63</td> <td>158</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>3586</td> <td>84</td> <td>210</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>4028</td> <td>95</td> <td>236</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>4472</td> <td>105</td> <td>262</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>4918</td> <td>115</td> <td>288</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5366</td> <td>126</td> <td>314</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>5999</td> <td>141</td> <td>351</td> <td>7.2%</td> </tr>
            <tr> <td>45</td> <td>6449</td> <td>151</td> <td>378</td> <td>7.2%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6902</td> <td>162</td> <td>404</td> <td>7.2%</td> </tr>
            <tr> <td>50+</td> <td>7747</td> <td>182</td> <td>454</td> <td>14.4%</td> </tr>
            <tr> <td>55</td> <td>8202</td> <td>193</td> <td>480</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8659</td> <td>203</td> <td>507</td> <td>14.4%</td> </tr>
            <tr> <td>60+</td> <td>9292</td> <td>218</td> <td>544</td> <td>14.4%</td> </tr>
            <tr> <td>65</td> <td>9751</td> <td>229</td> <td>571</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>10213</td> <td>240</td> <td>598</td> <td>14.4%</td> </tr>
            <tr><td>70+</td> <td>10846</td> <td>255</td> <td>635</td> <td>21.6%</td> </tr>
            <tr> <td>75</td> <td>11310</td> <td>265</td> <td>662</td> <td>21.6%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11777</td> <td>276</td> <td>690</td> <td>21.6%</td> </tr>
            <tr><td>80+</td> <td>12410</td> <td>291</td> <td>727</td> <td>28.8%</td> </tr>
            <tr> <td>85</td> <td>12877</td> <td>302</td> <td>754</td> <td>28.8%</td> </tr>
            <tr class="tdd"><td>90</td> <td>13348</td> <td>313</td> <td>782</td> <td>28.8%</td> </tr>
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
            <p class="titrePerso">Instruction d'admonestation</p> <!-- Titre -->
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
                  <td class="tdv">313</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">782</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="32" height="32" viewBox="0 0 306 289"><path d="M 145.00,53.00 C 150.48,58.12 159.52,72.12 158.05,80.00 C 156.86,86.34 149.95,94.15 145.00,98.00 C 142.40,95.01 137.17,89.18 135.36,86.00 C 128.72,74.27 138.77,62.54 145.00,53.00 Z M 63.00,87.00 C 70.57,87.00 80.70,85.35 84.28,94.00 C 85.24,96.34 85.79,101.38 86.00,104.00 C 70.12,106.85 65.45,102.90 63.00,87.00 Z M 205.00,104.13 C 205.00,104.13 206.73,94.00 206.73,94.00 C 210.19,85.36 220.51,87.00 228.00,87.00 C 227.09,92.93 225.20,101.82 218.98,104.13 C 215.12,105.78 209.05,104.53 205.00,104.13 Z M 76.00,146.00 C 76.00,146.00 75.10,136.00 75.10,136.00 C 75.92,117.55 84.24,101.39 102.00,94.21 C 105.08,92.96 108.70,91.58 112.00,91.18 C 119.83,90.23 127.45,91.97 134.00,96.36 C 136.55,98.08 140.25,100.61 140.41,104.00 C 140.52,106.21 139.07,108.20 138.00,110.00 C 130.12,105.64 127.92,99.61 115.00,100.04 C 98.32,100.60 83.14,117.34 84.09,134.00 C 84.47,140.56 86.34,147.14 89.27,153.00 C 100.02,174.48 115.01,174.05 132.00,185.52 C 139.65,190.68 140.66,193.11 146.00,200.00 C 153.76,184.19 168.32,181.59 182.00,173.83 C 188.16,170.33 195.81,163.00 199.53,157.00 C 211.36,137.94 209.81,114.18 188.00,103.28 C 184.06,101.30 180.43,100.19 176.00,100.04 C 163.08,99.61 160.88,105.64 153.00,110.00 C 151.93,108.20 150.48,106.21 150.59,104.00 C 150.74,100.93 153.68,98.68 156.00,97.10 C 162.10,92.98 169.61,90.44 177.00,91.17 C 195.19,92.96 209.38,105.41 214.08,123.00 C 216.83,133.33 215.80,136.10 215.00,146.00 C 224.84,140.09 225.64,141.18 235.00,147.00 C 227.68,155.61 222.55,153.84 215.00,147.00 C 211.77,162.99 203.63,173.54 190.00,182.30 C 178.95,189.41 167.32,193.12 157.01,202.29 C 150.16,208.39 149.08,211.53 145.00,219.00 C 141.51,200.62 117.23,192.03 103.00,183.55 C 86.36,173.63 81.20,164.95 76.00,147.00 C 68.45,153.84 63.32,155.61 56.00,147.00 C 64.97,141.42 66.49,139.90 76.00,146.00 Z M 107.00,147.00 C 103.00,142.25 98.82,136.56 99.21,130.00 C 100.21,113.37 119.08,108.16 131.00,121.00 C 128.45,121.01 125.42,120.87 123.00,121.70 C 119.47,122.91 116.69,125.60 115.23,129.01 C 110.39,140.28 119.71,151.52 127.00,159.00 C 129.49,161.56 130.91,163.08 133.00,166.00 C 125.61,162.70 112.08,151.89 107.00,151.23 C 102.78,150.67 99.68,152.28 96.00,154.00 C 99.80,149.01 101.22,148.74 107.00,147.00 Z M 161.00,121.00 C 169.87,109.92 186.92,111.56 191.06,126.00 C 193.55,134.67 189.33,140.05 185.00,147.00 C 189.33,148.52 191.58,148.86 194.00,153.00 C 194.00,153.00 184.00,151.24 184.00,151.24 C 184.00,151.24 173.00,157.28 173.00,157.28 C 173.00,157.28 158.00,166.00 158.00,166.00 C 160.09,163.08 161.51,161.56 164.00,159.00 C 171.55,151.24 180.68,140.65 175.77,129.00 C 174.44,125.82 172.25,123.17 168.99,121.89 C 166.55,120.94 163.58,121.02 161.00,121.00 Z"/></svg></span>  <!--Icon-->
                     <p>Bonus de DGT Dendro</p>  <!--Stat-->
                  </td>
                  <td class="tdv">28.8%</td>  <!--Stat-->
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
                  <td>Vultur Volans</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Académie de Sumeru</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>2/11</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">L'actuel scribe de l'Académie de Sumeru, doté d'une intelligence et d'un talent extraordinaires. Son goût pour une vie libre de contraintes est tel qu'il est difficile pour la plupart des gens de savoir où le trouver.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/sword.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Raisonnement abductif</p> <!--Aptitude #1-->
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
                  <p>Universalité : Élaboration de forme</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Se précipite en avant pour infliger des <span class="dendroS">DGT Dendro</span> aux ennemis proches à la fin de sa ruée et génère un miroir de diffraction.<br>En cas d'appui long, la compétence est déclenchée différemment.<br><br><span class="spanImp">Appui long</span><br>Bascule en mode visée, ce qui permet d'ajuster la direction de la ruée.<br><br><span class="spanImp">Miroir de diffraction</span><br>Alhaitham génère 1 miroir de diffraction lors de l'utilisation de cette compétence. Si aucun miroir n'est présent à ce moment-là, il génère 1 miroir supplémentaire. Les miroirs de diffraction ont les propriétés suivantes :<br>· Lorsqu'il possède des miroirs de diffraction, les DGT des attaques normales, chargées et plongeantes d'Alhaitham sont converties en <span class="dendroS">DGT Dendro</span> ne pouvant pas être enchantés.<br>· Lorsqu'une attaque des types susmentionnés touche un ennemi, les miroirs de diffraction déclenchent une attaque de rayonnement qui inflige des <span class="dendroS">DGT Dendro de zone</span> selon la quantité de miroirs présents.<br>· Un maximum de 3 miroirs de diffraction peut exister en même temps.<br>· Les miroirs de diffraction disparaissent les uns après les autres au fur et à mesure, ou tous d'un coup lorsqu'Alhaitham quitte le champ de bataille.<br><br><span class="italic">Miroir de diffraction« La vérité existe intrinsèquement au milieu de l'incertitude. Même les plus grands savants ne sont pas à l'abri de l'erreur. »</span></p> <!--Description-->
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
                  <p>Champ particulier : Liens de phénomène</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Crée un champ de liaison particulier qui inflige plusieurs fois des <span class="dendroS">DGT Dendro de zone</span>.<br>Si des miroirs de diffraction sont présents lors de l'utilisation de cette capacité, ils sont tous consommés pour augmenter le nombre de fois où des DGT sont infligés.<br>2 s après l'utilisation de cette capacité, si 0/1/2/3 miroirs de diffraction ont été consommés, Alhaitham obtient respectivement 3/2/1/0 miroirs de diffraction.<br><br><span class="italic">« Si un chercheur fait de la sagesse son objectif, il doit être prêt à se faire un ennemi de chaque mot qu'il lit : ce n'est qu'alors qu'il peut éviter les préjugés. »</span></p> <!--Description-->
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
                  <p>Correction à quadruple cause</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'une attaque chargée ou plongeante d'Alhaitham touche un ennemi, elle génère 1 miroir de diffraction. Cet effet peut être déclenché une fois toutes les 12 s.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Mystères révélés</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Chaque point de maîtrise élémentaire qu'Alhaitham possède augmente les DGT infligés par les rayonnements et par <span class="spanImp">Champ particulier : Liens de phénomène</span> de 0,1 %.<br>Les DGT des rayonnements et de Champ particulier : Liens de phénomène peuvent être augmentés d'un maximum de 100 % de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Loi de surdétermination réductrice</p> <!--Passif #3-->
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
                  <p>1. Intuition</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'une attaque de rayonnement touche un ennemi, le TdR d'<span class="spanImp">Universalité : Élaboration de forme</span> diminue de 1,2s. Cet effet peut être déclenché une fois toutes les secondes.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Rhétorique</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'Alhaitham génère un miroir de diffraction, sa maîtrise élémentaire augmente de 50 pts pendant 8 s. Cet effet peut être cumulé 4 fois maximum, la durée de chaque cumul étant calculée indépendamment. Cet effet peut être déclenché même si le nombre de miroirs de diffraction a atteint la limite.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Antithèse</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Universalité : Élaboration de forme</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Élucidation</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lors de l'utilisation de <span class="spanImp">Champ particulier : Liens de phénomène</span>, les effets suivants se produisent selon le nombre de miroirs de diffraction consommés et générés cette fois-ci :<br>· Chaque miroir consommé augmente la maîtrise élémentaire de tous les autres personnages de l'équipe à proximité de 30 pts pendant 15 s.<br>· Chaque miroir généré accorde à Alhaitham un <span class="dendroS">bonus de DGT Dendro</span> de 10 % pendant 15 s.<br><br>Les effets susmentionnés déjà existants sont annulés si vous utilisez à nouveau Champ particulier : Liens de phénomène pendant leur durée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Sagacité</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Champ particulier : Liens de phénomène</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Structuration</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Alhaitham bénéficie des effets suivants :<br>· 2 s après l'utilisation de <span class="spanImp">Champ particulier : Liens de phénomène</span>, il génère 3 miroirs de diffraction, peu importe le nombre de miroirs consommés.<br>· Si Alhaitham génère un miroir de diffraction alors que leur nombre a déjà atteint le maximum, il augmente son taux CRIT de 10 % et ses DGT CRIT de 70 % pendant 6 s. Lorsque cet effet se déclenche à nouveau alors que sa durée n'est pas écoulée, la durée augmente de 6s.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=124" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Pupe graisseuse des sables.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=182" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat d'émeraude nagadus.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=183" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment d'émeraude nagadus.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=184" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau d'émeraude nagadus.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=185" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre d'émeraude nagadus.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=234" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Ingénuité.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=235" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Ingénuité.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=236" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Ingénuité.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=345" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Satin rouge délavé.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=346" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Soie rouge brodée.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=347" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Brocart rouge luxueux.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=418" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Pseudo-étamines.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=416" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Miroir de mushin.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Alhaitham - Érudition2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Alhaitham - Érudition</div>  <!--Titre-->
                     <div class="nmDesc">« Les seules choses auxquelles les chercheurs doivent se conformer sont les débats et la dialectique. Ce n'est qu'en remettant tout en question à tout moment que l'on peut éviter de tomber dans les préjugés. »</div>  <!--Description-->
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
                     <p><strong>Le rationnel</strong></p> <!--Titre-->
                     <p>Tenue d'Alhaitham. « Ne dérangez pas le scribe avec des futilités... À quoi pensez-vous que sert son phono-isolateur, de toute façon ? »\n— Observation d'un employé expérimenté du Temple du silence</p> <!--Description-->
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