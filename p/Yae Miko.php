<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Yae Miko';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 162;"); // Nourriture
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
            <tr> <td>1</td> <td>807</td> <td>26</td> <td>44</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1076</td> <td>35</td> <td>59</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1414</td> <td>46</td> <td>78</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>1754</td> <td>57</td> <td>96</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2095</td> <td>69</td> <td>115</td> <td>5.0%</td> </tr>
            <tr> <td>20+</td> <td>2787</td> <td>91</td> <td>153</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3130</td> <td>102</td> <td>172</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>3475</td> <td>114</td> <td>191</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>3821</td> <td>125</td> <td>210</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4170</td> <td>137</td> <td>229</td> <td>5.0%</td> </tr>
            <tr> <td>40+</td> <td>4662</td> <td>153</td> <td>256</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>5012</td> <td>164</td> <td>275</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5364</td> <td>176</td> <td>294</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>6020</td> <td>197</td> <td>330</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>6373</td> <td>209</td> <td>349</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6729</td> <td>220</td> <td>369</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>7220</td> <td>236</td> <td>396</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>7577</td> <td>248</td> <td>415</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>7936</td> <td>260</td> <td>435</td> <td>14.6%</td> </tr>
            <tr> <td>70+</td> <td>8428</td> <td>276</td> <td>462</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>8789</td> <td>288</td> <td>482</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>9151</td> <td>300</td> <td>502</td> <td>19.4%</td> </tr>
            <tr> <td>80+</td> <td>9643</td> <td>316</td> <td>529</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>10007</td> <td>328</td> <td>549</td> <td>24.2%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>10372</td> <td>340</td> <td>569</td> <td>24.2%</td> </tr>         </table>
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
            <p class="titrePerso">Frivolité ingénieuse</p> <!-- Titre -->
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
                  <td class="tdv">10372</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">340</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">569</td>  <!--Stat-->
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
                  <td><img src='img/icon/catalyst.png' width='26' alt='element'></td>  <!--arme type-->
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Divina Vulpes</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Sanctuaire de Narukami</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>6/27</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">La Guuji Yae du Sanctuaire de Narukami est également responsable éditoriale de la Chambre Yae. Une intelligence et une ruse inimaginables sont cachées sous son apparence gracieuse.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Vulpes mangeur de péchés</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Invoque des esprits Kitsunes, enchaînant jusqu'à 3 attaques qui infligent des <span class="electroS">DGT Électro</span>.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour infliger des <span class="electroS">DGT Électro de zone</span> après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant la puissance du tonnerre, infligeant des DGT aux ennemis en chemin et des <span class="electroS">DGT Électro de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Évocation des yakan : Sakura dévastateur</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Pour Yae, les tâches ennuyeuses qui peuvent être réglées en chassant les esprits n'ont pas besoin d'être accomplies personnellement.<br>Se déplace rapidement, en laissant derrière elle un sakura dévastateur.<br><br><span class="spanImp">Sakura dévastateur</span><br>Les caractéristiques suivantes s'appliquent :<br>· Frappe un ennemi proche d'un éclair de façon intermittente, infligeant des <span class="electroS">DGT Électro</span>.<br>· Lorsqu'il y a d'autres sakura dévastateurs à proximité, leur niveau augmente, améliorant les DGT qu'ils infligent.<br><br>Cette capacité peut être utilisée 3 fois.<br>Un maximum de 3 sakura dévastateurs peut exister en même temps. Le niveau initial d'un sakura dévastateur est 1, et le niveau le plus élevé qu'un sakura peut atteindre est 3. Si un sakura dévastateur est créé trop près d'un autre sakura, l'ancien sakura est détruit.<br><br><span class="italic">« Les esprits Kitsunes scellés dans les branches sont tous des yakan qui aspirent à chasser les humains. Les yakan sont deux grades plus bas que nous, les Kitsunes célestes, et donc, je vois à peine le problème si je les... mets à mes ordres. Néanmoins, cela ne signifie pas que vous, les humains, devriez copier notre système de grade. Que nenni... Et quant à qui d'entre nous, Kitsunes ou humains, est le plus haut placé dans l'ordre hiérarchique... Héhé... »</span></p> <!--Description-->
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
                  <p>Technique secrète : Incarnation de tenko</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>La légende du « kitsunetsuki », ou la possession par un Kitsune, est l'un des contes populaires d'Inazuma. Parmi eux, celui du Kitsune céleste est considéré comme spécial, accablant les ennemis du Sanctuaire de Narukami sous la forme d'un éclair qui s'abat, infligeant des <span class="electroS">DGT Électro de zone</span>.<br>En utilisant cette compétence, Yae Miko descelle les sakura dévastateurs à proximité pour détruire leurs formes extérieures et les transformer en éclairs de tenko descendant du ciel, infligeant des <span class="electroS">DGT Électro de zone</span>. Chaque sakura dévastateur détruit de cette manière déclenche un éclair.<br><br><span class="italic">Yae n'utilise sa quintessence de Kitsune céleste que dans ces moments-là, brandissant elle-même la foudre. Tous ceux qui ont vu les queues de la guuji ont été réduits en cendres, alors rappelez-vous que dame Yae n'a pas de queue !</span></p> <!--Description-->
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
                  <p>Ombre sacrée du sanctuaire</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lors de l'utilisation de <span class="spanImp">Technique secrète : Incarnation de tenko</span>, le TdR d'<span class="spanImp">Évocation des yakan : Sakura dévastateur</span> se réinitialise une fois pour chaque sakura dévastateur détruit.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Bénédiction éveillée</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Chaque point de maîtrise élémentaire que Yae Miko possède augmente les DGT des <span class="spanImp">sakura dévastateurs</span> de 0,15%.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Méditation d'une yako</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>25 % de chances de synthétiser un matériau d'aptitude aléatoire supplémentaire (même rareté et région que les matériaux consommés).</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Offrande des yakan</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque <span class="spanImp">Technique secrète : Incarnation de tenko</span> déclenche un éclair de tenko, Yae Miko récupère 8 pts d'énergie élémentaire.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Glapissement sous la lune</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les <span class="spanImp">sakura dévastateurs</span> commencent au Niv.2 et peuvent monter jusqu'au Niv.4, et leur portée d'attaque augmente de 60 %.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Les sept glamours</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Évocation des yakan : Sakura dévastateur</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Canalisation de sakura</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque l'éclair d'un <span class="spanImp">sakura dévastateur</span> a touché un ennemi, tous les membres de l'équipe à proximité obtiennent un <span class="electroS">bonus de DGT Électro</span> de 20 % pendant 5 s.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Moquerie implacable</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Technique secrète : Incarnation de tenko</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Art tabou : Daisesshou</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques des <span class="spanImp">sakura dévastateurs</span> ignorent 60 % de la DÉF de l'ennemi.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=109" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Ganoderma marin.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=186" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=187" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=188" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=189" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre d'améthyste vajrada.png" alt="rs"></div>  <!--Ressource-->
                  <div>6</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>  <!--Ressource-->
                  <div>3</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=228" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Lumière.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=229" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Lumière.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=230" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Lumière.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=324" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Garde-main ancien.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=325" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Garde-main kageuchi.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=326" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Garde-main célèbre.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=405" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Fausse nageoire de l'héritier du dragon.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=408" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Signification d'une éternité.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Yae Miko - Kitsune rêveuse2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Yae Miko - Kitsune rêveuse</div>  <!--Titre-->
                     <div class="nmDesc">Où peut-on apercevoir la forme de renard de Yae Miko ? Dans vos rêves, évidemment.</div>  <!--Description-->
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
                     <p><strong>Enseignements cléricaux</strong></p> <!--Titre-->
                     <p>Tenue de Yae Miko. Un accoutrement de prêtresse qui évoque sa prestance de guuji du Sanctuaire de Narukami. Que la beauté de celle qui porte cette robe immaculée soit aussi inaltérable que les fleurs du cerisier sacré !</p> <!--Description-->
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
         background-position: -52rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>