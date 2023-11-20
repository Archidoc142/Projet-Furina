<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Noëlle';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 52;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>DÉF<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1012</td> <td>16</td> <td>67</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1346</td> <td>21</td> <td>89</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1764</td> <td>28</td> <td>117</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>2182</td> <td>35</td> <td>144</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2600</td> <td>41</td> <td>172</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>3356</td> <td>53</td> <td>222</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>3774</td> <td>60</td> <td>250</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>4191</td> <td>66</td> <td>277</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>4609</td> <td>73</td> <td>305</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5027</td> <td>80</td> <td>333</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>5564</td> <td>88</td> <td>368</td> <td>7.5%</td> </tr>
            <tr> <td>45</td> <td>5982</td> <td>95</td> <td>396</td> <td>7.5%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6400</td> <td>101</td> <td>423</td> <td>7.5%</td> </tr>
            <tr> <td>50+</td> <td>7117</td> <td>113</td> <td>471</td> <td>15.0%</td> </tr>
            <tr> <td>55</td> <td>7535</td> <td>119</td> <td>498</td> <td>15.0%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>7953</td> <td>126</td> <td>526</td> <td>15.0%</td> </tr>
            <tr> <td>60+</td> <td>8490</td> <td>134</td> <td>562</td> <td>15.0%</td> </tr>
            <tr> <td>65</td> <td>8907</td> <td>141</td> <td>589</td> <td>15.0%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9325</td> <td>148</td> <td>617</td> <td>15.0%</td> </tr>
            <tr><td>70+</td> <td>9862</td> <td>156</td> <td>652</td> <td>22.5%</td> </tr>
            <tr> <td>75</td> <td>10280</td> <td>163</td> <td>680</td> <td>22.5%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>10698</td> <td>169</td> <td>708</td> <td>22.5%</td> </tr>
            <tr><td>80+</td> <td>11235</td> <td>178</td> <td>743</td> <td>30.0%</td> </tr>
            <tr> <td>85</td> <td>11653</td> <td>185</td> <td>771</td> <td>30.0%</td> </tr>
            <tr class="tdd"><td>90</td> <td>12071</td> <td>191</td> <td>799</td> <td>30.0%</td> </tr>         
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
            <p class="titrePerso">Fleur chevaleresque</p> <!-- Titre -->
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
                  <td class="tdv">12071</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">191</td>  <!--Stat-->
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
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7 0C2.498 0 1.142.285.734.457a.291.291 0 00-.175.27v7.441a.868.868 0 00.125.451c1.353 2.228 4.301 4.196 5.632 5.02l.319-.426c.476-.637.767-1.035 1.095-1.48-.003-.002-.006-.001-.01-.003l-.011-.005-.016-.004A2.6 2.6 0 017 11.297v.672c.059.013-3.56-2.018-4.824-4.37V1.565s0-.45 4.824-.45v5.962c.21-.18.45-.322.705-.422a2.7 2.7 0 011.016-.195c.347 0 .695.062 1.023.195.329.129.622.33.861.582l.002.002c.027.027.034.066.059.094.082-.193.15-.39.361-.537.262-.18.535-.225.723-.225h1.69V.727a.291.291 0 00-.175-.27C12.858.285 11.502 0 7 0z"/><path d="M11.751 7.721h1.547q.096.033.072.112-3.764 5.239-4.45 6.093-.04.087-.168.071h-.988q-.176 0-.208-.096 3.884-5.2 4.155-5.717.04-.065.04-.143 0-.089-.104-.247.017-.073.104-.073zM7.245 9.19q0-.374.112-.663.112-.294.303-.494.199-.208.47-.31.27-.112.59-.112.327 0 .599.111.271.104.463.312.198.2.31.494.112.286.112.662 0 .367-.112.663-.112.286-.312.494-.19.199-.461.31-.272.105-.598.105-.32 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066 0q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.112-.08-.24-.08-.134 0-.246.079-.104.073-.184.217-.072.135-.12.334-.04.2-.04.455t.04.455q.048.199.12.342.078.143.182.216.114.071.247.071.13 0 .24-.071t.184-.216q.08-.143.12-.342.048-.2.048-.455zm1.73 3.007q0-.376.112-.663.112-.294.303-.494.199-.208.47-.312.272-.11.59-.11.327 0 .599.111.271.104.463.312.198.2.312.494.11.286.11.662 0 .367-.112.662-.112.286-.312.494-.19.2-.461.312-.272.104-.598.104-.319 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066-.025q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.104-.079-.24-.079-.127 0-.238.08-.112.072-.192.215-.072.135-.12.336-.04.198-.04.455 0 .254.04.453.048.2.12.343.08.143.192.215.111.073.239.073.135 0 .239-.073.112-.072.183-.215.08-.143.12-.343.048-.199.048-.455z"/></svg></span>  <!--Icon-->
                     <p>DÉF</p>  <!--Stat-->
                  </td>
                  <td class="tdv">30.0%</td>  <!--Stat-->
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
                  <td><img src='img/icon/claymore.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Parma Cordis</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Ordre de Favonius</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>3/21</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une jeune fille travaillant comme servante à l'Ordre de Favonius. Elle a toujours rêvé de devenir un jour chevalier.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/claymore.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Escrime de Favonius - Servante</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 coups d'épée.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance de façon continue pour exécuter une succession d'attaques tournoyantes contre les ennemis proches.<br>L'attaque chargée se termine sur un coup puissant.</p> <!--Attaque #2-->
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
                  <p>Armure de cœur</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Invoque une armure de roche qui inflige des <span class="geoS">DGT Géo</span> aux ennemis proches et génère un bouclier absorbant une quantité de DGT proportionnelle à la DÉF de Noëlle.<br>L'armure de roche a les propriétés suivantes :<br>· Les attaques normales et chargées de Noëlle ont une chance de restaurer les PV de tous les personnages de l'équipe lorsqu'elles touchent un ennemi.<br>· L'armure est efficace à 150 % contre les DGT élémentaires et physiques.<br><br>Les soins reçus sont proportionnels à la DÉF de Noëlle.<br><br><span class="italic">Noëlle est à la fois une servante fidèle et un chevalier vaillant.</span></p> <!--Description-->
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
                  <p>Grand ménage</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Concentrant le pouvoir de la roche sur son arme, Noëlle exécute une puissante attaque circulaire qui inflige des <span class="geoS">DGT Géo</span> aux ennemis proches.<br>Noëlle bénéficie ensuite des effets suivants :<br>· Portée d'attaque augmentée.<br>· DGT d'attaque convertis en <span class="geoS">DGT Géo</span> ne pouvant pas être enchantés.<br>· Bonus d'ATQ proportionnel à la DÉF de Noëlle.<br><br><span class="italic">Parfois, la poussière n'est pas la seule chose qu'il faut balayer...</span></p> <!--Description-->
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
                  <p>Dévotion ultime</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Noëlle fait partie de l'équipe et n'est pas déployée, l'effet suivant se déclenche automatiquement si les PV du personnage déployé sont inférieurs à 30 % :<br>Confère un bouclier au personnage déployé pouvant absorber des DGT équivalant à 400 % de la DÉF de Noëlle pendant 20 s.<br>· Le bouclier est efficace à 150 % contre les DGT élémentaires et les DGT physiques.<br>· Le bouclier peut être déclenché une fois toutes les 60 s.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Clair et net</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Noëlle réduit le TdR d'Armure de cœur de 1 s tous les 4 coups d'attaque normale ou chargée qu'elle inflige à un ennemi.<br>Un coup peut être compté toutes les 0,1 s.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>À votre service</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>12 % de chances d'obtenir un plat supplémentaire lorsque vous cuisinez un plat parfait qui renforce la DÉF.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. J'assure vos arrières</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'effet de restauration des PV d'Armure de cœur a 100 % de chances d'être déclenché lorsque <span class="spanImp">Grand ménage</span> et <span class="spanImp">Armure de cœur</span> sont actifs en même temps.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Servante de tourbillon</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques chargées de Noëlle consomment 20 % d'endurance en moins et infligent 15 % de DGT supplémentaires.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. La servante ne sera jamais blessée</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Armure de cœur</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Je vais nettoyer après</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Armure de cœur</span> inflige une quantité de <span class="geoS">DGT Géo</span> équivalant à 400 % de l'ATQ aux ennemis proches lorsqu'elle prend fin ou que l'armure est détruite.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Maîtresse de ménage</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Grand ménage</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Aucune poussière</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Grand ménage</span> fait bénéficier Noëlle d'un bonus supplémentaire d'ATQ à hauteur de 50 % de sa DÉF.<br>De plus, chaque ennemi vaincu pendant que la compétence est active prolonge sa durée de 1 s (10 s maximum).</p></div>  <!--Description-->
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
               <a href="p/material.php?id=29" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Tombaie.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=285" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Masque endommagé.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=286" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Masque sale.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=287" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Masque sinistre.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=383" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Pilier de basalte.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=378" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Griffe de Stormterror.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Noëlle - Protection2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Noëlle - Protection</div>  <!--Titre-->
                     <div class="nmDesc">Noëlle est quelqu'un de spécial, et ne laissera jamais aucun mal vous arriver.</div>  <!--Description-->
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
                     <p><strong>Rose en armure</strong></p> <!--Titre-->
                     <p>Tenue de Noëlle. Armure et velours renforcé sont combinés en une robe lourde.</p> <!--Description-->
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
         background-position: -54rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>