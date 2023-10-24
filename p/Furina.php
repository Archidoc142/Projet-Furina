<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $stmt = $bdd->prepare("SELECT * FROM personnage WHERE name = 'Furina';");
   $food = $bdd->query("SELECT id, name, type, rarity, type_id FROM food WHERE id = 258;");
   $stmt->execute();
   $food->execute();
   $bddResults = $stmt->fetch(PDO::FETCH_ASSOC);
   $bddFood = $food->fetch(PDO::FETCH_ASSOC);
   include_once '../inc/header.inc.php';
?>
<img src="img/wish/Furina.png" alt="background" class="image-background"> <!--Background-->

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
            <tr><td>1</td>   <td>1192</td>   <td>19</td>   <td>54</td>   <td>5.0%</td></tr>
            <tr><td>5</td>   <td>1588</td>   <td>25</td>   <td>72</td>   <td>5.0%</td></tr>
            <tr><td>10</td>   <td>2087</td>   <td>33</td>   <td>95</td>   <td>5.0%</td></tr>
            <tr><td>15</td>   <td>2588</td>   <td>41</td>   <td>118</td>   <td>5.0%</td></tr>
            <tr class="tdd"><td>20</td>   <td>3091</td>   <td>49</td>   <td>140</td>   <td>5.0%</td></tr>
            <tr><td>20+</td>   <td>4113</td>   <td>66</td>   <td>187</td>   <td>5.0%</td></tr>
            <tr><td>25</td>   <td>4619</td>   <td>74</td>   <td>210</td>   <td>5.0%</td></tr>
            <tr><td>30</td>   <td>5128</td>   <td>82</td>   <td>233</td>   <td>5.0%</td></tr>
            <tr><td>35</td>   <td>5639</td>   <td>90</td>   <td>256</td>   <td>5.0%</td></tr>
            <tr class="tdd"><td>40</td>   <td>6154</td>   <td>98</td>   <td>280</td>   <td>5.0%</td></tr>
            <tr><td>40+</td>   <td>6880</td>   <td>110</td>   <td>313</td>   <td>9.8%</td></tr>
            <tr><td>45</td>   <td>7396</td>   <td>118</td>   <td>336</td>   <td>9.8%</td></tr>
            <tr class="tdd"><td>50</td>   <td>7916</td>   <td>126</td>   <td>360</td>   <td>9.8%</td></tr>
            <tr><td>50+</td>   <td>8884</td>   <td>142</td>   <td>404</td>   <td>14.6%</td></tr>
            <tr><td>55</td>   <td>9406</td>   <td>150</td>   <td>427</td>   <td>14.6%</td></tr>
            <tr class="tdd"><td>60</td>   <td>9930</td>   <td>158</td>   <td>451</td>   <td>14.6%</td></tr>
            <tr><td>60+</td>   <td>10656</td>   <td>170</td>   <td>484</td>   <td>14.6%</td></tr>
            <tr><td>65</td>   <td>11183</td>   <td>178</td>   <td>508</td>   <td>14.6%</td></tr>
            <tr class="tdd"><td>70</td>   <td>11712</td>   <td>187</td>   <td>532</td>   <td>14.6%</td></tr>
            <tr><td>70+</td>   <td>12438</td>   <td>198</td>   <td>565</td>   <td>19.4%</td></tr>
            <tr><td>75</td>   <td>12970</td>   <td>207</td>   <td>589</td>   <td>19.4%</td></tr>
            <tr class="tdd"><td>80</td>   <td>13505</td>   <td>215</td>   <td>614</td>   <td>19.4%</td></tr>
            <tr><td>80+</td>   <td>14231</td>   <td>227</td>   <td>647</td>   <td>24.2%</td></tr>
            <tr><td>85</td>   <td>14768</td>   <td>235</td>   <td>671</td>   <td>24.2%</td></tr>
            <tr class="tdd"><td>90</td>   <td>15307</td>   <td>244</td>   <td>696</td>   <td>24.2%</td></tr>
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
            <p class="titrePerso">Solo infini de solitude</p> <!-- Titre -->
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
                  <td class="tdv">15307</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M7.755 1.651l1.643 1.643 1.928-1.926L11.3.25a.228.228 0 01.228-.22h2.2a.228.228 0 01.228.229c-.121 2.66.556 2.457-1.337 2.4l-1.933 1.925L12.33 6.23a.228.228 0 010 .322c-1.167 1.208-.775.907-1.892-.106l-7.151 7.147a.457.457 0 01-.313.137 21.32 21.32 0 01-2.954.238 21.172 21.172 0 01.238-2.953.451.451 0 01.134-.319l7.146-7.153-.838-.839a.229.229 0 010-.323l.732-.73a.228.228 0 01.322 0z"/></svg></span>
                     <p>ATQ de base</p>
                  </td>
                  <td class="tdv">244</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M13.442.726a.291.291 0 00-.175-.268C12.859.286 11.503 0 7 0S1.143.286.735.458a.291.291 0 00-.176.269v7.44a.868.868 0 00.125.453c1.579 2.6 5.347 4.855 6.16 5.339a.292.292 0 00.3 0c.79-.482 4.56-2.688 6.169-5.335a.868.868 0 00.127-.455zM7 11.968c.059.013-3.56-2.017-4.824-4.368V1.565s0-.452 4.824-.452z"/></svg></span>
                     <p>DÉF de base</p>
                  </td>
                  <td class="tdv">696</td>
               </tr>
               <tr>
                  <td class="flex">
                     <span><svg width="16" height="16" viewBox="0 0 15 15"><path d="M14 0L7.256 3.5 1.973 1.465 3.5 6.236 0 14l7.256-3.5 4.771 1.527L10.5 7.256zm-3.24 3.24L8.88 7.136 9.701 9.7l-2.564-.82-3.898 1.88 1.88-4.17-.82-2.565L7.137 5.12z"/></svg></span>
                     <p>Taux CRIT</p>
                  </td>
                  <td class="tdv">24.2%</td>
               </tr>
         </table>

         <div class="details whitneyBold pointer" data-filter-target="#filter">Détails</div>
         
         <div class="whitneyBold nessMat flex">
            <div class="flex align cost">
               <span class="CM">Requis: </span>
               <img src="img/material/Pierre de la fatalité.png" alt="coût"> <!--Prix-->
               <p>180</p>
            </div>
         </div>

         <table class="tbH"> <!-- Table des propriétés-->
               <tr>
                  <td class="flex tdImg">Élément</td>               
                  <td><img src='img/icon/<?php echo $bddResults['element']; ?>.png' width='24' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex tdImg">Arme</td>
                  <td><img src='img/icon/sword.png' width='26' alt='element'></td>
               </tr>
               <tr>
                  <td class="flex">Constellation</td>
                  <td>Animula Choragi</td>
               </tr>
               <tr>
                  <td class="flex">Affiliation</td>
                  <td>Cour de Fontaine</td>
               </tr>
               <tr>
                  <td class="flex">Anniversaire</td>
                  <td>10/13</td>
               </tr>
         </table>

         <div class="descPerso">Le point central absolu de la scène du jugement, jusqu'aux applaudissements finaux.</div>
      </div>
      <div class="talent contenu hidden">
         <h2>Talent</h2>
         <div class="gridTalent">
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/sword.png" alt="icon_apt1">
                  <p>Attaque normale : Sollicitation de la soliste</p> <!--Aptitude #1-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <span class="spanImp">Attaque normale</span>
                  <p>Enchaîne jusqu'à 4 attaques.</p>
                  <br>
                  <span class="spanImp">Attaque chargée</span>
                  <p>Consomme de l'endurance pour déclencher une aura de danse solo, infligeant des DGT physiques aux ennemis proches et modifiant l'alignement de l'Arkhe de Furina. Si des membres du salon ou un chanteur des eaux invoqués par sa compétence élémentaire « Salon solitaire » sont présents sur le champ de bataille, ils sont changés en conséquence.</p>
                  <br>
                  <span class="spanImp">Arkhe : Sacralité et sécularisation</span>
                  <p>Régulièrement, lorsque l'attaque normale de Furina touche, une épine d'inhalation ou une lame fluide est libérée à l'emplacement touché selon l'alignement actuel de son Arkhe pour infliger des <span class="hydroS">DGT Hydro</span> chargés d'énergie pneuma ou ousia.<br>Lorsque Furina est déployée au combat, son Arkhe est chargé d'énergie ousia.</p>
                  <br>
                  <span class="spanImp">Attaque plongeante</span>
                  <p>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact.</p>
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>

                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût"> <!--Prix-->
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/Salon solitaire.png" alt="icon_apt2">
                  <p>Salon solitaire</p> <!--Aptitude #2-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Furina invite les convives du Salon solitaire à se joindre à sa performance, convoquant les membres du salon ou le chanteur des eaux selon l'<span class="spanImp">alignement actuel de son Arkhe</span>.<br><br><span class="spanImp">Ousia</span><br>De l'écume danse joyeusement, infligeant des <span class="hydroS">DGT Hydro de zone</span> selon les PV max de Furina et convoquant 3 membres du salon : le gentilhomme Usher en forme de poulpe bouffi, la surintendante Chevalmarin en forme d'Hippocampe bulleux et la demoiselle Crabaletta en forme de Cuiracrabe.Ces derniers attaquent les ennemis proches de façon intermittente en donnant la priorité aux cibles que le personnage déployé attaque, infligeant des <span class="hydroS">DGT Hydro</span> selon les PV max de Furina.En attaquant, les membres du salon renforcent l'attaque en cours selon le nombre de personnages de l'équipe à proximité dont les PV sont supérieurs à 50 % tout en consommant les PV de ces derniers : lorsque 1, 2, 3 ou au moins 4 personnages sont concernés, l'attaque inflige des DGT pour une valeur équivalant respectivement à 110 %, 120 %, 130 % ou 140 % des DGT d'origine.<br><br><span class="spanImp">Pneuma</span><br>Furina convoque le chanteur des eaux, qui restaure régulièrement les PV des personnages déployés à proximité selon ses PV max.<br><br>Les membres du salon et le chanteur des eaux partagent la même durée. Ainsi, lorsque Furina change ces convives en utilisant son attaque chargée, les nouveaux arrivants héritent de la durée restante.<br>Lorsque des membres du salon ou un chanteur des eaux sont présents, Furina peut se déplacer sur l'eau.<br><br><span class="italic">Une liste fixe d'habitués fréquente le Salon solitaire de Furina. Parfois, la demoiselle Crabaletta, la surintendante Chevalmarin et le gentilhomme Usher viennent ; les mercredis maussades, c'est le chanteur qui rend visite.</span></p>
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>
                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût"> <!--Prix-->
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>aptitude
            <div class="aptitude">
               <div class="align flex titleApt">
                  <img src="img/apt/Liesse populaire.png" alt="icon_apt3">
                  <p>Liesse populaire</p> <!--Aptitude #3-->
               </div>
               <div class="InfoTalent poppinsLight">
                  <div class="labelInfo center whitneyBold">Informations sur les talents</div>

                  <p>Éveille l'envie de se délecter, créant une scène d'écume qui inflige des <span class="hydroS">DGT Hydro de zone</span> selon les PV max de Furina et accorde l'état Réjouissance universelle aux personnages de l'équipe à proximité : pendant sa durée, lorsque les PV actuels d'un personnage augmentent ou diminuent, Furina obtient 1 pt de fanfare à chaque fois que le personnage obtient ou perd des PV pour une valeur équivalant à 1 % de ses PV Max.<br>De plus, les DGT infligés et le bonus de soins reçus de tous les personnages de l'équipe à proximité augmentent selon la quantité de points de fanfare de Furina.<br>Une fois la durée terminée, la fanfare de Furina est annulée.<br><br><span class="italic">« Acclamez ! Louez ! Réjouissez ! Buvez ! Chaque nuit sans banquet est un gaspillage sordide de douloureuse et sobre lumière du jour... Et, hmm, ceux qui ne sont pas encore en âge peuvent prendre du jus de raisin à la place ! »</span></p>
                  <div class="labelInfo center whitneyBold marg-tt">Attributs de compétence</div>
                  <div class="whitneyBold nessMat flex">
                     <div class="flex align cost">
                        <span class="CM">Requis: </span>
                        <img src="img/material/mora.png" alt="coût"> <!--Prix-->
                        <p>1 652 500</p>
                     </div>
                  </div>
               </div>
            </div>
            <h2>Passive</h2><br>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Valse inarrêtable.png" alt="icon_pas1">
                  <p>Valse inarrêtable</p> <!--Passif #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsque le personnage déployé de votre groupe est soigné, si ces soins ne proviennent pas de Furina et dépassent la quantité maximum qu'il peut recevoir, Furina soigne les personnages de l'équipe à proximité pour une valeur équivalant à 2 % de leurs PV max respectifs une fois toutes les 2 s pendant 4 s.</p></div>
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Confession inattendue.png" alt="icon_pas2">
                  <p>Confession inattendue</p> <!--Passif #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Chaque tranche de 1 000 PV max que Furina possède accorde à son <span class="spanImp">Salon solitaire</span> différents effets bonus selon l'alignement de son Arkhe :<br>- Les DGT infligés par les membres du salon augmentent de 0,7 %, les DGT infligés pouvant être augmentés d'un maximum de 28 % de cette manière.<br>- L'intervalle des soins accordés aux personnages déployés à proximité par le chanteur des eaux diminue de 0,4 %, l'intervalle des soins pouvant être diminué d'un maximum de 16 % de cette manière.</p></div>
            </div>
            <div class="passif">
               <div class="align flex titleApt">
                  <img src="img/apt/Scène de la mer.png" alt="icon_pas3">
                  <p>Scène de la mer</p> <!--Passif #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Le TdR des capacités des Aberrants fontemarins xénochromatiques diminue de 30 %.</p></div>
            </div>
         </div>
      </div>
      <div class="constellation contenu hidden">
         <h2>Constellation</h2>
         <div class="gridConstellation">
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC1.png" alt="icon_cons1">
                  <p>1. « L'amour est un oiseau rebelle que nul ne peut apprivoiser »</p> <!--Constellation #1-->
               </div>
               <div class="InfoTalent poppinsLight"><p>En utilisant <span class="spanImp">Liesse populaire</span>, Furina obtient 150 pts de fanfare.<br>De plus, la limite de fanfare augmente de 100 pts.</p></div>
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC2.png" alt="icon_cons2">
                  <p>2. « Comme la plume au vent, femme est volage »</p> <!--Constellation #2-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Pendant la durée de <span class="spanImp">Liesse populaire</span>, l'obtention de fanfare de Furina après une augmentation ou une diminution des PV actuels des personnages de l'équipe à proximité augmente de 250 %. De plus, chaque point de fanfare au-dessus de la limite augmente les PV max de Furina de 0,35 %, la limite de PV max pouvant être augmentée d'un maximum de 140 % de cette manière.</p></div>
            </div>         
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC3.png" alt="icon_cons3">
                  <p>3. « Mon mystère est scellé en moi, personne ne saura mon nom »</p> <!--Constellation #3-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Liesse populaire</span> +3.<br>Niveau max : 15</p></div>
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC4.png" alt="icon_cons4">
                  <p>4. « Ils ne connaissent pas la vie, ceux hors du monde souterrain ! »</p> <!--Constellation #4-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'un membre du salon de <span class="spanImp">Salon solitaire</span> touche un ennemi ou qu'un chanteur des eaux restaure les PV d'un personnage déployé, Furina récupère 4 pts d'énergie élémentaire. Cet effet peut être déclenché une fois toutes les 5 s.</p></div>
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC5.png" alt="icon_cons1">
                  <p>5. « Son nom que je connais maintenant, c'est... »</p> <!--Constellation #5-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Niveau d'aptitude <span class="spanImp">Salon solitaire</span> +3.<br>Niveau max : 15</p></div>
            </div>
            <div class="constel">
               <div class="align flex titleApt">
                  <img src="img/apt/FurinaC6.png" alt="icon_cons1">
                  <p>6. « Entends-moi, et levons les coupes de l'amour ! »</p> <!--Constellation #6-->
               </div>
               <div class="InfoTalent poppinsLight"><p>Lorsqu'elle utilise sa compétence élémentaire « Salon solitaire », Furina devient le centre d'attention pendant 10 s.<br>Pendant cette durée, les DGT de ses attaques normales, chargées et plongeantes sont convertis en <span class="hydroS">DGT Hydro</span> ne pouvant pas être enchantés et augmentent d'une valeur équivalant à 15 % de ses PV max.<br>De plus, après avoir touché un ennemi pendant cette durée, ses attaques normales, chargées et l'impact au sol de ses attaques plongeantes produisent divers effets toutes les 0,1 s selon l'alignement actuel de son Arkhe :<br><br><span class="spanImp">Arkhe : Ousia</span><br>Soigne les PV de tous les personnages de l'équipe à proximité pour une valeur équivalant à 4 % des PV max de Furina toutes les secondes pendant 2,5 s, tout déclenchement répété prolongeant cette durée.<br><br><span class="spanImp">Arkhe : Pneuma</span><br>Les DGT de cette attaque normale, chargée ou plongeante (lorsque cette dernière touche le sol) augmentent encore d'une valeur équivalant à 20 % des PV max de Furina. De plus, lorsqu'une de ces attaques touche un ennemi, tous les personnages de l'équipe à proximité perdent 1 % de leurs PV actuels.<br><br>Les effets mentionnés ci-dessus peuvent être déclenchés un maximum de 7 fois pendant la durée d'un centre d'attention, et ce dernier prend fin après 7 déclenchements d'effet ou lorsque sa durée expire.</p></div>
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
               <a href="p/material.php?id=137" class="ascRsItem center">
                  <div class="c1"><img src="img/material/Lys lacmineux.png" alt="rs"></div>
                  <div>168</div>
               </a>
               <a href="p/material.php?id=164" class="ascRsItem center">
                  <div class="c2"><img src="img/material/Astuces du voyageur.png" alt="rs"></div>
                  <div>2</div>
               </a>
               <a href="p/material.php?id=166" class="ascRsItem center">
                  <div class="c4"><img src="img/material/Leçons du héros.png" alt="rs"></div>
                  <div>418</div>
               </a>
               <a href="p/material.php?id=178" class="ascRsItem center">
                  <div class="c2"><img src="img/material/Éclat de lazurite varunada.png" alt="rs"></div>
                  <div>1</div>
               </a>
               <a href="p/material.php?id=179" class="ascRsItem center">
                  <div class="c3"><img src="img/material/Fragment de lazurite varunada.png" alt="rs"></div>
                  <div>9</div>
               </a>
               <a href="p/material.php?id=180" class="ascRsItem center">
                  <div class="c4"><img src="img/material/Morceau de lazurite varunada.png" alt="rs"></div>
                  <div>9</div>
               </a>
               <a href="p/material.php?id=181" class="ascRsItem center">
                  <div class="c5"><img src="img/material/Pierre de lazurite varunada.png" alt="rs"></div>
                  <div>6</div>
               </a>
               <a href="p/material.php?id=221" class="ascRsItem center">
                  <div class="c5"><img src="img/material/Couronne de la sagesse.png" alt="rs"></div>
                  <div>3</div>
               </a>
               <a href="p/material.php?id=243" class="ascRsItem center">
                  <div class="c2"><img src="img/material/Enseignement de la Justice.png" alt="rs"></div>
                  <div>9</div>
               </a>
               <a href="p/material.php?id=244" class="ascRsItem center">
                  <div class="c3"><img src="img/material/Guide de la Justice.png" alt="rs"></div>
                  <div>63</div>
               </a>
               <a href="p/material.php?id=245" class="ascRsItem center">
                  <div class="c4"><img src="img/material/Philosophie de la Justice.png" alt="rs"></div>
                  <div>114</div>
               </a>
               <a href="p/material.php?id=318" class="ascRsItem center">
                  <div class="c1"><img src="img/material/Nectar de Fleur mensongère.png" alt="rs"></div>
                  <div>36</div>
               </a>
               <a href="p/material.php?id=319" class="ascRsItem center">
                  <div class="c2"><img src="img/material/Nectar miroitant.png" alt="rs"></div>
                  <div>96</div>
               </a>
               <a href="p/material.php?id=320" class="ascRsItem center">
                  <div class="c3"><img src="img/material/Nectar élémentaire.png" alt="rs"></div>
                  <div>129</div>
               </a>
               <a href="p/material.php?id=318" class="ascRsItem center"> <!--À modifié-->
                  <div class="c5"><img src="img/material/Nectar de Fleur mensongère.png" alt="rs"></div> <!--À modifié-->
                  <div>18</div>
               </a>
               <a href="p/material.php?id=428" class="ascRsItem center">
                  <div class="c4"><img src="img/material/Eau n'ayant pas transcendé.png" alt="rs"></div>
                  <div>46</div>
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
                     <img src="img/namecard/Furina2.png" alt="namecard">
                     <div class="nmTitle">Furina - </div> <!--À modifier-->
                     <div class="nmDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error hic alias nulla pariatur quidem asperiores amet voluptas laudantium qui aspernatur?</div> <!--À modifier-->
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
               <div class="other otherOutfit">
                  <div class="iconsP">
                     <img src="img/perso/Furina.png" alt="icon_perso" class="c5 pointer iconPerso active"> <!--Icon Personnage-->
                  </div>
                  <div class="poppinsLight">
                     <div class="descTenue">
                        <p><strong>Dameisele accomplie</strong></p>
                        <p>Tenue de Furina. Lorsque le rideau se lève, la star du spectacle est censée briller de mille feux sur scène, et même les magnifiques costumes ornés de diamants pâlissent en comparaison de son éclat éblouissant.</p>
                        <img src="img/wish/Furina.png" alt="wish">
                     </div>                  
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <style>
      .ascension{ /*Ascension background*/
         background-image: url("img/wish/Furina.png");
         background-position: -58rem -10rem;
      }
   </style>
<script defer src="js/scriptPerso.js"></script>
<?php include_once '../inc/footer.inc.php';?>