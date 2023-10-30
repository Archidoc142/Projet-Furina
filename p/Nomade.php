<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Nomade';"); // Personnage
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 205;"); // Nourriture
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
            <tr><td>LVL</td><td>PV de base</td><td>ATQ de base</td><td>DÉF de base</td><td>Taux CRIT</td></tr>
            <tr> <td>1</td> <td>791</td> <td>26</td> <td>47</td> <td>5.0%</td> </tr>
            <tr> <td>5</td> <td>1055</td> <td>34</td> <td>63</td> <td>5.0%</td> </tr>
            <tr> <td>10</td> <td>1385</td> <td>45</td> <td>83</td> <td>5.0%</td> </tr>
            <tr> <td>15</td> <td>1719</td> <td>55</td> <td>103</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>20</td> <td>2053</td> <td>66</td> <td>123</td> <td>5.0%</td> </tr>
            <tr> <td>20+</td> <td>2731</td> <td>88</td> <td>163</td> <td>5.0%</td> </tr>
            <tr> <td>25</td> <td>3067</td> <td>99</td> <td>183</td> <td>5.0%</td> </tr>
            <tr> <td>30</td> <td>3405</td> <td>110</td> <td>203</td> <td>5.0%</td> </tr>
            <tr> <td>35</td> <td>3745</td> <td>121</td> <td>224</td> <td>5.0%</td> </tr>
            <tr class="tdd"> <td>40</td> <td>4086</td> <td>132</td> <td>244</td> <td>5.0%</td> </tr>
            <tr> <td>40+</td> <td>4568</td> <td>147</td> <td>273</td> <td>9.8%</td> </tr>
            <tr> <td>45</td> <td>4911</td> <td>158</td> <td>293</td> <td>9.8%</td> </tr>
            <tr class="tdd"> <td>50</td> <td>5256</td> <td>169</td> <td>314</td> <td>9.8%</td> </tr>
            <tr> <td>50+</td> <td>5899</td> <td>190</td> <td>352</td> <td>14.6%</td> </tr>
            <tr> <td>55</td> <td>6245</td> <td>201</td> <td>373</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>60</td> <td>6593</td> <td>213</td> <td>394</td> <td>14.6%</td> </tr>
            <tr> <td>60+</td> <td>7075</td> <td>228</td> <td>423</td> <td>14.6%</td> </tr>
            <tr> <td>65</td> <td>7425</td> <td>239</td> <td>444</td> <td>14.6%</td> </tr>
            <tr class="tdd"> <td>70</td> <td>7777</td> <td>251</td> <td>465</td> <td>14.6%</td> </tr>
            <tr> <td>70+</td> <td>8259</td> <td>266</td> <td>493</td> <td>19.4%</td> </tr>
            <tr> <td>75</td> <td>8612</td> <td>278</td> <td>514</td> <td>19.4%</td> </tr>
            <tr class="tdd"> <td>80</td> <td>8968</td> <td>289</td> <td>536</td> <td>19.4%</td> </tr>
            <tr> <td>80+</td> <td>9450</td> <td>305</td> <td>564</td> <td>24.2%</td> </tr>
            <tr> <td>85</td> <td>9806</td> <td>316</td> <td>586</td> <td>24.2%</td> </tr>
            <tr class="tdd"> <td>90</td> <td>10164</td> <td>328</td> <td>607</td> <td>24.2%</td> </tr>
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
            <p class="titrePerso">L'éternellement égaré</p> <!-- Titre -->
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
                  <td class="tdv">10164</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">328</td>  <!--Stat-->
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">607</td>  <!--Stat-->
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
                  <td>Peregrinus</td>   <!--Constellation-->
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Aucune</td>   <!--Description-->
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>1/3</td>   <!--Description-->
               </tr>
         </table>

         <div class="descPerso">Une silhouette itinérante dont l'identité est un mystère. S'habillant comme un ascète des montagnes, il n'en joue cependant pas le rôle.</div>   <!--Description-->
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/catalyst.png" alt="icon_apt1">  <!--image icon #2-->
                  <p>Battement flottant</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Utilise des lames de vent pour enchaîner jusqu'à 3 attaques qui infligent des <span class="anemoS">DGT Anémo</span>.</p> <!--Attaque #1-->
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour concentrer un champ à haute pression en avant et infliger des <span class="anemoS">DGT Anémo de zone</span> après un court délai.</p> <!--Attaque #2-->
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs en concentrant ses pouvoirs Anémo, infligeant des DGT aux ennemis en chemin et des <span class="anemoS">DGT Anémo de zone</span> à l'impact.</p> <!--Attaque #3-->
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
                  <p>Hanega : Lyrisme des vents</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Concentre la puissance des vents pour déjouer les contraintes de la terre, infligeant des <span class="anemoS">DGT Anémo</span> dans la zone avant de bondir dans les airs pour entrer dans l'état Bienfait venteux.<br><br><span class="spanImp">Bienfait venteux</span><br>Dans cet état, le Nomade ne peut pas effectuer d'attaques plongeantes, mais ses attaques normales et chargées sont respectivement converties en Kuugo : Fushoudan et Kuugo : Toufukai, dont les DGT et la zone d'effet augmentent, les DGT étant alors respectivement considérés comme des DGT d'attaque normale ou comme des DGT d'attaque chargée. De plus, Kuugo : Toufukai ne consomme pas d'endurance.<br>Dans cet état, le Nomade flotte de façon continue dans les airs et ses actions déclenchent les effets suivants:<br>· Il consomme de façon continue du Kuugoryoku pour maintenir l'état de flottaison.<br>· Son sprint consomme une quantité de Kuugoryoku supplémentaire pour qu'il puisse accélérer dans les airs. Maintenir le sprint consomme du Kuugoryoku de façon continue afin de maintenir la vitesse. Cet effet remplace le sprint.<br>· Sauter consomme une quantité de Kuugoryoku supplémentaire pour augmenter la hauteur de flottaison. Maintenir le saut consomme du Kuugoryoku de façon continue afin de continuer à monter.<br><br>L'état prend fin une fois le Kuugoryoku épuisé.<br>Utiliser à nouveau la compétence pendant la durée du bienfait venteux met fin à l'état.<br><br><span class="italic">« Le monde danse dans un tourbillon d'apesanteur, présentant un secret qui ne peut être décelé que dans les fleurs.»</span></p> <!--Description-->
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
                  <p>Kyougen : Gobandate en cinq actes</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Compresse l'atmosphère en une faille capable de mettre fin à tous les soucis, infligeant plusieurs fois des <span class="anemoS">DGT Anémo de zone</span>.<br>Si le personnage est dans l'état Bienfait venteux accordé par « Hanega : Lyrisme des vents », l'état prend fin après l'utilisation de cette compétence.<br><br><span class="italic">« Brillant est le regard rétréci du ciel, jetant son regard sur les rêves passés et présents, comme l'éclat qui lave la poussière sous les vents. »</span></p> <!--Description-->
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
                  <p>Fleur de jade</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pendant <span class="spanImp">Hanega : Lyrisme des vents</span>, entrer au contact de l'élément <span class="hydroS">Hydro</span>/<span class="pyroS">Pyro</span>/<span class="cryoS">Cryo</span>/<span class="electroS">Électro</span> permet à l'état Bienfait venteux qui en résulte d'obtenir un effet de renforcement selon l'élément concerné :<br>· <span class="hydroS">Hydro</span> : la limite de Kuugoryoku augmente de 20 pts.<br>· <span class="pyroS">Pyro</span> : l'ATQ augmente de 30 %.<br>· <span class="cryoS">Cryo</span> : le taux CRIT augmente de 20%.<br>· <span class="electroS">Électro</span> : les attaques normales et chargées restaurent 0,8 pt d'énergie élémentaire après avoir touché un ennemi. L'énergie élémentaire peut être restaurée une fois toutes les 0,2 s de cette manière.<br><br>Un maximum de 2 types différents de ces effets de renforcement peut être obtenu simultanément.</p></div> <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A5.png" alt="icon_pas2"> <!--image icon #5-->
                  <p>Rafales de rêverie</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque le Nomade touche un ennemi avec Kuugo : Fushoudan ou Kuugo: Toufukai pendant l'état <span class="spanIm">Bienfait venteux</span>, il a 16 % de chances d'obtenir l'effet Descente : la prochaine fois qu'il accélère dans les airs pendant cet état Bienfait venteux, l'effet est annulé, l'accélération ne consomme aucun point de Kuugoryoku et il tire 4 flèches de vent qui infligent chacune des <span class="anemoS">DGT Anémo</span> d'une valeur équivalant à 35 % de son ATQ.<br>Si Kuugo : Fushoudan ou Kuugo: Toufukai ne déclenche pas l'effet Descente, les chances de le déclencher la fois suivante augmentent de 12 %. Le calcul du déclenchement de l'effet se fait une fois toutes les 0,1 s.</p></div>  <!--Description-->
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>A6.png" alt="icon_pas3">  <!--image icon #6-->
                  <p>Accord des vents tourbillonnants</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Les moras utilisés lors de l'élévation de catalyseurs et d'arcs diminuent de 50%.</p></div>  <!--Description-->
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C1.png" alt="icon_cons1">  <!--image constellation #1-->
                  <p>1. Shoban : Pennage ostentatoire</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pendant l'état <span class="spanImp">Bienfait venteux</span>, la VIT d'attaque de Kuugo: Fushoudan et de Kuugo : Toufukai du Nomade augmente de 10 %.<br>De plus, les flèches de vent tirées par l'aptitude passive « Rafales de rêverie » infligent des DGT supplémentaires équivalant à 25% de l'ATQ. L'aptitude passive «Rafales de rêverie » doit être déjà débloquée pour cet effet.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C2.png" alt="icon_cons2">  <!--image constellation #2-->
                  <p>2. Niban : Île dans les vagues blanches</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pendant l'état <span class="spanImp">Bienfait venteux</span>, les DGT infligés par <span class="spanImp">Kyougen : Gobandate en cinq actes</span> augmentent de 4 % pour chaque point de différence entre la quantité actuelle et maximale de Kuugoryoku.<br>Les DGT infligés par Kyougen : Gobandate en cinq actes peuvent être augmentés d'un maximum de 200 % de cette manière.</p></div>  <!--Description-->
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C3.png" alt="icon_cons3">  <!--image constellation #3-->
                  <p>3. Sanban : Kusemai de belle-de-nuit</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Kyougen : Gobandate en cinq actes</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C4.png" alt="icon_cons4">  <!--image constellation #4-->
                  <p>4. Yonban : Dérive vers le printemps</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Si l'effet de renforcement selon le type élémentaire de l'aptitude passive « Fleur de jade » est déclenché en utilisant <span class="spanImp">Hanega : Lyrisme des vents</span>, un effet de renforcement n'ayant pas été déclenché cette fois-ci est aléatoirement accordé. Un maximum de 3 types différents de ces effets de renforcement peut être obtenu simultanément.<br>L'aptitude passive « Fleur de jade » doit être déjà débloquée.</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C5.png" alt="icon_cons5">  <!--image constellation #5-->
                  <p>5. Matsuban : Illustre du lointain</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Hanega : Lyrisme des vents</span> +3.<br>Niveau max : 15</p></div>  <!--Description-->
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/<?php echo $bddResults['name']; ?>C6.png" alt="icon_cons6">  <!--image constellation #6-->
                  <p>6. Shugen : Mélancolie de la brume</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque le Nomade touche un ennemi en utilisant Kuugo : Fushoudan pendant l'état <span class="spanImp">Bienfait venteux</span>, les effets suivants se produisent :<br>· Il déclenche Kuugo : Fushoudan une fois de plus à l'emplacement touché, infligeant 40 % des DGT d'origine, ces DGT étant considérés comme des DGT d'attaque normale.<br>· Si son Kuugoryoku est inférieur à 40 pts, il restaure 4 pts. Les points de Kuugoryoku peuvent être restaurés une fois toutes les 0,2 s de cette manière, et un maximum de 5 fois pour chaque durée de l'état Bienfait venteux.</p></div>  <!--Description-->
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
               <a href="p/material.php?id=190" class="ascRsItem center">  <!--Ressource-->
                  <div class="c2"><img src="img/material/Éclat de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>1</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=191" class="ascRsItem center">  <!--Ressource-->
                  <div class="c3"><img src="img/material/Fragment de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=192" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Morceau de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
                  <div>9</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=193" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Pierre de turquoise vayuda.png" alt="rs"></div>  <!--Ressource-->
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
               <a href="p/material.php?id=412" class="ascRsItem center">  <!--Ressource-->
                  <div class="c4"><img src="img/material/Calibre perpétuel.png" alt="rs"></div>  <!--Ressource-->
                  <div>46</div>  <!--Ressource-->
               </a>
               <a href="p/material.php?id=417" class="ascRsItem center">  <!--Ressource-->
                  <div class="c5"><img src="img/material/Cloche de daka.png" alt="rs"></div>  <!--Ressource-->
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
                     <img src="img/namecard/Nomade - Ballade d'errance2.png" alt="namecard">  <!--Namecard-->
                     <div class="nmTitle">Nomade - Ballade d'errance</div>  <!--Titre-->
                     <div class="nmDesc">Le passé se cache dans un monde où l'éphémère règne et la neige fine épouse la forme des fleurs.</div>  <!--Description-->
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
                     <p><strong>Vide courroucé</strong></p> <!--Titre-->
                     <p>Tenue de Nomade. Ces vêtements sont fréquemment portés par des pratiquants de l'ascétisme. Le chapeau l'abrite temporairement de la pluie, mais cela ne fait rien pour calmer le vent et la tempête qui font rage en lui.</p> <!--Description-->
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
         background-position: -55rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>