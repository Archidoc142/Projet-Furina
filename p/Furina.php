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
            <div class="cat pointer"><p>Histoire</p></div>
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
                  <p>Sollicitation de la soliste</p> <!--Aptitude #1-->
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
               <a href="p/material.php?id=428" class="ascRsItem center">
                  <div class="c4"><img src="img/material/Eau n'ayant pas transcendé.png" alt="rs"></div>
                  <div>46</div>
               </a>
               <a href="p/material.php?id=505" class="ascRsItem center"> <!--À modifié-->
                  <div class="c5"><img src="img/material/Masse sans lumière.png" alt="rs"></div> <!--À modifié-->
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
                     <img src="img/namecard/Furina - Banquet2.png" alt="namecard">
                     <div class="nmTitle">Furina - Banquet</div> <!--À modifier-->
                     <div class="nmDesc">Une seule personne peut-elle manger tous les gâteaux ? Si elle en mange un par jour, elle devrait pouvoir profiter de gâteaux pendant environ une semaine, n'est-ce pas ? Mais les gâteaux resteront-ils frais aussi longtemps? Hmm... Eh bien, ce n'est pas grave, des amis viendront manger les gâteaux ensemble.</div> <!--À modifier-->
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
      <div class="histoire contenu hidden">
         <div class="histoireGrid">
            <div class="containerHis flex marBB">
               <div class="details hisQ pointer">Histoire</div>
               <div class="details hisQ pointer">Citations</div>
            </div>
               <div class="allHi">
                  <p class="tiPH">Info. personnage</p>
                  <div class="containerHis">
                     <p>À moins de visiter le majestueux Opéra Épiclèse, un voyageur d'une autre nation ne pourra pas comprendre pourquoi la divinité de Fontaine est considérée comme une célébrité.<br>Que ce soit lors de spectacles ou de procès, elle sera toujours assise à la place qui lui est réservée, au-dessus du public. Ses réactions, qui vont du rire à la réprimande, voire à l'hystérie, attirent souvent plus l'attention que ce qui se passe sur scène.<br>Les gens achètent des billets pour vivre de nouvelles expériences sensorielles, et à cet égard, Furina est bien plus populaire que la justice absolue que représente Neuvillette.<br>Lever les yeux pour contempler un être supérieur n'est pas la seule façon de montrer du respect. En réalité, chez les Fontainois, ce respect peut être plutôt décrit comme de l'affection et de la tendresse.<br>Elle n'est peut-être pas parfaite ni extrêmement puissante, mais une fois qu'elle monte sur scène, les gens savent qu'ils peuvent compter sur elle, car elle n'a jamais déçu.<br>Dans les cercles littéraires de Fontaine, il existe une métaphore très populaire selon laquelle Furina serait comme un souvenir de jeunesse impérissable dans le cœur des gens. Et qui ne voudrait pas d'une jeunesse éternelle ?<br>Même si la jeunesse est éphémère, elle ne disparaît pas. Il suffit de suivre la lumière des projecteurs pour s'en apercevoir.</p>
                  </div>

                  <p class="tiPH">Histoire du personnage 1</p>
                  <div class="containerHis">
                     <p>En tant que symbole de l'Opéra Épiclèse, Furina a le droit d'intervenir à tout moment au cours d'un procès.<br>Mais la plupart des questions qu'elle pose ne sont que le fruit de sa curiosité, et n'ont aucun rapport logique avec l'affaire, ce qui provoque parfois des éclats de rire dans le public.<br>Cependant, quand vous commencez à soupçonner que Furina n'est là que pour s'amuser et qu'elle ne comprend pas l'affaire jugée, elle commence à poser des questions très pertinentes.<br>Bien sûr, il y a des moments où elle semble complètement désintéressée par les débats, que ce soit parce qu'elle a mangé un délicieux dessert ou qu'elle a raté le passage d'une parade. Ce n'est cependant pas quelque chose qui déplaît au public, qui trouve fascinant de voir une divinité contrariée.<br>Il n'y a qu'une seule occasion où Furina se comporte différemment, c'est lorsqu'elle monte sur scène pour jouer dans un spectacle.<br>Fontaine compte de très nombreuses œuvres classiques qui ont été transmises de génération en génération depuis l'antiquité. Et de temps en temps, ces œuvres sont jouées à l'Opéra Épiclèse, avec les acteurs les plus en vue du moment dans les rôles principaux.<br>Avant qu'un tel spectacle puisse voir le jour, la troupe de théâtre adresse une invitation à Furina. Là, c'est un peu comme jouer à pile ou face. Si elle est de bonne humeur, elle acceptera de monter sur scène et de la partager avec des humains.<br>Une fois qu'elle a accepté, la représentation devient un véritable événement à Fontaine. Même s'il n'y avait que des places debout et que l'Opéra était rempli au maximum, la demande ne pourrait pas être satisfaite.<br>Quand la musique joue et que Furina monte sur scène, le public oublie ses excentricités et profite d'un personnage joué à la perfection.<br>Quelle que soit la personnalité de son personnage, chacun de ses mouvements est parfaitement exécuté et fidèle au personnage, comme si elle était née pour jouer.<br>C'est grâce à ses performances exceptionnelles qu'elle mérite ce titre de célébrité qu'on lui attribue.<br>Même une célèbre journaliste de L'Oiseau de vapeur, qui est parvenue tant bien que mal à se faufiler dans l'Opéra, est restée sans voix devant sa performance. Et ce n'est qu'après un certain temps, après avoir repris ses esprits, qu'elle se souvint des questions qu'elle avait préparées pour l'interview.<br>« Comment se fait-il que vous jouiez aussi bien, alors qu'on ne vous voit jamais répéter ? »<br>La réponse de Furina est si simple qu'elle semble même arrogante : « Parce que je suis votre Archon, tout simplement. Question suivante ! ».</p>
                  </div>

                  <p class="tiPH">Histoire du personnage 2</p>
                  <div class="containerHis">
                     <p>Les procès et les spectacles occupent la majeure partie du temps de Furina, et quand il n'y en a pas, elle participe à des événements diplomatiques et politiques.<br>Elle se contente cependant d'y assister, car ce sont d'autres personnes qui font le vrai travail, et il en va de même pour certains discours importants.<br>Elle est très reconnaissante envers ces personnes, car elle a entendu dire que les Archons des autres nations ont un nombre incalculable de préoccupations et de problèmes dont ils doivent s'occuper. Ils n'ont donc pas la chance de mener une vie comme la sienne.<br>Un jour, désireuse de montrer une forme d'exemple « divin » en quelque sorte, elle a proposé d'aider au Palais Mermonia, car il y avait énormément de choses à faire.<br>Mais tant les humains que les mélusines ont refusé son aide, affirmant qu'il n'y avait aucune tâche digne d'une divinité.<br>Bien qu'elle ait été heureuse d'entendre cette phrase, elle finit aussi par réaliser que travailler au Palais Mermonia pour tuer l'ennui n'était pas la solution.<br>Par ailleurs, Furina a un passe-temps que très peu de gens connaissent : jouer avec de petits animaux.<br>Fontaine compte de nombreux plans d'eau et de magnifiques paysages où vivent d'adorables créatures. Elles lui permettent de se changer les idées et de faire un peu autre chose que de toujours interagir avec des gens.<br>Cependant, les animaux n'ont pas le même tempérament que les humains, et Furina ne s'y prend généralement pas très bien. Par exemple, les méduses chapeautées projettent des bulles sur tout son visage, et les raies prédatrices la pourchassent puis la poussent à fuir.<br>D'une certaine manière, la vie dans l'eau est beaucoup plus primitive et sauvage qu'à la surface, car ces créatures sous-marines ne changent pas leur façon d'agir sous prétexte qu'elle est une divinité.<br>Avec le temps, Furina a trouvé les animaux parfaits pour elle : les boudinés qui se couchent paisiblement au soleil sur les plages.<br>Ces animaux ne réagissent pas même si vous leur pincez les joues, leur caressez le ventre ou les retournez. Tout au plus, ils tourneront la tête et émettront un léger bruit en signe de protestation.<br>« Qu'est-ce qui ne va pas ? Ah, tu aimes ça ? Haha, moi aussi ! »<br>Ils peuvent parfois avoir des problèmes de communication, mais on peut dire qu'ils sont devenus bons amis.</p>
                  </div>
                              
                  <p class="tiPH">Histoire du personnage 3</p>
                  <div class="containerHis">
                     <p>Bien que Furina donne l'impression d'être dans son monde et de ne pas attacher beaucoup d'importance aux règles, il arrive qu'elle montre une facette plus sérieuse de sa personnalité, notamment avant et après une représentation.<br>Par exemple, en ce qui concerne la couleur des accessoires, l'éclairage, l'interprétation et le rythme de la musique, tout doit être parfait.<br>Jouer aux côtés de cette divinité n'est donc pas une promenade de santé vers la gloire. On pourrait plutôt parler d'une ascension qui vous demandera beaucoup d'efforts. Des rumeurs la décrivent comme une diva difficile à satisfaire et qui ne s'intéresse qu'à se montrer sur scène.<br>Une fois, une célèbre troupe de théâtre a eu l'opportunité de se produire aux côtés de Furina. Les membres de cette troupe avaient tellement de mal à satisfaire ses exigences qu'ils n'avaient pas d'autre choix que de dire oui à tout, mais faisaient à leur guise pendant les répétitions.<br>Le directeur de la troupe estimait qu'il s'agissait là de la bonne méthode. Il pensait qu'en raison de sa personnalité, Furina renoncerait à ses exigences s'il lui disait ce qu'elle voulait entendre, et qu'elle allait constater que tout est déjà prêt et qu'il était trop tard pour changer les choses. Il s'agissait là selon lui du meilleur moyen d'éviter bien des ennuis.<br>Mais lorsque les membres de la troupe sont arrivés à l'Opéra Épiclèse avec leurs accessoires pour le spectacle, Furina dirigeait déjà une autre troupe pour mettre la scène en place.<br>« Comme vous avez ignoré toutes mes suggestions, j'ai décidé de jouer avec une autre troupe. »<br>Il était abasourdi, car il pensait que Furina se rendrait compte de ses propres erreurs une fois que la scène serait prête.<br>Mais à en juger par ce qu'ils avaient déjà préparé, la scène mise en place strictement selon ses exigences était de très bonne qualité. Bien qu'il soit impossible pour un spectateur ordinaire de voir la différence, pour un professionnel, le diable se cache dans les détails.<br>Mécontent, le metteur en scène a refusé de simplement s'avouer vaincu, et a reproché à Furina de ne pas avoir tenu sa promesse en travaillant avec une autre troupe sans l'en informer.<br>Furina, qui n'allait pas lui laisser avoir le dernier mot, lui répondit de manière incrédule :<br>« Vous pensiez vraiment pouvoir me tromper aussi facilement ? Gardes ! Emmenez-les loin d'ici ! »</p>
                  </div>
                              
                  <p class="tiPH">Histoire du personnage 4</p>
                  <div class="containerHis">
                     <p>Le rôle de sa vie semblait sans fin et le tomber de rideau était comme une illusion qui n'arriverait jamais. Mais tant que la prophétie représentait une menace, elle n'avait pas d'autre choix que de continuer à jouer son rôle.<br>Bien que les habitants de Fontaine ne l'aient pas soupçonnée depuis longtemps, elle savait que la perte de confiance pouvait commencer par un tout petit doute.<br>Et si, par malheur, son secret était découvert, tous les efforts produits pendant ces longues années n'auraient servi à rien, et Fontaine cesserait d'exister.<br>Alors, sans répit, elle faisait de son mieux pour rire quand elle devait être heureuse, pleurer quand elle devait être triste et se vanter exagérément de sa nature divine quand la situation l'imposait.<br>Furina savait que tout ça n'était rien de plus qu'un rôle. Elle devait simplement l'endurer jusqu'à ce que la crise soit résolue pour qu'elle puisse enfin enlever son masque et être libre de dire ce qu'elle ressentait.<br>Cependant, avec le temps, elle réalisa qu'agir comme une divinité commençait à avoir des conséquences sur sa personnalité.<br>Puis un doute l'envahit : comment devrait-elle réagir si elle ne pouvait pas rire quand elle était censée être heureuse ?<br>Peut-être qu'elle n'aimait pas rire, ou qu'elle avait été de ceux qui abandonnent à la première difficulté. Quoi qu'il en soit, ça faisait longtemps qu'elle n'avait pas ressenti ces émotions.<br>Les plus grands acteurs disent souvent que pour bien jouer un personnage, il faut devenir ce personnage.<br>En ce sens, Furina avait joué le rôle de l'Archon Hydro à la perfection, si bien que sa persévérance avait fini par produire le résultat désiré.<br>Cependant, personne n'avait jamais dit ce qui se passerait une fois sa prestation terminée, puisque pour les autres, la scène ne représentait qu'un instant éphémère.<br>Furina, qui était dans ce rôle depuis si longtemps, ne pouvait plus voir clairement où se trouvait le chemin du retour, car il était enterré sous les sables du temps.</p>
                  </div>
                              
                  <p class="tiPH">Histoire du personnage 5</p>
                  <div class="containerHis">
                     <p>La crise du péché originel était résolue, Fontaine avait adopté un nouvel ordre et les zones touchées se rétablissaient petit à petit, ce qui redonnait de l'espoir pour l'avenir au peuple.<br>La seule à ne pas faire partie de ce nouvel ordre était Furina. Elle s'était empressée de faire ses affaires et de quitter le Palais Mermonia, et elle n'est plus apparue à l'Opéra Épiclèse.<br>Tout ce qu'elle voulait, c'était s'éloigner de ces souvenirs douloureux et elle n'avait aucune envie d'écouter les conversations des gens à son sujet. Ainsi s'achevait l'histoire de l'Archon Hydro.<br>Mais que fait une actrice une fois son travail terminé ? Personne ne pouvait lui donner de réponse, sans compter que l'idée de liberté qu'elle recherchait tant lui semblait désormais très ambiguë.<br>Les bagages de Furina étaient entassés dans un coin de la nouvelle chambre dans laquelle elle avait emménagé. Comme elle n'avait pas l'énergie de défaire ses bagages ni de commencer à s'installer, elle s'allongea simplement sur le lit en regardant le plafond.<br>Les gens qu'elle connaissait avaient très vite trouvé leur place dans ce nouvel ordre. Leur importance était irremplaçable en raison de leur force, de leurs responsabilités ou de leurs amitiés.<br>Dans ces circonstances, la liberté signifiait-elle que plus personne n'avait besoin d'elle ?<br>C'est à ce moment précis que sa première visiteuse inattendue arriva : Clorinde, la duelliste mandatée.<br>Stupéfaite de voir les conditions dans lesquelles Furina vivait, Clorinde lui proposa d'investir son propre argent pour qu'elle puisse vivre dans un meilleur endroit. Furina tenta par tous les moyens de lui sortir cette idée de la tête, mais Clorinde continua d'insister, et elles finirent par déballer les affaires et préparer la chambre.<br>Puis, Clorinde lui expliqua la raison de sa visite. Elle n'assistait généralement pas aux événements sociaux, mais ce soir-là, elle allait rencontrer de vieux amis qui connaissaient aussi Furina. Comme la duelliste mandatée ne l'avait pas vue depuis longtemps, elle voulait l'inviter à la soirée.<br>Par le passé, Furina aurait décliné l'invitation, car elle était obligée de cacher son identité et ne devait donc pas lier d'amitiés trop étroites avec les autres.<br>Elle regarda Clorinde avec un air de culpabilité, ce qui la fit sourire. Cette dernière avait compris depuis longtemps les sentiments de Furina et pourquoi elle évitait ce genre d'événements.<br>« Qu'en dites-vous ? Vous n'avez plus de raison de refuser désormais. »<br>« C'est juste que... je ne suis pas très à l'aise avec ce genre de choses et... je ne veux pas ruiner l'ambiance. »<br>Ce soir-là, Furina comprit enfin ce que ça faisait de boire et de passer un bon moment avec des amis. Au début, elle était un peu timide, mais après deux verres, elle était redevenue elle-même. En réalité, elle serait même montée sur la table si Clorinde ne l'en avait pas empêchée.<br>Elle, qui n'était pas du genre bavarde, ne savait pas que la véritable Furina était aussi extravertie.<br>Quant à Furina, elle ne savait peut-être pas encore où elle devait aller, mais ce qui lui paraissait clair, c'était que la liberté signifiait ne plus être seule.</p>
                  </div>
                              
                  <p class="tiPH">Salon solitaire</p>
                  <div class="containerHis">
                     <p>Un jour, dans une bibliothèque de Fontaine, Furina lut un livre très peu connu dont la protagoniste était une femme de chambre qui travaillait dans un somptueux manoir.<br>L'innocente et insouciante Crabaletta était arrivée dans ce manoir situé dans les montagnes après avoir vu l'offre d'emploi dans un journal. Même si elle était un peu maladroite, elle finit par obtenir le poste et devenir femme de chambre.<br>Le propriétaire du manoir n'y était pas souvent et, bien que ceux chargés de s'occuper des lieux en son absence étaient sa bavarde surintendante et un gentilhomme obsédé par les bonnes manières, la jeune Crabaletta menait une vie tranquille dans cet endroit.<br>Cela faisait longtemps que les gens qui y vivaient n'étaient pas allés en ville, alors elle leur apprit à chanter les derniers opéras et à jouer aux jeux de société les plus populaires. De plus, la relation entre les domestiques était très étroite et ils appréciaient le temps qu'ils passaient ensemble.<br>Il n'y avait qu'une seule règle qui ne pouvait pas être enfreinte : personne ne pouvait s'approcher de la grande porte en bois du troisième sous-sol du manoir, car elle cachait un secret que seul le propriétaire connaissait.<br>Crabaletta était curieuse, mais elle appréciait davantage sa belle vie là-bas. Le temps passa jusqu'à ce qu'un jour, le gentilhomme annonçât la visite du propriétaire. Les domestiques commencèrent alors les préparatifs appropriés.<br>Le banquet était bruyant comme une fête et la joie résonnait dans tout le manoir. Cependant, le lendemain, Crabaletta remarqua que le propriétaire mettait du temps à se réveiller et elle décida d'aller voir ce qui se passait. C'est là qu'elle trouva le corps froid et sans vie du propriétaire du manoir.<br>Les Gendarmes pensaient que le coupable était l'un des domestiques, mais la jeune servante, désemparée, était convaincue que la mort du propriétaire était liée à ce fameux secret. Elle décida donc d'ouvrir la porte interdite.<br>À sa grande surprise, derrière la porte se trouvait le hall principal du manoir avec un escalier en son centre. En haut des marches se tenait une personne qu'elle connaissait : la femme du propriétaire, qui lui posa une question étrangement familière :<br>« Crabaletta, n'est-ce pas ? Vous êtes ici pour l'offre d'emploi ? »<br>Furina était choquée, car cette histoire faisait écho à certaines de ses expériences passées.<br>Elle enviait la vie heureuse de la servante et des domestiques, et elle admirait le courage de la première pour avoir affronté ce secret afin de protéger la vie qu'elle menait.<br>Plus tard, Furina rêva d'un manoir très similaire à celui de l'histoire. Elle était devenue Crabaletta. Courant vers la porte secrète, essoufflée, elle inspira profondément et l'ouvrit.<br>De la porte sortit un violent courant d'eau de mer qui en un instant inonda tout le manoir et dissout complètement les Gendarmes, la surintendante, le gentilhomme ainsi qu'elle-même.<br>Furina se réveilla en sursaut, regardant autour d'elle pour essayer de reprendre ses esprits. Une fois calmée, elle ne put s'empêcher de se souvenir de la fin de l'histoire :<br>Grâce à la boucle temporelle déclenchée par l'ouverture de la porte, Crabaletta avait résolu le mystère de la mort du propriétaire du manoir et libéré ses résidents d'une malédiction ancienne qui les hantait.<br>« Merci, Crabaletta ».<br>Furina remercia la servante pour son courage et sa ténacité ainsi que pour avoir donné une fin heureuse à l'histoire.<br>Et ainsi, certains des personnages de ce récit naquirent de l'imagination de Furina, adoptant d'adorables formes pour l'accompagner dans sa vie.</p>
                  </div>

                  <p class="tiPH">Œil divin</p>
                  <div class="containerHis">
                     <p>« Si tu deviens humaine... Tu ne pourras révéler ton secret à personne. Tu feras face à la souffrance et à la solitude... Est-ce vraiment ce que tu veux ? »<br>Un peu par hasard, la comédie musicale « La petite Océanide », longtemps oubliée, a enfin pu être jouée sur scène et a connu un grand succès à l'Opéra Épiclèse.<br>En remplacement de la véritable actrice, Furina a joué le rôle de la protagoniste Clio, qui s'est sacrifiée pour ramener aux humains l'eau dont ils dépendaient tant pour survivre en utilisant sa propre volonté.<br>Selon le scénario de la pièce, un œil divin tombe du ciel sur Clio juste avant qu'elle ne disparaisse, mais elle ne le prend pas et le laisse tomber au fond de l'océan.<br>Mais lors de cette représentation, un véritable œil divin est apparu pour Furina.<br>En général, un œil divin apparaît en réponse aux désirs les plus fervents des humains. Mais celui de Furina ressemblait davantage à une récompense pour tout ce qu'elle avait fait par le passé.<br>Elle vit dans la lumière qui se reflétait sur cet œil divin à quel point son cœur se sentait à nouveau plein grâce à cette performance.<br>Le métier d'actrice lui avait causé beaucoup de souffrance par le passé, au point où elle ne voulait plus remettre les pieds sur scène. Mais elle était la mieux placée pour comprendre l'éclat, la magnificence, les conseils et le soutien qu'un tel cadre peut apporter à ceux qui poursuivent leurs rêves.<br>Quant à ce qu'elle devait faire désormais, une question qui l'occupait depuis longtemps, elle connaissait enfin la solution.<br>Elle admirerait le monde et créerait les meilleures performances possibles, mais sans monter sur scène.<br>Cependant, elle n'envisageait pas de se limiter aux comédies musicales. Tant que cela aurait quelque chose à voir avec le monde du divertissement, elle serait heureuse de participer depuis les coulisses.<br>Furina dit beaucoup de choses gentilles et sembla très calme après avoir obtenu son œil divin après la représentation de « La petite Océanide ». Mais dès qu'elle se sépara de la troupe de théâtre, elle fut impatiente de se venger d'une légende locale qui l'avait mise en colère il y a longtemps... et qui fit que les choses se terminèrent assez mal pour elle.<br>Après avoir échoué, elle était très en colère et est retournée dans sa chambre pour étudier l'œil divin, provoquant une inondation dans tout le bâtiment.<br>Alors qu'elle et les membres du salon avaient à peine fini de résoudre le problème, elle reçut un ultime avertissement de la personne responsable des lieux...<br>Les animaux de compagnie ne sont pas autorisés, même s'il s'agit d'un gentilhomme ou d'une surintendante.</p>
                  </div>
            </div>

            <div class="allDi hidden">
               <p class="tiPH">Première rencontre...</p>
               <div class="containerHis">
                  <p>Que faites-vous là-bas ? Seriez-vous trop nerveux pour parler ? C'est vrai que vous avez devant vous la personnalité préférée de Fontaine. Mon emploi du temps est très chargé, obtenir un rendez-vous avec moi est synonyme de chance.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>1.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Bavardage - Goûteron</p>
               <div class="containerHis">
                  <p>Les goûters sont un incontournable pour les dames raffinées. Si vous souhaitez en apprendre les règles de bienséance, je serais ravie de vous les enseigner.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>2.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Bavardage - Fun</p>
               <div class="containerHis">
                  <p>C'est tellement ennuyeux... N'y a-t-il rien de plus intéressant ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>3.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Bavardage - Popularité</p>
               <div class="containerHis">
                  <p>*soupir* C'est vraiment embêtant d'être aussi populaire. Pourquoi dois-je endurer ça ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>4.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Quand il pleut...</p>
               <div class="containerHis">
                  <p>Il pleut des cordes ! Attendez, le niveau des eaux n'est quand même pas en train de monter ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>5.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Quand il neige...</p>
               <div class="containerHis">
                  <p>Waouh, c'est l'endroit idéal pour tourner un film.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>6.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Il fait bon dehors...</p>
               <div class="containerHis">
                  <p>Le soleil chauffe presque autant que les lampes du studio que j'utilise habituellement. Heureusement qu'il n'y a qu'un seul soleil.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>7.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Le vent souffle fort...</p>
               <div class="containerHis">
                  <p>« Écoutez ces murmures inquiétants qui accompagnent le vent. C'est le bruit d'un monstre marin oublié faisant un cauchemar. » Oh ? Pourquoi fait-il un cauchemar ? Est-ce qu'il manifeste sa peur ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>8.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Dans le désert...</p>
               <div class="containerHis">
                  <p>Quel paysage désolé... Laissez-moi vous accorder la bénédiction de l'eau !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>9.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Au réveil...</p>
               <div class="containerHis">
                  <p>Bonjour... Dois-je vraiment me lever aussi tôt ? Dormir un peu plus ne devrait pas être un problème...</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>10.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À l'heure du déjeuner...</p>
               <div class="containerHis">
                  <p>Bonjour ! Où est mon gâteau ? J'en ai déjà eu au petit déjeuner ? Ça fait donc un moment déjà !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>11.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Le soir...</p>
               <div class="containerHis">
                  <p>Bonsoir. *soupir* Demoiselle Crabaletta parle de vouloir retrouver la forme, et elle veut m'embarquer là-dedans. Pff, je mange déjà beaucoup plus sainement que le mois dernier. Je travaille dur pour entretenir ma silhouette. Ça se voit, non ?!</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>12.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">La nuit...</p>
               <div class="containerHis">
                  <p>J'ai aussi sommeil, à demain. N'oubliez pas de me réveiller à l'heure...</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>13.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Furina - Groupe d'amis</p>
               <div class="containerHis">
                  <p>Vous voulez savoir qui sont les invités présents au goûter ? Eh bien, c'est évident : ce sont mes fidèles sujets ! *soupir* Très bien, je vais vous les présenter : voici demoiselle Crabaletta, mon adorable servante... qui de temps en temps, sans le vouloir, coupe mes vêtements... Voici la surintendante Chevalmarin, ma fidèle gouvernante, qui gère tous les aspects de ma vie trépidante. Et enfin, pour s'assurer que tout est dans les règles, voici le gentilhomme Usher, mon dévoué conseiller. Haha, je pourrais peut-être vous accorder le privilège d'assister à notre goûter, mais vous avez encore du chemin à parcourir avant de gagner leur approbation !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>14.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Furina - Chant</p>
               <div class="containerHis">
                  <p>Je connais la qualité de ma voix, mais peu de chansons en sont dignes. J'espère que les auteurs de la troupe de théâtre vont se réveiller et ne pas me faire attendre pour rien...</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>15.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de nous - Lien</p>
               <div class="containerHis">
                  <p>*soupir* Détendez-vous. Nous nous connaissons depuis un moment, ces formalités ne sont pas nécessaires. Attendez, quelle est cette expression sur votre visage ? Vous voulez dire que... depuis notre rencontre, vous ne m'avez jamais respectée ?!</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>16.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de nous - Ensemble</p>
               <div class="containerHis">
                  <p>Mon histoire est déjà terminée, le prochain acte portera donc sur la nôtre... Auquel cas, nous devrions probablement commencer à facturer le double pour les apparitions publiques... Oh, je suis tellement heureuse !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>17.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de l'œil divin...</p>
               <div class="containerHis">
                  <p>Après la fin de la prophétie, je n'ai pas eu le moral pendant longtemps. Les acteurs de théâtre, qui se réjouissent de l'adulation de leurs spectateurs, doivent également supporter la pression d'être des personnalités publiques. Ils essayent donc d'être à la hauteur des attentes des autres. Mais je savais très bien que ma seule présence ne suffirait pas et que me faire passer pour une divinité serait le seul moyen de satisfaire leur adoration... J'en suis arrivée au point où je ne ressentais plus que de la solitude. Je n'arrivais plus à jouer et j'ai fini par m'enfermer dans ma chambre. Mais ensuite, dès mon retour sur scène face aux spectateurs, j'ai réalisé que mon anxiété avait disparu. Si je peux à nouveau me tenir devant un public, c'est peut-être parce que... j'ai enfin commencé à être moi-même.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>18.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Quelque chose à partager - Opéra</p>
               <div class="containerHis">
                  <p>L'Opéra de Fontaine a connu de nombreuses réformes au fil du temps et chacune d'entre elles s'est évidemment heurtée à de l'opposition. Si je me souviens bien, la foule s'est une fois rassemblée à l'intérieur, créant un désordre terrible... Le bruit était si intense que mes oreilles bourdonnaient. Pour les effrayer, j'ai dit : « À partir d'aujourd'hui, j'interdis à quiconque de discuter de pareilles bagatelles ! » C'est à ce moment précis que Neuvillette frappa le sol de sa canne. Soudain, ce fut le silence complet. Parfois, sans le vouloir, je ne peux m'empêcher de montrer mon côté le plus menaçant... J'espère que mes sujets comprennent ça.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>19.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Détails intéressants - Sombrétoiles</p>
               <div class="containerHis">
                  <p>J'aime beaucoup les sombrétoiles. Ces créatures scintillent et brillent même dans les endroits où personne ne peut les voir... C'est ce que j'appelle une véritable « étoile ». Ah, si seulement il y avait une pièce de théâtre qui leur était consacrée... J'aurais enfin l'opportunité de jouer une vraie étoile de mer.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>20.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Lyney et Lynette...</p>
               <div class="containerHis">
                  <p>Bien sûr que je connais Lyney et Lynette. J'allais souvent voir leurs spectacles de magie. Ils sont très populaires, bien que beaucoup moins que moi évidemment. Seules mes représentations ont pu faire salle comble... Même les places debout étaient très demandées. Mais maintenant... Euh... J'ai décidé de mettre un terme à ma carrière d'actrice, donc ma popularité a un peu diminué, c'est normal !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>21.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Neuvillette...</p>
               <div class="containerHis">
                  <p>Je suis très reconnaissante envers Neuvillette pour tout ce qu'il a fait pour Fontaine au cours des derniers siècles. J'ai l'impression qu'il n'a pas l'intention d'enquêter sur le fait que j'ai trompé le peuple. De toute façon, nous ne travaillons plus ensemble, et je ne suis plus venue au Palais Mermonia depuis un moment. Je suppose que c'est préférable pour nous deux, non ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>22.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Navia - Desserts</p>
               <div class="containerHis">
                  <p>Avez-vous goûté les macarons de Navia ? Je dois admettre qu'elle est aussi douée que moi pour préparer des desserts. Le motif qu'elle dessine sur les macarons est vraiment mignon, vous ne trouvez pas ? Sans oublier leur texture et leur saveur... C'est une véritable œuvre d'art ! Comment ça ? Est-ce vraiment juste une question de talent ? Je n'arrive pas à croire que je suis un peu jalouse d'elle... Je devrais lui demander des conseils la prochaine fois !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>23.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">À propos de Navia - Pensées intérieures</p>
               <div class="containerHis">
                  <p>C'est une personne vraiment forte. Les gens comme elle peuvent garder la tête froide et agir normalement dans toutes les situations. Ce qui lui permet de ne pas mettre de pression supplémentaire sur son entourage. J'ai assisté au duel entre Callas et Clorinde et... de ce point de vue, je peux dire que Navia ressemble chaque jour un peu plus à son père.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>24.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">À propos d'Arlecchino...</p>
               <div class="containerHis">
                  <p>Arlecchino ? Qui est-ce ? Oh, je l'avais presque oubliée... Laisser une personne comme elle occuper vos pensées ne peut que vous provoquer des cauchemars.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>25.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">À propos de Charlotte...</p>
               <div class="containerHis">
                  <p>J'ai récemment vu Charlotte courir partout. Elle a toujours l'air disposée à organiser une interview exclusive avec moi. Elle ne veut vraiment pas abandonner, même si j'ai déjà décliné ses demandes à maintes reprises. Pour être honnête, au début, son obstination m'a énervée... Mais un jour, elle m'a dit qu'elle voulait absolument que tout le monde sache qui était la vraie Furina, et elle pensait que les gens seraient capables de comprendre mes problèmes. Elle avait l'air vraiment convaincue. Je sais que ses intentions sont bonnes et peut-être qu'elle a raison, mais... je ne suis pas encore prête.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>26.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">À propos de Wriothesley...</p>
               <div class="containerHis">
                  <p>Nous n'avons pas beaucoup parlé, mais Neuvillette dit que c'est une personne fiable, donc ce doit être quelqu'un de bien ! Ah oui, j'ai déjà reçu du thé de sa part auparavant. C'était vraiment bon.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>27.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">À propos de Clorinde...</p>
               <div class="containerHis">
                  <p>D'aussi loin que je me souvienne, Clorinde n'a jamais été très bavarde, mais elle m'a soutenue et protégée à plusieurs reprises, donc je lui fais entièrement confiance. Euh... Parfois, sa présence me manque un peu, mais je n'ai plus vraiment de raison de la voir désormais. Oh, mais oui ! Je pourrais l'inviter à mon prochain goûter !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>28.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Connaître Furina (1)</p>
               <div class="containerHis">
                  <p>Vous voulez en savoir plus sur moi ? *soupir* Bon, c'est normal, je suppose... Après tout, j'étais autrefois la célébrité la plus populaire de Fontaine ! Chaque jour, les journalistes affluaient en masse pour tenter de découvrir des détails croustillants sur ma vie privée. Je sais donc très bien comment les repousser. Ce ne sera évidemment pas nécessaire avec vous. Si vous vous y prenez bien, je serai peut-être même disposée à vous confier certains de mes secrets.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>29.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Connaître Furina (2)</p>
               <div class="containerHis">
                  <p>Quelqu'un m'a récemment recommandé de faire du surf, alors j'ai décidé d'essayer. Garder son équilibre sur la crête des vagues est un peu difficile au début, mais j'ai très vite réussi à me débrouiller. Peut-être que je suis une surfeuse née... Sentir le vent souffler sur votre visage pendant que vous surfez sur les vagues à l'horizon est une sensation vraiment incroyable. Vous devriez essayer !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>30.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Connaître Furina (3)</p>
               <div class="containerHis">
                  <p>Si vous avez le temps, pourriez-vous encore me parler de vos voyages ? J'aimerais beaucoup entendre vos histoires incroyables. Comment dire... Je m'intéresse facilement à beaucoup de choses, mais je me lasse rapidement. Peut-être que plus vite l'enthousiasme se manifeste, plus vite il a tendance à s'estomper. Cependant, quand je suis avec vous, je suis toujours contente... C'est un sentiment merveilleux !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>31.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Connaître Furina (4)</p>
               <div class="containerHis">
                  <p>Ces derniers temps, je me demande si je n'ai pas été trop dure avec moi-même par le passé. En essayant de garder mon sang-froid et ma réserve de divinité, je n'ai jamais eu la chance de profiter de la vie... Et c'est pourquoi je suis obsédée par le shopping ces derniers temps. J'ai acheté beaucoup d'objets nouveaux et précieux... Des sachets de thé éblouissants aux couleurs de l'arc-en-ciel, des couverts extensibles automatisés et même une selle pour monter les hippocampes... Mais j'ai réalisé que la plupart de ces trucs étaient parfaitement inutiles, alors j'ai tout donné à la troupe pour qu'ils les utilisent comme accessoires. C'est étrange... Avant de les acheter, j'étais sûre que ces choses me seraient utiles...</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>32.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Connaître Furina (5)</p>
               <div class="containerHis">
                  <p>Les gens aiment parler du passé et passent souvent du temps à nourrir des regrets. Ils aiment aussi parler de l'avenir, comme s'ils étaient prêts à tout sacrifier pour un avenir incertain. Je ne partage pas cette façon de voir les choses, mais je ne peux pas m'empêcher de ressentir une certaine envie à leur égard... Avant, je vivais dans un monde sans passé ni avenir et, pour gérer mon anxiété, j'ai créé une forme plus forte et plus divine de moi-même. Au fil des siècles, le rôle que je jouais a lentement fusionné avec ma véritable personne. Aujourd'hui, même moi, je ne peux plus faire la différence entre les deux... Les expériences passées ont fait de moi ce que je suis aujourd'hui, et cette performance imparfaite est devenue la partie la plus importante de mon être.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>33.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Les loisirs de Furina...</p>
               <div class="containerHis">
                  <p>« La couronne de la reine » n'a pas encore de suite ? C'est dommage, c'est toujours agréable de regarder un classique où la justice l'emporte sur le mal.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>34.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Les problèmes de Furina...</p>
               <div class="containerHis">
                  <p>Hmm, quelle sauce devrais-je mettre sur mes macaronis ce soir ?</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>35.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Plats préférés...</p>
               <div class="containerHis">
                  <p>Tout le monde aime les desserts raffinés, mais je peux me montrer extrêmement exigeante. Je vous explique : les desserts sont comme les opéras... Chaque élément, du choix des personnages à l'écriture du scénario, doit être soigné dans les moindres détails pour que le résultat final soit une réussite !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>36.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Plats détestés...</p>
               <div class="containerHis">
                  <p>Pour faire simple, je déteste la plupart de ces plats dits « créatifs ». J'ai goûté à de nombreux plats merveilleux au fil des ans, et les seules choses qu'ils m'ont laissées, ce sont des moments auxquels je ne veux plus jamais penser.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>37.mp3"><p>EN</p></div>
               </div>

               <p class="tiPH">Cadeau reçu (1)</p>
               <div class="containerHis">
                  <p>Oh ? Quelle bonne odeur, et quelle texture délicate... Je ne m'attendais pas à ce que vous cuisiniez aussi bien ni que vous ayez des goûts aussi raffinés !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>38.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Cadeau reçu (2)</p>
               <div class="containerHis">
                  <p>Quel manque d'originalité ! Un plat aussi quelconque n'aura jamais mon approbation !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>39.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Cadeau reçu (3)</p>
               <div class="containerHis">
                  <p>C'est ça que vous mangez d'habitude ? *soupir* Je vais partager un peu de mes macaronis avec vous.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>40.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Anniversaire...</p>
               <div class="containerHis">
                  <p>Joyeux anniversaire ! Tenez, voici un billet VIP pour assister à « Un jour heureux ». Je compte sur votre présence le jour du spectacle ! Hmm ? Vous voulez savoir de quoi ça parle ? *soupir* Bon, je voulais que ce soit une surprise, tant pis... C'est un opéra que j'ai personnellement préparé. Il s'agit d'un grand groupe de personnes se réunissant pour célébrer quelqu'un de très important. Maintenant vous comprenez, n'est-ce pas ? N'oubliez pas de venir !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>41.mp3"><p>EN</p></div>
               </div>
               
               <p class="tiPH">Affinité faible</p>
               <div class="containerHis">
                  <p>Je n'ai vraiment pas l'habitude d'utiliser un œil divin. Vous pourriez m'apprendre ? Oh... J'ai failli oublier que vous n'en aviez jamais utilisé.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>42.mp3"><p>EN</p></div>
               </div>
                     
               <p class="tiPH">Affinité moyenne</p>
               <div class="containerHis">
                  <p>La force que j'ai obtenue grâce à mon dur labeur est vraiment satisfaisante. Haha, merci.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>43.mp3"><p>EN</p></div>
               </div>
                              
               <p class="tiPH">Affinité élevée</p>
               <div class="containerHis">
                  <p>C'est déjà mieux ! Comme je m'y attendais, mon côté radieux brille dans toutes les situations.</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>44.mp3"><p>EN</p></div>
               </div>
                              
               <p class="tiPH">Affinité max</p>
               <div class="containerHis">
                  <p>Je ne pensais pas que je vous intéresserais autant. Cela signifie-t-il que vous avez toujours besoin de mon pouvoir? Cependant, maintenant... Peut-être que je ne pourrais pas suffisamment vous récompenser. Hmm ? Est-ce que vous tenez à moi... En tant que personne ? Alors, jouons ensemble nos futures aventures !</p>
                  <div class="audio" data-piste="audioTrack/<?php echo $bddResults['name']; ?>45.mp3"><p>EN</p></div>
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