<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Qiqi';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 64;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Bonus de soins<!--Stat spécial--></td></tr>
            <tr> <td>1</td> <td>963</td> <td>22</td> <td>72</td> <td>0%</td> </tr>
            <tr> <td>5</td> <td>1283</td> <td>30</td> <td>96</td> <td>0%</td> </tr>
            <tr> <td>10</td> <td>1686</td> <td>39</td> <td>126</td> <td>0%</td> </tr>
            <tr> <td>15</td> <td>2091</td> <td>49</td> <td>156</td> <td>0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2498</td> <td>58</td> <td>186</td> <td>0%</td> </tr>
            <tr><td>20+</td> <td>3323</td> <td>77</td> <td>248</td> <td>0.0%</td> </tr>
            <tr> <td>25</td> <td>3732</td> <td>87</td> <td>278</td> <td>0.0%</td> </tr>
            <tr> <td>30</td> <td>4144</td> <td>96</td> <td>309</td> <td>0.0%</td> </tr>
            <tr> <td>35</td> <td>4557</td> <td>106</td> <td>340</td> <td>0.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4973</td> <td>115</td> <td>371</td> <td>0.0%</td> </tr>
            <tr><td>40+</td> <td>5559</td> <td>129</td> <td>415</td> <td>5.5%</td> </tr>
            <tr> <td>45</td> <td>5976</td> <td>139</td> <td>446</td> <td>5.5%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>6396</td> <td>148</td> <td>477</td> <td>5.5%</td> </tr>
            <tr> <td>50+</td> <td>7178</td> <td>167</td> <td>535</td> <td>11.1%</td> </tr>
            <tr> <td>55</td> <td>7600</td> <td>176</td> <td>567</td> <td>11.1%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>8023</td> <td>186</td> <td>598</td> <td>11.1%</td> </tr>
            <tr> <td>60+</td> <td>8610</td> <td>200</td> <td>642</td> <td>11.1%</td> </tr>
            <tr> <td>65</td> <td>9036</td> <td>210</td> <td>674</td> <td>11.1%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>9463</td> <td>220</td> <td>706</td> <td>11.1%</td> </tr>
            <tr><td>70+</td> <td>10050</td> <td>233</td> <td>749</td> <td>16.6%</td> </tr>
            <tr> <td>75</td> <td>10480</td> <td>243</td> <td>781</td> <td>16.6%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>10912</td> <td>253</td> <td>814</td> <td>16.6%</td> </tr>
            <tr><td>80+</td> <td>11499</td> <td>267</td> <td>857</td> <td>22.1%</td> </tr>
            <tr> <td>85</td> <td>11932</td> <td>277</td> <td>890</td> <td>22.1%</td> </tr>
            <tr class="tdd"><td>90</td> <td>12368</td> <td>287</td> <td>922</td> <td>22.1%</td> </tr>
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
            <p class="titrePerso">Renaissance gelée</p> <!-- Titre -->
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
                  <td class="tdv">12368</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">287</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">922</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M14 4.765v4.47a.589.589 0 01-.588.589H9.824v3.588a.589.589 0 01-.589.588h-4.47a.589.589 0 01-.589-.588V9.824H.588A.589.589 0 010 9.235v-4.47a.589.589 0 01.588-.589h3.588V.588A.589.589 0 014.765 0h4.47a.589.589 0 01.589.588v3.588h3.588a.589.589 0 01.588.589z"/></svg></span>  <!--Icon-->
                     <p>Bonus de soins</p>  <!--Stat-->
                  </td>
                  <td class="tdv">22.1%</td>  <!--Stat-->
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
                  <td>Pristina Nola</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cottage Bubu</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>3/3</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Qiqi est une jeune apprentie du Cottage Bubu, en charge notamment de la récolte des herbes médicinales. C'est également un zombie au teint blafard et aux mots comptés.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/sword.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Escrime ancienne des nuages</p> <!--Aptitude #1-->
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
                  <p>Arcane d'Adepte : Héraut de givre</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Utilise un talisman infusé de glace et de sang pour invoquer un héraut de givre, infligeant des <span class="cryoS">DGT Cryo</span> aux ennemis proches.<br><br><span class="spanImp">Héraut de givre</span><br>· Les attaques normales et chargées de Qiqi restaurent les PV de vos personnages dans l'équipe ainsi que des alliés proches lorsqu'elles touchent. La quantité de PV restaurée est proportionnelle à l'ATQ de Qiqi.<br>· Régénère les PV du personnage déployé à intervalles réguliers.<br>· Le héraut suit le personnage déployé et inflige des <span class="cryoS">DGT Cryo</span> aux ennemis sur sa route.<br><br><span class="italic">« Je l'utilise pour empêcher le réchauffement et la pourriture... des précieux ingrédients de monsieur Baizhu, bien sûr. »</span></p> <!--Description-->
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
                  <p>Arcane d'Adepte : Talisman sacré</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Qiqi libère le pouvoir d'Adepte scellé en elle et marque les ennemis proches d'un talisman de fortune qui leur inflige des <span class="cryoS">DGT Cryo</span>.<br><br><span class="spanImp">Talisman de fortune</span><br>Les personnages récupèrent des PV équivalant aux DGT subis par les ennemis marqués.<br><br><span class="italic">« Je suis l'envoyée de la Providence, le symbole de la renaissance. »<br>— Qiqi est bien incapable de se rappeler de ces mots.</span></p> <!--Description-->
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
                  <p>Survie en milieu hostile</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'un personnage sous l'effet d'<span class="spanImp">Arcane d'Adepte : Héraut de givre</span> déclenche une réaction élémentaire, son bonus de soins reçus augmente de 20 % pendant 8 s.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Ouverture des arcanes</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques normales et chargées de Qiqi ont 50 % de chances de marquer l'ennemi touché d'un talisman de fortune pendant 6 s. Cet effet peut être déclenché une fois toutes les 30 s.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Souvenir d'une vie lointaine</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Affiche l'emplacement des <span class="spanImp">produits de Liyue</span> sur la mini-carte.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Ascèse du givre</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Qiqi récupère 2 pts d'énergie élémentaire à chaque fois que son héraut de givre touche un ennemi marqué par un talisman de fortune.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Gelé jusqu'à l'os</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les attaques normales et chargées de Qiqi infligent 15 % de DGT supplémentaires contre les ennemis affectés par <span class="cryoS">Cryo</span>.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Louange vers le ciel</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Arcane d'Adepte : Talisman sacré</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Répression divine</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'ATQ des cibles marquées par un talisman de fortune diminue de 20 %.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Éclosion du lotus rouge</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Arcane d'Adepte : Héraut de givre</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Symbole de la renaissance</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>L'activation d'<span class="spanImp">Arcane d'Adepte : Talisman sacré</span> réanime tous les personnages de l'équipe à proximité et restaure 50 % de leurs PV.<br>Cet effet peut être déclenché une fois toutes les 15 min.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=212" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Enseignement de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=213" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Guide de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>63</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=214" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Philosophie de la Prospérité.png" alt="rs"></div>  <!--Ressource-->
                  <div>114</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=288" class="ascRsItem center">  <!--Ressource-->
                  <div class="c1"><img src="img/material/Parchemin divinatoire.png" alt="rs"></div>  <!--Ressource-->
                  <div>36</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=289" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Parchemin sigillé.png" alt="rs"></div>  <!--Ressource-->
                  <div>96</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=290" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Parchemin maudit.png" alt="rs"></div>  <!--Ressource-->
                  <div>129</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=384" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Duramen de glace.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=380" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Queue de Borée.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Qiqi - Conservation2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Qiqi - Conservation</div>  <!--Titre-->
                     <div class="nmDesc">Que mettre au frigo ? Les herbes de monsieur Baizhu, bien sûr... Le lait de coco... Ah, et n'oublions pas Hu Tao tant qu'on y est.</div>  <!--Description-->
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
                     <p><strong>Rêves de farniente</strong></p> <!--Titre-->
                     <p>Tenue de Qiqi. Une tenue d'enfant couverte de talismans destinés à Qiqi, qu'elle utilise notamment pour la cueillette d'herbes médicinales.</p> <!--Description-->
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
         background-position: -55rem -14rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>