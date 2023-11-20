<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Baizhu';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 219;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>PV<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>1039</td> <td>15</td> <td>39</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1385</td> <td>20</td> <td>52</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1819</td> <td>26</td> <td>68</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>2257</td> <td>33</td> <td>84</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2695</td> <td>39</td> <td>101</td> <td>0%</td> </tr>
            <tr> <td>20+</td> <td>3586</td> <td>52</td> <td>134</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>4028</td> <td>58</td> <td>151</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>4472</td> <td>65</td> <td>167</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>4918</td> <td>71</td> <td>184</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>5366</td> <td>77</td> <td>201</td> <td>0.0%</td> </tr>
            <tr> <td>40+</td> <td>5999</td> <td>87</td> <td>225</td> <td>7.2%</td> </tr>
            <tr> <td>45</td> <td>6449</td> <td>93</td> <td>241</td> <td>7.2%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6902</td> <td>100</td> <td>258</td> <td>7.2%</td> </tr>
            <tr> <td>50+</td> <td>7747</td> <td>112</td> <td>290</td> <td>14.4%</td> </tr>
            <tr> <td>55</td> <td>8202</td> <td>118</td> <td>307</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8659</td> <td>125</td> <td>324</td> <td>14.4%</td> </tr>
            <tr> <td>60+</td> <td>9292</td> <td>134</td> <td>348</td> <td>14.4%</td> </tr>
            <tr> <td>65</td> <td>9751</td> <td>141</td> <td>365</td> <td>14.4%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>10213</td> <td>147</td> <td>382</td> <td>14.4%</td> </tr>
            <tr> <td>70+</td> <td>10846</td> <td>156</td> <td>406</td> <td>21.6%</td> </tr>
            <tr> <td>75</td> <td>11310</td> <td>163</td> <td>423</td> <td>21.6%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>11777</td> <td>170</td> <td>441</td> <td>21.6%</td> </tr>
            <tr> <td>80+</td> <td>12410</td> <td>179</td> <td>464</td> <td>28.8%</td> </tr>
            <tr> <td>85</td> <td>12877</td> <td>186</td> <td>482</td> <td>28.8%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>13348</td> <td>193</td> <td>500</td> <td>28.8%</td> </tr>         
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
            <p class="titrePerso">Transcendant la mortalité</p> <!-- Titre -->
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
                  <td class="tdv">193</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">500</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7 0a.748.748 0 00-.43.213A18.543 18.543 0 001.865 6.74c-1.515 4.536 1.357 6.945 4.502 7.23l-.09-.276.358-.48c.148-.198.22-.3.34-.461a4.019 4.019 0 01-4.137-3.541c-.14-2.118 2.231-6.076 3.941-7.4A.649.649 0 017 1.734a.639.639 0 01.22.077c1.236.956 2.812 3.284 3.542 5.304a.798.798 0 01.265-.32c.262-.18.535-.225.723-.225h.305A18.543 18.543 0 007.432.213.751.751 0 007 0zM4.543 6.928a1.223 1.223 0 00-.594.154.978.978 0 00-.449.572c-1 3.277 1.523 4.78 3.857 4.584l.373-.506c-.003-.001-.006 0-.01-.002l-.011-.005-.016-.004a2.589 2.589 0 01-.795-.518l-.066-.05-.018-.026a2.712 2.712 0 01-.527-.854l-.002-.005-.004-.01a3.008 3.008 0 01-.185-1.069c0-.351.058-.703.183-1.04l.006-.034.002-.002c.07-.185.162-.365.274-.535-.76-.317-1.427-.66-2.018-.65z"/><path d="M9.756 6.45a.327.327 0 00-.203.071 12.566 12.566 0 00-.055.047 2.573 2.573 0 01.734.348c-.122-.244-.284-.46-.476-.467z"/><path d="M11.751 7.721h1.547q.096.033.072.112-3.764 5.239-4.45 6.093-.04.087-.168.071h-.988q-.176 0-.208-.096 3.884-5.2 4.155-5.717.04-.065.04-.143 0-.089-.104-.247.017-.073.104-.073zM7.245 9.19q0-.374.112-.663.112-.294.303-.494.199-.208.47-.31.27-.112.59-.112.327 0 .599.111.271.104.463.312.198.2.31.494.112.286.112.662 0 .367-.112.663-.112.286-.312.494-.19.199-.461.31-.272.105-.598.105-.32 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066 0q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.112-.08-.24-.08-.134 0-.246.079-.104.073-.184.217-.072.135-.12.334-.04.2-.04.455t.04.455q.048.199.12.342.078.143.182.216.114.071.247.071.13 0 .24-.071t.184-.216q.08-.143.12-.342.048-.2.048-.455zm1.73 3.007q0-.376.112-.663.112-.294.303-.494.199-.208.47-.312.272-.11.59-.11.327 0 .599.111.271.104.463.312.198.2.312.494.11.286.11.662 0 .367-.112.662-.112.286-.312.494-.19.2-.461.312-.272.104-.598.104-.319 0-.59-.104-.272-.112-.471-.312-.191-.208-.303-.494-.112-.295-.112-.663zm2.066-.025q0-.255-.048-.455-.04-.199-.12-.334-.071-.143-.183-.216-.104-.079-.24-.079-.127 0-.238.08-.112.072-.192.215-.072.135-.12.336-.04.198-.04.455 0 .254.04.453.048.2.12.343.08.143.192.215.111.073.239.073.135 0 .239-.073.112-.072.183-.215.08-.143.12-.343.048-.199.048-.455z"/></svg></span>  <!--Icon-->
                     <p>PV</p>  <!--Stat-->
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
                  <td><img src='img/icon/catalyst.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Lagenaria</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cottage Bubu</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>4/25</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Le propriétaire du Cottage Bubu, un serpent blanc appelé Changsheng l'accompagnant. Médecin extrêmement compétent, ses véritables intentions restent cependant un mystère.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Acupuncture dorée</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 attaques qui infligent des <span class="dendroS">DGT Dendro</span> vers l'avant.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour infliger des <span class="dendroS">DGT Dendro</span> de zone vers l'avant après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant ses pouvoirs Dendro, infligeant des DGT aux ennemis en chemin et des <span class="dendro">DGT Dendro de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Diagnostic universel</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Contrôle un esprit de gaze qui se promène et attaque les ennemis proches, infligeant des <span class="dendroS">DGT Dendro</span>.<br>Après avoir effectué 3 attaques ou s'il n'y a pas d'ennemis à proximité, l'esprit revient et soigne tous les personnages de l'équipe à proximité selon les PV max de Baizhu.<br><br><span class="italic">Ceux qui, dans le domaine médical, peuvent distinguer les vrais signes de maladie des faux peuvent même guérir les gens avant que les symptômes ne se manifestent.</span></p> <!--Description-->
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
                  <p>Reviviscence holistique</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Entre dans l'état Ordonnance impulsive, créant un bouclier aseptique qui absorbe les <span class="dendroS">DGT Dendro</span> 250 % plus efficacement.<br>Pendant cet état, un nouveau bouclier aseptique est généré toutes les 2,5 s.<br><br>Dans les circonstances suivantes, le bouclier aseptique soigne votre personnage déployé selon les PV max de Baizhu et libère une veine d'aura pour attaquer les ennemis en infligeant des <span class="dendroS">DGT Dendro</span> :<br>· Lorsqu'un personnage est sous la protection d'un bouclier aseptique et qu'un nouveau bouclier aseptique est généré.<br>· Lorsque les effets du bouclier aseptique prennent fin ou lorsqu'il est détruit.<br><br><span class="italic">Si l'on peut percevoir les cieux et la terre, défendre sa sphère intérieure contre les influences extérieures et garder l'esprit clair, rien ne peut gêner.</span></p> <!--Description-->
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
                  <p>Cinq fortunes perpétuelles</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Baizhu obtient différents effets selon les PV de votre personnage déployé :<br>· Si les PV de ce dernier sont inférieurs à 50 %, Baizhu obtient un bonus de soins de 20 %.<br>· Si les PV de ce dernier sont supérieurs ou égaux à 50 %, Baizhu bénéficie d'un <span class="dendroS">bonus de DGT Dendro</span> de 25 %.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Terre mère</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les personnages soignés par un <span class="spanImp">bouclier aseptique</span> obtiennent l'effet Année de la chance boisée : pour chaque tranche de 1 000 PV max que Baizhu possède jusqu'à 50 000 PV, les DGT infligés par leurs réactions de Brûlure, de Fleurissement, d'Exubérance et de Bourgeonnement augmentent de 2 % et les augmentations de DGT accordées par leurs réactions de Suractivation et de Propagation augmentent de 0,8 %, pendant 6 s.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Bienfait herbacé</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Baizhu fait partie de l'équipe, interagir avec certains objets récoltables soigne votre personnage déployé pour une valeur équivalant à 2,5 % des PV max de Baizhu.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>Regard attentif</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Confère une utilisation supplémentaire de <span class="spanImp">Diagnostic universel</span>.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>Discernement incisif</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque votre personnage déployé touche un ennemi proche avec une attaque, Baizhu libère un esprit divisé de gaze.<br>L'esprit divisé de gaze effectue 1 attaque avant de revenir, infligeant des <span class="dendroS">DGT Dendro</span> pour une valeur équivalant à 250 % de l'ATQ de Baizhu et soignant pour 20 % du soin de l'esprit de gaze de <span class="spanImp">Diagnostic universel</span>.<br>Les DGT infligés de cette manière sont considérés comme des DGT de compétence élémentaire.<br>Cet effet peut être déclenché une fois toutes les 5 s.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>Stabilisation complète</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Reviviscence holistique +3</span>.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>Perception ancienne</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>La maîtrise élémentaire de tous les personnages de l'équipe à proximité augmente de 80 pts pendant 15 s après l'utilisation de <span class="spanImp">Reviviscence holistique</span>.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>Fluctuations déroutantes</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Diagnostic universel</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>Purification du qi</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les DGT infligés par la veine d'aura de <span class="spanImp">Reviviscence holistique</span> augmentent d'une valeur équivalant à 8 % des PV max de Baizhu.<br>De plus, lorsque l'<span class="spanImp">esprit de gaze</span> ou l'esprit divisé de gaze touche un ennemi, il y a 100 % de chances de créer un bouclier aseptique de <span class="spanImp">Reviviscence holistique</span>. Cet effet peut être déclenché une fois par <span class="spanImp">esprit de gaze</span> ou esprit divisé de gaze.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=41" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Muguet bleu.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=339" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Spores de Fongus.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=340" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Pollen fluorescent.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=341" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Poussière cristalline de sporange.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=419" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Anneau de sombreur éternelle.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=420" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Fougère du monde luxuriant.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Baizhu - Soulagement2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Baizhu - Soulagement</div>  <!--Titre-->
                     <div class="nmDesc">« La sincérité engendre la longévité. »</div>  <!--Description-->
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
                     <p><strong>Applications de la médecine</strong></p> <!--Titre-->
                     <p>Tenue de Baizhu. Le manteau sur ses épaules est teint avec les plantes préférées de Changsheng. Son parfum persistant apaise les sens et calme la fatigue.</p> <!--Description-->
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