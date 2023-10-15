<?php require_once("traitement.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">    
   <link rel="stylesheet" href="css/style.css">
   <title>Projet Furina</title>
   <script defer src="js/script.js"></script>
</head>
<body>
    <nav class="index-bar">
        <ul>
            <li class="first-item-index-bar">
                <a href="index.php">
                    <div>
                        <img src="img/icon/Skill_S_Ambor_01.png" alt="amber_logo">
                    <br>
                </a>
            </li>
            <li>
                <a class="items-index-bar search-index-bar">
                    <div>
                        <img src="img/icon/search.png" alt="search_icon" class="items-v1">
                        <p class="poppinsBold hidden">Recherche</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="version.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'version.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/db.png" alt="version_icon" class="items-v2">
                        <p class="poppinsBold hidden">Version</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="personnage.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'personnage.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/perso.png" alt="perso_icon" class="items-v1">
                        <p class="poppinsBold hidden">Personnages</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="arme.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'arme.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/arme.png" alt="arme_icon" class="items-v1">
                        <p class="poppinsBold hidden">Armes</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="artefact.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'artefact.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/artefact.png" alt="artefact_icon" class="items-v2">
                        <p class="poppinsBold hidden">Artéfacts</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="monstre.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'monstre.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/monstre.png" alt="npc_icon" class="items-v1">
                        <p class="poppinsBold hidden">NPC</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="nourriture.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'nourriture.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/food.png" alt="food_icon" class="items-v1">
                        <p class="poppinsBold hidden">Nourritures</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="material.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'material.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/material.png" alt="material_icon" class="items-v1">
                        <p class="poppinsBold hidden">Matériaux</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="namecard.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'namecard.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/namecard.png" alt="namecard_icon" class="items-v1">
                        <p class="poppinsBold hidden">Carte de visites</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="TCG.php" class="items-index-bar <?php 
                    if (strpos($_SERVER['PHP_SELF'], 'TCG.php') == true){
                        echo "active";
                    }
                ?>">
                    <div>
                        <img src="img/icon/tcg.png" alt="TCG_icon" class="items-v2">
                        <p class="poppinsBold hidden">TCG</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="items-index-bar option-index-bar">
                    <div>
                        <img src="img/icon/option.png" alt="option_icon" class="items-v1">
                        <p class="poppinsBold hidden">Options</p>
                    </div>
                </a>
            </li>
        </ul>
    </nav>