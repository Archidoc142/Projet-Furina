<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Collei';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 185;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>ATQ</td></tr>
            <tr>  <td>1</td>                <td>821</td>   <td>17</td>   <td>50</td>   <td>0.0%</td>   </tr>
            <tr>  <td>5</td>                <td>1091</td>   <td>22</td>   <td>67</td>   <td>0.0%</td>   </tr>
            <tr>  <td>10</td>               <td>1430</td>   <td>29</td>   <td>88</td>   <td>0.0%</td>   </tr>
            <tr>  <td>15</td>               <td>1769</td>   <td>36</td>   <td>109</td>   <td>0.0%</td>   </tr>
            <tr class="tdd"><td>20</td>     <td>2108</td>   <td>43</td>   <td>129</td>   <td>0.0%</td>   </tr>
            <tr>  <td>20+</td>              <td>2721</td>   <td>56</td>   <td>167</td>   <td>0.0%</td>   </tr>
            <tr>  <td>25</td>               <td>3060</td>   <td>62</td>   <td>188</td>   <td>0.0%</td>   </tr>
            <tr>  <td>30</td>               <td>3398</td>   <td>69</td>   <td>209</td>   <td>0.0%</td>   </tr>
            <tr>  <td>35</td>               <td>3737</td>   <td>76</td>   <td>229</td>   <td>0.0%</td>   </tr>
            <tr class="tdd"><td>40</td>     <td>4076</td>   <td>83</td>   <td>250</td>   <td>0.0%</td>   </tr>
            <tr>  <td>40+</td>              <td>4512</td>   <td>92</td>   <td>277</td>   <td>6.0%</td>   </tr>
            <tr>  <td>45</td>               <td>4851</td>   <td>99</td>   <td>298</td>   <td>6.0%</td>   </tr>
            <tr class="tdd"><td>50</td>     <td>5189</td>   <td>106</td>   <td>318</td>   <td>6.0%</td>   </tr>
            <tr>  <td>50+</td>              <td>5770</td>   <td>118</td>   <td>354</td>   <td>12.0%</td>   </tr>
            <tr>  <td>55</td>               <td>6109</td>   <td>125</td>   <td>375</td>   <td>12.0%</td>   </tr>
            <tr class="tdd"><td>60</td>     <td>6448</td>   <td>132</td>   <td>396</td>   <td>12.0%</td>   </tr>
            <tr>  <td>60+</td>              <td>6884</td>   <td>140</td>   <td>422</td>   <td>12.0%</td>   </tr>
            <tr>  <td>65</td>               <td>7222</td>   <td>147</td>   <td>443</td>   <td>12.0%</td>   </tr>
            <tr class="tdd"><td>70</td>     <td>7561</td>   <td>154</td>   <td>464</td>   <td>12.0%</td>   </tr>
            <tr>  <td>70+</td>              <td>7996</td>   <td>163</td>   <td>491</td>   <td>18.0%</td>   </tr>
            <tr>  <td>75</td>               <td>8335</td>   <td>170</td>   <td>511</td>   <td>18.0%</td>   </tr>
            <tr class="tdd"><td>80</td>     <td>8674</td>   <td>177</td>   <td>532</td>   <td>18.0%</td>   </tr>
            <tr>  <td>80+</td>              <td>9110</td>   <td>186</td>   <td>559</td>   <td>24.0%</td>   </tr>
            <tr>  <td>85</td>               <td>9446</td>   <td>193</td>   <td>580</td>   <td>24.0%</td>   </tr>
            <tr class="tdd"><td>90</td>     <td>9787</td>   <td>200</td>   <td>601</td>   <td>24.0%</td>   </tr>
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
            <p class="titrePerso">Germe de renaissance</p> <!-- Titre -->
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
                  <td class="tdv">9787</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">200</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">601</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M11.53.031a.228.228 0 00-.23.219l.026 1.117-1.928 1.928-1.644-1.643a.228.228 0 00-.322 0l-.73.73a.229.229 0 000 .323l.837.838-7.146 7.154a.451.451 0 00-.135.319 21.172 21.172 0 00-.237 2.953 21.32 21.32 0 002.954-.239.457.457 0 00.312-.136L6.383 10.5a2.843 2.843 0 01-.117-.258l-.002-.006-.002-.01a3.019 3.019 0 01-.186-1.07c0-.352.056-.703.182-1.04l.006-.032.002-.004c.12-.316.296-.618.543-.875.247-.257.55-.454.877-.582A2.7 2.7 0 018.7 6.428a2.72 2.72 0 011.385.373l.353-.354c.183.166.319.308.434.432a.735.735 0 01.133-.115 1.28 1.28 0 01.724-.225h.612a.228.228 0 00-.012-.309l-1.643-1.646 1.932-1.926c1.893.057 1.217.26 1.338-2.4a.228.228 0 00-.228-.227h-2.2z"/><path d="M11.731 7.69h1.547q.096.033.072.112-3.764 5.239-4.45 6.093-.04.087-.168.071h-.988q-.176 0-.208-.096 3.884-5.2 4.155-5.717.04-.065.04-.143 0-.089-.104-.247.017-.073.104-.073zM7.225 9.159q0-.374.112-.663.112-.294.303-.494.199-.208.47-.31.27-.112.59-.112.327 0 .599.111.271.104.463.312.198.2.31.494.112.286.112.662 0 .367-.112.663-.112.286-.312.494-.19.199-.461.31-.272.105-.598.105-.32 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066 0q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.112-.08-.24-.08-.134 0-.246.079-.104.073-.184.217-.072.135-.12.334-.04.2-.04.455t.04.455q.048.199.12.342.078.143.182.216.114.071.247.071.13 0 .24-.071t.184-.216q.08-.143.12-.342.048-.2.048-.455zm1.73 3.007q0-.376.112-.663.112-.294.303-.494.199-.208.47-.312.272-.11.59-.11.327 0 .599.111.271.104.463.312.198.2.312.494.11.286.11.662 0 .367-.112.662-.112.286-.312.494-.19.2-.461.312-.272.104-.598.104-.319 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066-.025q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.104-.079-.24-.079-.127 0-.238.08-.112.072-.192.215-.072.135-.12.336-.04.198-.04.455 0 .254.04.453.048.2.12.343.08.143.192.215.111.073.239.073.135 0 .239-.073.112-.072.183-.215.08-.143.12-.343.048-.199.048-.455z"/></svg></span>  <!--Icon-->
                     <p>ATQ</p>  <!--Stat-->
                  </td>
                  <td class="tdv">24.0%</td>  <!--Stat-->
               </tr>
         </table>

         <div class="details whitneyBold pointer" data-filter-target="#filter">Détails</div>
         
         <div class="whitneyBold nessMat flex">
            <div class="flex align cost">
               <span class="CM">Requis: </span>
               <img src="img/material/Pierre de la fatalité.png" alt="coût">
               <p>10</p>   <!--prix-->
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
                  <td>Leptailurus Cervarius</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Gandharva</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>5/8</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une garde forestière en formation active dans la Forêt d'Avidya. Derrière ses paroles et ses actions enthousiastes se cache une personnalité légèrement introvertie.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/bow.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Archerie de l'implorant</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 tirs consécutifs.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Effectue un <span class="spanImp">tir visé</span> plus précis infligeant davantage de DGT.<br>Lors de la visée, la flèche se charge en élément Dendro, infligeant d'importants <span class="dendroS">DGT Dendro</span> quand elle est complètement chargée.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Tire une pluie de flèches depuis les airs et plonge au sol, infligeant des DGT de zone à l'impact.</p> <!--Attaque #3-->
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
                  <p>Brosse florale</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Lance un anneau floral qui inflige une fois des <span class="dendroS">DGT Dendro</span> aux cibles touchées.<br>L'anneau floral revient ensuite après un certain temps, infligeant une nouvelle fois des <span class="dendroS">DGT Dendro</span>.<br><br><span class="italic">C'est le gadget incontournable de Collei pour faire face aux bêtes sauvages indisciplinées : quelques petits coups bien placés avec cet instrument améliorent généralement leur comportement. Évidemment, ce même principe fonctionne tout aussi bien sur les malfaiteurs...</span></p> <!--Description-->
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
                  <p>Atout félin</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Le fidèle Cuilein-Anbar arrive pour apporter son aide !<br>Lance une poupée nommée Cuilein-Anbar, provoquant une explosion qui inflige des <span class="dendroS">DGT Dendro de zone</span> tout en créant un territoire de Cuilein-Anbar. Cuilein-Anbar bondira alors sans cesse dans son territoire, infligeant des <span class="dendroS">DGT Dendro de zone</span>.<br><br><span class="italic">« Pas mal, hein ? ... Hein ? D'où est-ce que j'ai sorti le nom de Cuilein-Anbar ? Euh, eh bien, je... »</span></p> <!--Description-->
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
                  <p>Retour folié</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si un de vos personnages dans l'équipe déclenche une réaction de Brûlure, de Stimulation, de Suractivation, de Propagation, de Fleurissement, d'Exubérance ou de Bourgeonnement avant le retour de l'<span class="spanImp">anneau floral</span> , le personnage obtient l'effet Germe au retour de l'anneau, ce qui inflige de façon continue aux ennemis proches des <span class="dendroS">DGT Dendro</span> d'une valeur équivalant à 40 % de l'ATQ de Collei pendant 3 s.<br>Si un nouvel effet Germe est déclenché pendant la durée d'un effet Germe existant, l'effet d'origine est supprimé. Les DGT infligés par l'effet Germe sont considérés comme des DGT de compétence élémentaire.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Bois de langueur</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si un personnage dans le <span class="spanImp">territoire de Cuilein-Anbar</span> déclenche une réaction de Brûlure, de Stimulation, de Suractivation, de Propagation, de Fleurissement, d'Exubérance ou de Bourgeonnement, la durée du territoire est prolongée de 1 s.<br>Lors d'une même utilisation d'<span class="spanImp">Atout félin</span>, cette durée peut être prolongée un maximum de 3 fois de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Championne de planage de Sumeru</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Diminue la consommation d'endurance de vos personnages dans l'équipe de 20 % lors du planage.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Patrouille sylvestre</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La recharge d'énergie de Collei augmente de 20 % lorsqu'elle fait partie de l'équipe mais n'est pas déployée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. À travers collines et bosquets</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'aptitude passive « Retour folié » est modifiée :<br>Au retour de l'<span class="spanImp">anneau floral</span>, le personnage obtient l'effet Germe de l'aptitude passive « Retour folié », infligeant de façon continue aux ennemis proches des <span class="dendroS">DGT Dendro</span> d'une valeur équivalant à 40 % de l'ATQ de Collei pendant 3 s.<br>Si un de vos personnages dans l'équipe déclenche une réaction de Brûlure, de Stimulation, de Suractivation, de Propagation, de Fleurissement, d'Exubérance ou de Bourgeonnement entre l'utilisation de <span class="spanImp">Brosse florale</span> et l'arrêt de cet effet Germe, la durée de l'effet est prolongée de 3 s.<br>L'effet peut être prolongé une fois maximum de cette manière. Si un nouvel effet Germe est déclenché pendant la durée d'un effet Germe existant, l'effet d'origine est supprimé. Les DGT infligés par l'effet Germe sont considérés comme des DGT de compétence élémentaire.<br>L'aptitude passive « Retour folié » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Fragrance estivale</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Brosse florale</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Don de la nature</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'utilisation d'<span class="dendroS">Atout félin</span> augmente la maîtrise élémentaire de tous les personnages (hormis Collei) de l'équipe à proximité de 60 pts pendant 12 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Plénitude des braises</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Atout félin</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Bosquet de flèches</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque l'<span class="spanImp">anneau floral</span> touche, il crée un Cuilein-Anbar miniature qui inflige des <span class="dendroS">DGT Dendro</span> d'une valeur équivalant à 200 % de l'ATQ de Collei.<br>Chaque utilisation de <span class="spanImp">Brosse florale</span> permet de créer 1 Cuilein-Anbar miniature maximum.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=115" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Champignon sacramental.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=237" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Usage.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=238" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Usage.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=239" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Usage.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=291" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Pointe de flèche robuste.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=292" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Pointe de flèche aiguisée.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=293" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Pointe de flèche usée.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=410" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Bec crochu majestueux.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=407" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Larmes de la divinité calamiteuse.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Collei - Vertu2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Collei - Vertu</div>  <!--Titre-->
                     <div class="nmDesc">« C—C'est Cuilein-Anbar ! Hum... »</div>  <!--Description-->
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
                     <p><strong>Une nouvelle feuille</strong></p> <!--Titre-->
                     <p>Tenue de Collei. Maintenant qu'elle n'a plus besoin de rester emmitouflée dans une cape épaisse, elle est libre d'émerger comme une feuille nouvellement germée et d'accueillir chaque lever de soleil.</p> <!--Description-->
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
         background-position: -50rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>