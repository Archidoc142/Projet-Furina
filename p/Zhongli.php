<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Zhongli';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 80;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Bonus de DGT Géo</td></tr>
            <tr>  <td>1</td>                <td>1144</td>   <td>20</td>   <td>57</td>   <td>0%</td>   </tr>
            <tr>  <td>5</td>                <td>1525</td>   <td>26</td>   <td>77</td>   <td>0%</td>   </tr>
            <tr>  <td>10</td>               <td>2003</td>   <td>34</td>   <td>101</td>   <td>0%</td>   </tr>
            <tr>  <td>15</td>               <td>2485</td>   <td>42</td>   <td>125</td>   <td>0%</td>   </tr>
            <tr class="tdd"><td>20</td>     <td>2967</td>   <td>51</td>   <td>149</td>   <td>0%</td>   </tr>
            <tr>  <td>20+</td>              <td>3948</td>   <td>67</td>   <td>198</td>   <td>0%</td>   </tr>
            <tr>  <td>25</td>               <td>4435</td>   <td>76</td>   <td>223</td>   <td>0%</td>   </tr>
            <tr>  <td>30</td>               <td>4923</td>   <td>84</td>   <td>247</td>   <td>0%</td>   </tr>
            <tr>  <td>35</td>               <td>5414</td>   <td>93</td>   <td>272</td>   <td>0%</td>   </tr>
            <tr class="tdd"><td>40</td>     <td>5908</td>   <td>101</td>   <td>297</td>   <td>0%</td>   </tr>
            <tr>  <td>40+</td>              <td>6605</td>   <td>113</td>   <td>332</td>   <td>7.2%</td>   </tr>
            <tr>  <td>45</td>               <td>7100</td>   <td>121</td>   <td>356</td>   <td>7.2%</td>   </tr>
            <tr class="tdd"><td>50</td>     <td>7599</td>   <td>130</td>   <td>382</td>   <td>7.2%</td>   </tr>
            <tr>  <td>50+</td>              <td>8528</td>   <td>146</td>   <td>428</td>   <td>14.4%</td>   </tr>
            <tr>  <td>55</td>               <td>9029</td>   <td>154</td>   <td>453</td>   <td>14.4%</td>   </tr>
            <tr class="tdd"><td>60</td>     <td>9533</td>   <td>163</td>   <td>479</td>   <td>14.4%</td>   </tr>
            <tr>  <td>60+</td>              <td>10230</td>   <td>175</td>   <td>514</td>   <td>14.4%</td>   </tr>
            <tr>  <td>65</td>               <td>10735</td>   <td>183</td>   <td>539</td>   <td>14.4%</td>   </tr>
            <tr class="tdd"><td>70</td>     <td>11243</td>   <td>192</td>   <td>564</td>   <td>14.4%</td>   </tr>
            <tr>  <td>70+</td>              <td>11940</td>   <td>204</td>   <td>599</td>   <td>21.6%</td>   </tr>
            <tr>  <td>75</td>               <td>12451</td>   <td>213</td>   <td>625</td>   <td>21.6%</td>   </tr>
            <tr class="tdd"><td>80</td>     <td>12965</td>   <td>222</td>   <td>651</td>   <td>21.6%</td>   </tr>
            <tr>  <td>80+</td>              <td>13662</td>   <td>233</td>   <td>686</td>   <td>28.8%</td>   </tr>
            <tr>  <td>85</td>               <td>14177</td>   <td>242</td>   <td>712</td>   <td>28.8%</td>   </tr>
            <tr class="tdd"><td>90</td>     <td>14695</td>   <td>251</td>   <td>738</td>   <td>28.8%</td>   </tr>
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
            <p class="titrePerso">Vagabond du monde mortel</p> <!-- Titre -->
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
                  <td class="tdv">251</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">738</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.119 6.009c-.5.538-.953 1.041-1.42 1.537a.23.23 0 00-.061.286 4.5 4.5 0 001.355 1.719.181.181 0 00.164-.009c.388-.257.785-.5 1.15-.788a16.081 16.081 0 002.142-1.993c.18.366.382.7.518 1.063.2.535.356 1.088.535 1.632a.293.293 0 01-.061.286 12.277 12.277 0 01-1.768 1.985c-.84.755-1.714 1.47-2.574 2.2A1.2 1.2 0 016.99 14c-.5-.411-1.02-.817-1.52-1.243a29.249 29.249 0 01-2.847-2.774A16.778 16.778 0 01.529 7.137a.245.245 0 010-.279A10.138 10.138 0 011.875 5.1a25.247 25.247 0 005.158 8.241 12.37 12.37 0 002.98-4.617l-.036-.03-2.933 2.463c-.04-.032-.081-.061-.117-.1a13.544 13.544 0 01-2.562-3.364.249.249 0 01.05-.356c.5-.442 1-.89 1.5-1.325.227-.194.474-.365.737-.566zm.228 2.545c.263-.2.51-.372.736-.566.506-.435 1-.883 1.5-1.325a.251.251 0 00.05-.356 13.523 13.523 0 00-2.56-3.369c-.035-.034-.076-.063-.115-.1L4.025 5.306l-.04-.03A12.345 12.345 0 016.97.659 25.245 25.245 0 0112.126 8.9a10.138 10.138 0 001.345-1.758.244.244 0 000-.279 16.724 16.724 0 00-2.1-2.846 29.136 29.136 0 00-2.842-2.774C8.03.817 7.514.411 7.009 0c-.05.033-.081.049-.107.071-.86.732-1.734 1.447-2.573 2.2A12.23 12.23 0 002.56 4.258a.293.293 0 00-.062.286c.179.544.334 1.1.536 1.632.136.361.336.7.517 1.063a16.2 16.2 0 012.14-1.993c.367-.285.765-.531 1.152-.788a.181.181 0 01.164-.009 4.5 4.5 0 011.355 1.719.231.231 0 01-.06.286c-.468.5-.926 1-1.421 1.537z"/></svg></span>  <!--Icon-->
                     <p>Bonus de DGT Géo</p>  <!--Stat-->
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
                  <td><img src='img/icon/polearm.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Lapis Dei</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Port de Liyue</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>12/31</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso"></div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/polearm.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Pluie de pierres</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 6 coups de lance.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour charger vers l'avant, faisant pleuvoir des lances de roche sur la route.</p> <!--Attaque #2-->
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
                  <img src="img/apt/Dominus Lapidis.png" alt="icon_apt2"> <!--image icon #2-->
                  <p>Dominus Lapidis</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Le pouvoir Géo est présent dans les montagnes, sur la terre comme dans les profondeurs, et jusque dans les fissures rocailleuses. Mais rares sont ceux capables de maîtriser une telle puissance.<br><br><span class="spanImp">Appui simple</span><br>Zhongli matérialise une Dorsale rocheuse.<br><br><span class="spanImp">Appui long</span><br>Zhongli fait exploser l'élément Géo contenu dans les environs, entraînant les effets suivants :<br>· Une Dorsale rocheuse est créée si le nombre maximum de Dorsales rocheuses sur le terrain n'est pas atteint.<br>· Un bouclier de jade capable d'absorber une quantité de DGT proportionnelle aux PV max de Zhongli est généré.<br>· Inflige des <span class="geoS">DGT Géo de zone</span>.<br>· Absorbe l'<span class="geoS">élément Géo</span> des cibles proches affectées par l'élément Géo (jusqu'à 2 cibles maximum). Cet effet n'inflige pas de DGT.<br><br><span class="spanImp">Dorsale rocheuse</span><br>Une Dorsale rocheuse inflige des <span class="geoS">DGT Géo de zone</span> lorsqu'elle est matérialisée.<br>La Dorsale entre en résonance avec les autres <span class="geoS">constructions Géo</span> présentes.<br>L'amas rocheux libère l'écho de la pierre originelle de façon intermittente, infligeant des <span class="geoS">DGT Géo</span> aux ennemis proches.<br>La Dorsale rocheuse est une <span class="geoS">construction Géo</span> qui bloque les attaques et peut être escaladée. Il ne peut exister qu'une seule dorsale à la fois.<br><br><span class="spanImp">Bouclier de jade</span><br>Le bouclier de jade est efficace à 150 % contre les DGT élémentaires et physiques.<br>Lorsqu'un bouclier de jade protège un personnage, les RÉS élémentaires et physique des ennemis proches diminuent de 20 %. Cet effet est non cumulable.<br><br><span class="italic">Un vrai maître de la roche doit savoir sculpter le jade et l'or.</span></p> <!--Descriptoin-->
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
                  <img src="img/apt/Chute de météore.png" alt="icon_apt3"> <!--image icon #3-->
                  <p>Chute de météore</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Zhongli fait tomber des cieux un gigantesque météore, infligeant d'importants <span class="geoS">DGT Géo</span> à l'impact et <span class="geoS">pétrifie</span> les ennemis.<br><br><span class="spanImp">Pétrification</span><br>Les ennemis <span class="geoS">pétrifiés</span> sont immobilisés.<br><br><span class="italic">Que le météore qui transperce la voûte illumine les ténèbres de ce monde.</span></p> <!--Description-->
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
                  <img src="img/apt/Ondes résonnantes.png" alt="icon_pas1"> <!--image icon #4-->
                  <p>Ondes résonnantes</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Chaque attaque touchant le bouclier de jade génère les effets suivants :<br>· Augmente la force du bouclier de 5 %.<br>· Cet effet peut être cumulé 5 fois maximum et dure jusqu'à la fin du bouclier.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Domination de la Terre.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Domination de la Terre</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente les DGT infligés par les attaques de Zhongli citées ci-dessous en fonction de ses PV max :<br>· Augmentation de DGT des attaques normales, chargées et plongeantes : 1,39 % des PV max.<br>· Augmentation de DGT de dorsale rocheuse, de DGT de résonance et de DGT de l'appui long de <span class="spanImp">Dominus Lapidis</span> : 1,9 % des PV max.<br>·Augmentation de DGT de <span class="spanImp">Chute de météore</span> : 33 % des PV max.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Cristal du destin.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Cristal du destin</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque vous forgez une arme d'hast, 15 % du minerai utilisé vous sera rendu.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Roche, le squelette de la terre</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>2 Dorsales de <span class="spanImp">Dominus Lapidis</span> peuvent exister en même temps.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Pierre, le berceau du jade</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les personnages déployés à proximité sont protégés par un bouclier de jade lors de <span class="spanImp">Chute de météore</span>.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Jade, brillant à travers les ténèbres</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Dominus Lapidis</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Topaze, incassable et intrépide</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Augmente la zone d'effet de <span class="spanImp">Chute de météore</span> de 20 %.<br>Prolonge de plus la durée de la pétrification de 2 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Lazulite, le héraut de l'ordre divin</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Chute de météore</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/ZhongliC6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Or, la générosité du dominateur</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>40 % des DGT subis par le bouclier de jade sont convertis en PV pour le personnage déployé.<br>La quantité de PV restaurés en une fois ne peut pas dépasser 8 % des PV max du personnage.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=49" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Cœur de lapis.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=198" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de topaze prithiva.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=199" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de topaze prithiva.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=200" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de topaze prithiva.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=201" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de topaze prithiva.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=218" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de l'Or.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=219" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de l'Or.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=220" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de l'Or.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=383" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Pilier de basalte.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=387" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Corne de Monoceros Caeli.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Zhongli - Chute de météore2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Zhongli - Chute de météore</div>  <!--Titre-->
                     <div class="nmDesc">Les étoiles chutent, la lumière faiblit.</div>  <!--Description-->
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
                     <p><strong>Vie mortelle</strong></p> <!--Titre-->
                     <p>Tenue de Zhongli. Un vêtement décontracté porté par sieur Zhongli, consultant au Funérarium Wangsheng, lorsqu'il ne travaille pas.</p> <!--Description-->
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
         background-position: -53rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>