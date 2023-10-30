<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Tartaglia';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 82;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Bonus de DGT Hydro<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1020</td> <td>23</td> <td>63</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1360</td> <td>31</td> <td>85</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1786</td> <td>41</td> <td>111</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>2216</td> <td>51</td> <td>138</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2646</td> <td>61</td> <td>165</td> <td>0%</td> </tr>
            <tr> <td>20+</td> <td>3521</td> <td>81</td> <td>219</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>3954</td> <td>91</td> <td>246</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>4390</td> <td>101</td> <td>273</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>4827</td> <td>111</td> <td>300</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5268</td> <td>121</td> <td>328</td> <td>0.0%</td> </tr>
            <tr> <td>40+</td> <td>5889</td> <td>135</td> <td>366</td> <td>7.2%</td> </tr>
            <tr> <td>45</td> <td>6331</td> <td>146</td> <td>394</td> <td>7.2%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6776</td> <td>156</td> <td>421</td> <td>7.2%</td> </tr>
            <tr> <td>50+</td> <td>7604</td> <td>175</td> <td>473</td> <td>14.4%</td> </tr>
            <tr> <td>55</td> <td>8051</td> <td>185</td> <td>501</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8500</td> <td>195</td> <td>528</td> <td>14.4%</td> </tr>
            <tr> <td>60+</td> <td>9121</td> <td>210</td> <td>567</td> <td>14.4%</td> </tr>
            <tr> <td>65</td> <td>9572</td> <td>220</td> <td>595</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>10025</td> <td>231</td> <td>623</td> <td>14.4%</td> </tr>
            <tr> <td>70+</td> <td>10647</td> <td>245</td> <td>662</td> <td>21.6%</td> </tr>
            <tr> <td>75</td> <td>11103</td> <td>255</td> <td>690</td> <td>21.6%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11561</td> <td>266</td> <td>719</td> <td>21.6%</td> </tr>
            <tr> <td>85</td> <td>12641</td> <td>291</td> <td>786</td> <td>28.8%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>13103</td> <td>301</td> <td>815</td> <td>28.8%</td> </tr>
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
            <p class="titrePerso">Jeune Sire</p> <!-- Titre -->
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
                  <td class="tdv">13103</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">301</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">815</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M2.923 12.245l.253.13a7.943 7.943 0 003.89.963 3.753 3.753 0 00.487-7.464 3.6 3.6 0 00-1.691.132.938.938 0 01-.716-1.732 4.3 4.3 0 011.48-.366 4.912 4.912 0 015.049 3.446 4.933 4.933 0 01-2.517 5.764c4.218-1.543 4.723-7.809.812-10.017a5.342 5.342 0 00-3.437-.829 5.506 5.506 0 00-3.65 1.775 6.606 6.606 0 00-.416.524.873.873 0 01-.927.337.929.929 0 01-.781-.638.881.881 0 01.1-.684 6.158 6.158 0 011.363-1.721A7.091 7.091 0 016.136.081a6.933 6.933 0 016.848 3.359c2.683 4.1-.263 9.987-5.094 10.472a6.838 6.838 0 01-3.241-.343 3.994 3.994 0 01-1.726-1.324zm5.516-.119a2.044 2.044 0 01-2.35.064 1.5 1.5 0 01-.007-2.613.949.949 0 011.433.505c.77 2.06 2.637.147 1.424-1.246a2.385 2.385 0 00-2.17-.95 2.486 2.486 0 10.784 4.891 2.393 2.393 0 001.52-1.151c-.21.166-.41.351-.634.5zM2.21 9.521a.663.663 0 10.663.663.663.663 0 00-.663-.663zM.959 6.133a.958.958 0 10.957.957.958.958 0 00-.957-.957z"/></svg></span>  <!--Icon-->
                     <p>Bonus de DGT Hydro</p>  <!--Stat-->
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
                  <td><img src='img/icon/bow.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Monoceros Caeli</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Fatui</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>7/20</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Le 11e Exécuteur des Fatui, appelé « Tartaglia ». Il s'est fait connaître pour avoir gagné des milliers de combats.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Taille du torrent</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 6 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un <span class="spanImp">tir visé</span> plus précis et infligeant davantage de DGT.<br>Lors de la visée, la flèche se charge en élément Hydro, infligeant des <span class="hydroS">DGT Hydro</span> quand elle est complètement chargée et qu'elle touche ; elle inflige également aux ennemis touchés l'effet Contre-courant.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Contre-courant</span>
                  <p>Les ennemis affectés par cet effet subissent l'un des types de <span class="hydroS">DGT Hydro de zone</span> suivants lorsque Tartaglia attaque ; les DGT infligés par ces effets sont considérés comme des DGT d'attaque normale.<br>· Contre-courant : Flash : Les tirs visés complètement chargés touchant les ennemis affectés par Contre-courant infligent des DGT de zone consécutifs. Contre-courant : Flash peut être déclenché une fois toutes les 0,7 s.<br>· Contre-courant : Éclat : Vaincre un ennemi affecté par Contre-courant provoque une onde qui inflige l'effet Contre-courant aux ennemis proches.</p> <!--Attaque #3-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l'impact.<br>Impossible d'utiliser l'attaque plongeante lors de l'activation de Posture du démon : Marée déchaînée (état de mêlée).</p> <!--Attaque #4-->
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
                  <p>Posture du démon : Marée déchaînée</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Tartaglia invoque des armes qui exploitent la puissance de l'eau pure et infligent des <span class="hydroS">DGT Hydro</span> aux ennemis proches, puis passe en état de mêlée.<br>En état de mêlée, les attaques normales et chargées de Tartaglia sont converties en <span class="hydroS">DGT Hydro</span> ne pouvant pas être enchantés, et changent de la manière suivante :<br><br><span class="spanImp">Attaque normale</span><br>Enchaîne jusqu'à 6 entailles <span class="hydroS">Hydro</span> consécutives.<br><br><span class="spanImp">Attaque chargée</span><br>Exécute une frappe croisée rapide et inflige des <span class="hydroS">DGT Hydro</span> ; cette attaque consomme de l'endurance.<br><br><span class="spanImp">Contre-courant : Entaille</span><br>Les attaques de mêlée appliquent à nouveau l'effet Contre-courant lorsqu'elles touchent un ennemi affecté par Contre-courant. Ceci inflige des <span class="hydroS">DGT Hydro de zone</span>. Les DGT infligés par Contre-courant : Entaille sont considérés comme des DGT de compétence élémentaire. Contre-courant : Entaille peut être déclenché une fois toutes les 1,5 s.<br><br>La compétence prend fin après 30 s, ou lorsque vous appuyez dessus à nouveau. Tartaglia repasse alors en état à distance ; le TdR de la compétence est réinitialisé, et dure plus longtemps si l'état de mêlée a perduré.<br>L'état de mêlée ne peut excéder 30 s. Au bout de cette durée, Tartaglia repasse automatiquement à l'état à distance.<br><br><span class="italic">C'est pour venir à bout de ses difficultés avec cette arme que Tartaglia a choisi l'arc comme arme de prédilection. Mais... C'est sur le champ de bataille que sa vraie puissance se déchaîne.</span></p> <!--Description-->
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
                  <p>Ravage : Oblitération</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Tartaglia effectue différentes attaques selon l'état dans lequel il se trouve :<br><br><span class="spanImp">État à distance : Éclair de balle maléfique</span><br>Tire rapidement devant lui une flèche gorgée de magie Hydro, infligeant des <span class="hydroS">DGT Hydro de zone</span> ainsi que l'effet Contre-courant aux ennemis en face.<br>Restaure une partie de l'énergie élémentaire à la fin de l'attaque.<br><br><span class="spanImp">État de mêlée : Lumière d'élimination</span><br>Exécute une large entaille circulaire, qui inflige d'importants <span class="hydroS">DGT Hydro</span> à tous les ennemis proches et peut générer l'effet Torrent.<br><br><span class="spanImp">Contre-courant : Torrent</span><br>Lorsqu'elle touche un ennemi affecté par Contre-courant, Lumière d'élimination consomme cet effet et inflige des <span class="hydroS">DGT Hydro de zone</span>. Les DGT infligés par Contre-courant : Torrent sont considérés comme des DGT de déchaînement élémentaire.<br><br><span class="italic">L'eau qui coule n'est pas une vision courante dans son pays de neige ; peut-être que seul celui capable de saisir l'eau qui fuit entre les doigts est capable de comprendre comme elle est précieuse.</span></p> <!--Description-->
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
                  <p>Fin infinie</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Prolonge la durée de l'effet Contre-courant de 8 s.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Épée hydromorphe</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les ennemis subissant des coups CRIT lors d'attaques normales et chargées sont aussi affectés par l'effet Contre-courant tant que l'état de mêlée de <span class="spanImp">Posture du démon : Marée déchaînée</span> est actif.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Maîtrise de l'armement</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente le niveau des <span class="spanImp">attaques normales</span> de vos personnages dans l'équipe de 1.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Posture du démon : Vague au calme</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Réduit le TdR de <span class="spanImp">Posture du démon : Marée déchaînée</span> de 20 %.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Posture du démon : Courant souterrain</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Vaincre un ennemi affecté par Contre-courant restaure 4 pts d'énergie élémentaire à Tartaglia.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Chaos de l'Abîme : Vortex d'agitation</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Posture du démon : Marée déchaînée</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Chaos de l'Abîme : Fleur de l'eau condensée</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Tartaglia est dans l'état de mêlée de <span class="spanImp">Posture du démon : Marée déchaînée</span>, un Contre-courant : Entaille est déclenché contre les ennemis affectés par l'effet Contre-courant toutes les 4 s ; sinon, il déclenche un Contre-courant : Flash.<br>Les Contre-courant : Entaille et Contre-courant : Flash déclenchés par cette constellation ne sont pas influencés par les intervalles de déclenchement de ces deux effets Contre-courant, et n'affectent pas leur propre intervalle de déclenchement.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Ravage : Lame sans forme</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Ravage : Oblitération</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Ravage : Annihilation</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>En état de mêlée, l'activation de <span class="spanImp">Ravage : Oblitération</span> supprime le TdR de <span class="spanImp">Posture du démon : Marée déchaînée</span>.<br>Cet effet se produit après le retour à l'état à distance.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=40" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Conque d'étoile.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=203" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Liberté.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=204" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Liberté.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=205" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Liberté.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=386" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Cœur d'eau pure.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=388" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Fragment du démon.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Tartaglia - Posture du démon2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Tartaglia - Posture du démon</div>  <!--Titre-->
                     <div class="nmDesc">Ce thème porte les marques du jeune et fier guerrier qui promène son style de combat toujours changeant à travers le continent. Mais sa « Posture du démon » n'est pas une technique de sa création : elle lui fut enseignée par une fille solitaire qui vit dans les plus sombres recoins de l'univers...</div>  <!--Description-->
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
                     <p><strong>Lames de gloire</strong></p> <!--Titre-->
                     <p>Tenue de Tartaglia. Un costume altier symbolisant la position du 11e Exécuteur des Fatui.</p> <!--Description-->
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