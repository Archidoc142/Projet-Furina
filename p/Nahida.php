<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Nahida';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 202;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Maîtrise élémentaire</td></tr>
            <tr>  <td>1</td>                <td>807</td>   <td>23</td>   <td>49</td>   <td>0</td>   </tr>
            <tr>  <td>5</td>                <td>1075</td>   <td>31</td>   <td>65</td>   <td>0</td>   </tr>
            <tr>  <td>10</td>               <td>1412</td>   <td>41</td>   <td>86</td>   <td>0</td>   </tr>
            <tr>  <td>15</td>               <td>1752</td>   <td>51</td>   <td>107</td>   <td>0</td>   </tr>
            <tr class="tdd"><td>20</td>     <td>2092</td>   <td>60</td>   <td>127</td>   <td>0</td>   </tr>
            <tr>  <td>20+</td>              <td>2784</td>   <td>80</td>   <td>169</td>   <td>0</td>   </tr>
            <tr>  <td>25</td>               <td>3126</td>   <td>90</td>   <td>190</td>   <td>0</td>   </tr>
            <tr>  <td>30</td>               <td>3471</td>   <td>100</td>   <td>211</td>   <td>0</td>   </tr>
            <tr>  <td>35</td>               <td>3817</td>   <td>110</td>   <td>232</td>   <td>0</td>   </tr>
            <tr class="tdd"><td>40</td>     <td>4165</td>   <td>120</td>   <td>253</td>   <td>0</td>   </tr>
            <tr>  <td>40+</td>              <td>4656</td>   <td>134</td>   <td>283</td>   <td>29</td>   </tr>
            <tr>  <td>45</td>               <td>5006</td>   <td>144</td>   <td>305</td>   <td>29</td>   </tr>
            <tr class="tdd"><td>50</td>     <td>5357</td>   <td>155</td>   <td>326</td>   <td>29</td>   </tr>
            <tr>  <td>50+</td>              <td>6012</td>   <td>174</td>   <td>366</td>   <td>58</td>   </tr>
            <tr>  <td>55</td>               <td>6366</td>   <td>184</td>   <td>387</td>   <td>58</td>   </tr>
            <tr class="tdd"><td>60</td>     <td>6721</td>   <td>194</td>   <td>409</td>   <td>58</td>   </tr>
            <tr>  <td>60+</td>              <td>7212</td>   <td>208</td>   <td>439</td>   <td>58</td>   </tr>
            <tr>  <td>65</td>               <td>7568</td>   <td>218</td>   <td>460</td>   <td>58</td>   </tr>
            <tr class="tdd"><td>70</td>     <td>7926</td>   <td>229</td>   <td>482</td>   <td>58</td>   </tr>
            <tr>  <td>70+</td>              <td>8418</td>   <td>243</td>   <td>512</td>   <td>86</td>   </tr>
            <tr>  <td>75</td>               <td>8778</td>   <td>253</td>   <td>534</td>   <td>86</td>   </tr>
            <tr class="tdd"><td>80</td>     <td>9140</td>   <td>264</td>   <td>556</td>   <td>86</td>   </tr>
            <tr>  <td>80+</td>              <td>9632</td>   <td>278</td>   <td>586</td>   <td>115</td>   </tr>
            <tr>  <td>85</td>               <td>9995</td>   <td>288</td>   <td>608</td>   <td>115</td>   </tr>
            <tr class="tdd"><td>90</td>     <td>10360</td>   <td>299</td>   <td>630</td>   <td>115</td>   </tr>
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
            <p class="titrePerso">Physique de pureté</p> <!-- Titre -->
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
                  <td class="tdv">10360</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">299</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">630</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M8.076 8.152l-.017-.05A4.335 4.335 0 007.3 6.796a4.431 4.431 0 00-.325-.346A2.113 2.113 0 107 2.223a2.144 2.144 0 00-1.838 3.18 4.374 4.374 0 00-1.2-.168 4.42 4.42 0 00-.755.066l-.038.007C1.836-.24 10.7-1.672 10.962 4.342a3.985 3.985 0 01-2.886 3.81zm3.662-2.137a3.949 3.949 0 00-.626-.235 4.473 4.473 0 01-1.105 1.7h.031a2.113 2.113 0 11-2.113 2.113 4.09 4.09 0 00-.025-.445 3.968 3.968 0 00-1.863-2.931l-.19-.11a3.963 3.963 0 10.645 6.535c.082-.068.16-.14.236-.214L6.7 12.39a4.367 4.367 0 01-.891-1.765 2.112 2.112 0 11-.883-2.914q.1.05.189.11a2.111 2.111 0 01.942 1.49 2.159 2.159 0 01.018.28 3.963 3.963 0 105.663-3.577z"/></svg></span>  <!--Icon-->
                     <p>Maîtrise élémentaire</p>  <!--Stat-->
                  </td>
                  <td class="tdv">115</td>  <!--Stat-->
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
                  <td>Sapientia Oromasdis</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Ville de Sumeru</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>10/27</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une oiselle en cage isolée dans les profondeurs du Sanctuaire de Surasthana qui ne peut voir le monde que dans ses rêves.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Attaque normale : Akara</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 attaques qui infligent des <span class="dendroS">DGT Dendro</span> vers l'avant.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour infliger des <span class="dendroS">DGT Dendro de zone</span> vers l'avant après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant ses pouvoirs Dendro, infligeant des DGT aux ennemis en chemin et des <span class="dendroS">DGT Dendro de zone.</span></p> <!--Attaque #3-->
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
                  <img src="img/apt/Omniscience des plans.png" alt="icon_apt2"> <!--image icon #2-->
                  <p>Omniscience des plans</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Envoie des liens karmiques des bois autour d'elle, infligeant des <span class="dendroS">DGT Dendro de zone.</span> et apposant une graine de Skandha à un maximum de 8 ennemis touchés.<br>En cas d'appui long, la compétence est déclenchée différemment.<br><br><span class="spanImp">Appui long</span><br>Bascule en mode visée, ce qui permet de sélectionner une certaine quantité d'ennemis dans une zone limitée, tout en augmentant la RÉS à l'interruption de Nahida pendant le processus.<br>Lorsque le mode visée se termine, cette compétence leur inflige des <span class="dendroS">DGT Dendro</span> et leur appose une graine de Skandha.<br>Le mode visée dure 5 s maximum et permet de sélectionner jusqu'à 8 ennemis.<br><br><span class="spanImp">Graine de Skandha</span><br>Les ennemis marqués par une graine de Skandha sont liés les uns aux autres jusqu'à une certaine distance.<br>Après avoir déclenché une réaction élémentaire sur un ennemi affecté par une graine de Skandha ou lui avoir infligé des DGT grâce à un noyau Dendro (incluant Bourgeonnement et Exubérance), Nahida déclenche une purification trikarmique sur cet ennemi et tous les ennemis liés, infligeant des <span class="dendroS">DGT Dendro</span> selon son ATQ et sa maîtrise élémentaire.<br>La purification trikarmique ne peut être déclenchée qu'une fois par intervalle de temps défini.<br><br><span class="italic">Toisez, la divinité de l'herbe et des arbres fait briller sa vérité ultime dans le vide, éclairant l'origine et la destruction des trois karmas.</span></p> <!--Descriptoin-->
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
                  <img src="img/apt/Cœur illusoire.png" alt="icon_apt3"> <!--image icon #3-->
                  <p></p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Manifeste la cour des rêves et déploie le sanctuaire de Maya.<br><br>Lorsque le champ du sanctuaire de Maya est déclenché, les effets suivants s'appliquent séparément selon les types élémentaires présents dans l'équipe :<br>· <span class="pyroS">Pyro</span> : lorsque Nahida est dans le sanctuaire de Maya, les DGT infligés par la purification trikarmique d'Omniscience des plans augmentent.<br>· <span class="electroS">Électro</span> : lorsque Nahida est dans le sanctuaire de Maya, l'intervalle de déclenchement entre chaque purification trikarmique d'Omniscience des plans diminue.<br>· <span class="hydroS">Hydro</span> : la durée du sanctuaire de Maya augmente.<br><br>Si un minimum de 2 personnages des types élémentaires susmentionnés sont présents lorsque le champ est déployé, ces effets augmentent davantage.<br><br>Même si Nahida fait partie de l'équipe mais n'est pas déployée, les effets mentionnés ci-dessus peuvent être obtenus tant que l'équipe est dans le sanctuaire de Maya.<br><br><span class="italic">Peut-être que tout ce qui habite sous les berceaux des arbres n'est qu'un rêve éphémère inversé aux yeux de la divinité de la sagesse...</span></p> <!--Descriptoin-->
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
                  <img src="img/apt/Compassion illuminée.png" alt="icon_pas1"> <!--image icon #4-->
                  <p>Compassion illuminée</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p><span class="spanImp">Cœur illusoire</span> accorde l'effet suivant au sanctuaire de Maya :<br>Augmente la maîtrise élémentaire du personnage déployé à portée d'une valeur équivalant à 25 % de la maîtrise élémentaire du personnage de l'équipe en ayant le plus.<br>La maîtrise élémentaire peut être augmentée d'un maximum de 250 pts de cette manière.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Éveil élucidé.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Éveil élucidé</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pour chaque point de maîtrise élémentaire que Nahida possède au-delà de 200 pts, les DGT infligés par la purification trikarmique d'<span class="spanImp">Omniscience des plans</span> augmentent de 0,1 % et son taux CRIT de 0,03 %.<br>Les DGT de la purification trikarmique peuvent être augmentés d'un maximum de 80 % et son taux CRIT d'un maximum de 24 % de cette manière.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Universalité méditée.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Universalité méditée</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Nahida peut utiliser <span class="spanImp">Omniscience des plans</span> pour interagir avec certains objets récoltables dans une zone d'effet fixe.<br>Cette compétence peut même avoir d'autres effets...</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Graine du savoir emmagasiné</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque le <span class="spanImp">sanctuaire de Maya</span> est déployé et que les types élémentaires des personnages de l'équipe sont calculés, un personnage Pyro, Électro et Hydro supplémentaire est comptabilisé.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Racine de toute plénitude</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les ennemis affectés par une <span class="spanImp">graine de Skandha</span> de Nahida subissent les effets suivants :<br>· Les réactions subies de Brûlure, de Fleurissement, d'Exubérance et de Bourgeonnement peuvent leur infliger des coups CRIT, dont le taux CRIT est fixé à 20 % et les DGT CRIT à 100 %.<br>· Pendant 8 s après avoir subi une réaction de Stimulation, de Suractivation ou de Propagation, leur DÉF diminue de 30 %.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Pousse de réalisation consciente</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Omniscience des plans</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Tige d'inférence manifeste</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque 1, 2, 3 ou au moins 4 ennemis proches sont affectés par une graine de Skandha d'<span class="spanImp">Omniscience des plans</span>, la maîtrise élémentaire de Nahida augmente respectivement de 100, 120, 140 ou 160 pts.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Feuille de discours éclairant</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Cœur illusoire +3</span>.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/NahidaC6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Fruit d'aboutissement rationnel</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque Nahida touche un ennemi affecté par une graine de Skandha d'<span class="spanImp">Omniscience des plans</span> avec une attaque normale ou chargée après avoir utilisé <span class="spanImp">Cœur illusoire</span>, elle utilise une « Purification trikarmique : Oubli karmique » sur cet ennemi et tous les autres ennemis liés, infligeant des <span class="dendroS">DGT Dendro</span> d'une valeur équivalant à 200 % de son ATQ et 400 % de sa maîtrise élémentaire.<br>Les DGT infligés par la «Purification trikarmique : Oubli karmique » sont considérés comme des DGT de compétence élémentaire et peuvent être déclenchés une fois tous les 0,2 s.<br>Cet effet dure 10 s ou disparaît après avoir déclenché une «Purification trikarmique : Oubli karmique » 6 fois.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=119" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Kalpalotus.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=415" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Fils de marionnette.png" alt="rs"></div>  <!--Ressource-->
                  <div>18</div>
               </a>
               <a href="p/material.php?id=414" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Liane d'oblitération.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
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
                     <img src="img/namecard/<?php echo $bddResults['name']; ?>2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Nahida - Croissant</div>  <!--Titre-->
                     <div class="nmDesc">La lune montante admire le soleil, car sa lumière illumine le monde, tandis que le soleil couchant envie la lune, car elle est toujours accompagnée par les plus beaux des rêves.</div>  <!--Description-->
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
                     <p><strong>Verset de connaissance</strong></p> <!--Titre-->
                     <p>Tenue de Nahida. Seuls les oracles qui interprètent le savoir peuvent habiller la divinité de la sagesse. Ainsi, même le plus petit des ornements est considéré comme un décret sacré.</p> <!--Description-->
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