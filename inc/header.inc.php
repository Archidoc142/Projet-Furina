<?php require_once("traitement.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <base href="http://localhost/Projet/Projet-Furina/"> 
   <link rel="stylesheet" href="css/style.css">
   <script defer src="js/script.js"></script>
   <title>Projet Furina</title>
</head>
<body>
    <nav class="index-bar">
        <ul>
            <li class="first-item-index-bar">
                <a href="index">
                    <div>
                        <img src="img/icon/Skill_S_Ambor_01.png" alt="amber_logo">
                        <br>
                    </div>
                </a>
            </li>
            <li>
                <a class="items-index-bar search-index-bar">
                    <div>
                        <svg width="16" height="16" viewBox="0 0 512 512">
                            <path d="M500.3 443.7L380.6 324c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723 99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9 53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0 15.606-15.64 15.606-41.04.006-56.64zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128-57.42 128-128 128-128-57.4-128-128z"/>
                        </svg>
                        <p class="poppinsBold hidden">Recherche</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="version" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'version.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="14" height="16" viewBox="0 0 448 512">
                            <path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.82 100.3 0 224 0s224 35.82 224 80zm-54.8 134.7c19.9-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.93 11.7 34.02 21.2 54.85 28.6C99.66 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zm-338.35 160C99.66 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c19.9-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432v-85.9c14.93 11.7 34.02 21.2 54.85 28.6z"/>
                        </svg>
                        <p class="poppinsBold hidden">Version</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="avatar" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'avatar.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="17" height="17" viewBox="0 0 448 512">
                            <path d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0 96 57.31 96 128s57.3 128 128 128zm50.7 48H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3c0-95.7-77.6-173.3-173.3-173.3z"/>
                        </svg>
                        <p class="poppinsBold hidden">Personnages</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="arme" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'arme.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="17" height="17" viewBox="0 0 512 512">
                            <path d="M440.8 4.994C441.9 1.99 444.8 0 448 0s6.1 1.99 7.2 4.994l14.1 37.676L507 56.79c3 1.13 5 4 5 7.21s-2 6.08-5 7.21l-37.7 14.12L455.2 123c-1.1 3-4 5-7.2 5s-6.1-2-7.2-5l-14.1-37.67-38.6-14.12c-3-1.13-4.1-4-4.1-7.21s1.1-6.08 4.1-7.21l38.6-14.12 14.1-37.676zM289.4 97.37c12.5-12.49 32.7-12.49 45.2 0l28.7 28.73 17.4-17.4c6.2-6.3 16.4-6.3 22.6 0 6.3 6.2 6.3 16.4 0 22.6l-17.4 17.4 28.7 28.7c12.5 12.5 12.5 32.7 0 45.2l-10.8 10.9c7.9 22 12.2 45.8 12.2 70.5 0 114.9-93.1 208-208 208C93.12 512 0 418.9 0 304S93.12 96 208 96c24.7 0 48.5 4.3 70.5 12.3l10.9-10.93zM95.1 296c0-57.4 47.5-104 104-104h8c9.7 0 16-7.2 16-16s-6.3-16-16-16h-8c-74.2 0-136 60.9-136 136v8c0 8.8 8.06 16 16 16 9.74 0 16-7.2 16-16v-8z"/>
                        </svg>
                        <p class="poppinsBold hidden">Armes</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="artefact" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'artefact.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="16" height="20" viewBox="0 0 320 512">
                            <path d="M296 256h-44.63C272.5 222 288 181.6 288 144 288 55.62 230.8 0 160 0S32 55.62 32 144c0 37.6 15.5 78 36.63 112H24c-13.25 0-24 10.8-24 24v32c0 13.25 10.75 24 24 24h96v152c0 13.2 10.8 24 24 24h32c13.25 0 24-10.75 24-24V336h96c13.25 0 24-10.75 24-24v-32c0-13.2-10.8-24-24-24zM160 80c29.62 0 48 24.5 48 64 0 34.62-27.12 78.12-48 100.9-20.9-22.8-48-66.3-48-100.9 0-39.5 18.4-64 48-64z"/>
                        </svg>
                        <p class="poppinsBold hidden">Artéfacts</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="monstre" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'monstre.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="18" height="16" viewBox="0 0 512 512">
                            <path d="M256 224c-79.37 0-191.1 122.7-191.1 200.2-.88 34.9 25.86 55.8 70.9 55.8 48.8 0 81.1-25.1 120.2-25.1 39.5 0 71.9 25.1 120.2 25.1 44.1 0 71.74-20.88 71.74-55.75C447.1 346.8 335.4 224 256 224zm-147.2-12.6c-10.37-34.62-42.5-57.12-71.62-50.12S-7.104 202 3.27 236.6c10.37 34.7 42.5 57.2 71.62 50.2s44.21-40.8 33.91-75.4zm84.7-20.8c30.87-8.125 46.37-49.1 34.5-93.37s-46.5-71.1-77.49-63.87c-30.87 8.125-46.37 49.1-34.5 93.37 11.89 43.37 46.49 72.07 77.49 63.87zm281.4-29.3c-29.12-6.1-61.25 15.5-71.62 50.12-10.37 34.63 4.75 68.37 33.87 75.37 29.12 6.1 61.12-15.5 71.62-50.12C519.1 202 503.1 168.3 474.9 161.3zm-156.4 29.3c30.1 8.125 65.62-20.5 77.49-63.87 11.87-43.37-3.625-85.25-34.5-93.37-30.1-8.125-65.62 20.5-77.49 63.87-11.9 43.37 3.6 85.27 34.5 93.37z"/>
                        </svg>
                        <p class="poppinsBold hidden">Monstres</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="nourriture" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'nourriture.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="18" height="16" viewBox="0 0 512 512">
                            <path d="M481.9 270.1c9 9 14.1 21.2 14.1 33.9s-5.1 24.9-14.1 33.9S460.7 352 448 352H64c-12.73 0-24.94-5.1-33.94-14.1-9-9-14.06-21.2-14.06-33.9s5.06-24.9 14.06-33.9S51.27 256 64 256h384c12.7 0 24.9 5.1 33.9 14.1zm-6.6 118.6c3 3 4.7 7.1 4.7 11.3v16c0 16.1-6.7 33.3-18.7 45.3S432.1 480 416 480H96c-16.97 0-33.25-6.7-45.25-18.7C38.74 449.3 32 432.1 32 416v-16c0-4.2 1.69-8.3 4.69-11.3 3-3 7.07-4.7 11.31-4.7h416c4.2 0 8.3 1.7 11.3 4.7zM50.39 220.8c-4.46-2.2-8.36-5.3-11.42-9.2-3.06-3.9-5.18-8.4-6.22-13.2-1.04-4.9-.95-9.9.24-14.7C54.98 97.02 146.5 32 256 32c109.5 0 201 65.02 223 151.7 1.2 4.8 1.3 9.8.2 14.7-1 4.8-3.1 9.3-6.2 13.2-3.9 3.9-6.9 7-11.4 9.2-4.4 2.1-9.3 3.2-14.3 3.2H64.67c-4.94 0-9.83-1.1-14.28-3.2zM372.7 116.7c-3 3-4.7 7.1-4.7 11.3 0 3.2.9 6.3 2.7 8.9 1.8 2.6 3.4 4.7 7.2 5.9 2.9.3 6.1 1.5 9.2.9 3.1-.6 6-2.1 8.2-4.4 2.3-2.2 3.8-5.1 4.4-8.2.6-3.1-.6-6.3-.9-9.2-1.2-3.8-3.3-5.4-5.9-7.2-2.6-1.8-5.7-3.6-8.9-3.6-4.2 0-8.3 2.6-11.3 5.6zm-128-32.01c-3 3-4.7 7.07-4.7 11.31 0 3.16.9 6.3 2.7 8.9 1.8 2.6 3.4 4.7 7.2 5.9 2.9.3 6.1 1.5 9.2.9 3.1-.6 6-2.1 8.2-4.4 2.3-2.2 3.8-5.1 4.4-8.18.6-3.1-.6-6.32-.9-9.24-1.2-2.93-3.3-5.43-5.9-7.18-2.6-1.76-5.7-3.6-8.9-3.6-4.2 0-8.3 2.59-11.3 5.59zm-128 32.01c-3 3-4.7 7.1-4.7 11.3 0 3.2.9 6.3 2.7 8.9 1.8 2.6 3.4 4.7 7.2 5.9 2.9.3 6.1 1.5 9.2.9 3.1-.6 6-2.1 8.2-4.4 2.3-2.2 3.8-5.1 4.4-8.2.6-3.1-.6-6.3-.9-9.2-1.2-3.8-3.3-5.4-5.9-7.2-2.6-1.8-5.7-3.6-8.9-3.6-4.2 0-8.3 2.6-11.3 5.6z"/>
                        </svg>
                        <p class="poppinsBold hidden">Nourritures</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="material" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'material.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="18" height="16" viewBox="0 0 512 512">
                            <path d="M502.6 182.6l-45.25-45.25A31.901 31.901 0 00434.8 128H384V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H77.25c-8.5 0-16.62 3.375-22.62 9.375L9.375 182.6c-6 6-9.375 14.2-9.375 22.7V304h128v-32c0-8.9 7.1-16 16-16h32c8.9 0 16 7.1 16 16v32h128v-32c0-8.9 7.1-16 16-16h32c8.9 0 16 7.1 16 16v32h128v-98.7c0-8.5-3.4-16.7-9.4-22.7zM336 128H176V80h160v48zm48 240c0 8.875-7.125 16-16 16h-32c-8.875 0-16-7.125-16-16v-32H192v32c0 8.9-7.1 16-16 16h-32c-8.9 0-16-7.1-16-16v-32H0v112c0 17.62 14.38 32 32 32h448c17.62 0 32-14.38 32-32V336H384v32z"/>
                        </svg>
                        <p class="poppinsBold hidden">Matériaux</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="namecard" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'namecard.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="16" height="16" viewBox="0 0 576 512">
                            <path d="M512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96c0-35.35-28.7-64-64-64zm-336 96c35.35 0 64 28.65 64 64s-28.65 64-64 64-64-28.65-64-64 28.7-64 64-64zm96 256H80c-8.84 0-16-7.2-16-16 0-44.2 35.82-80 80-80h64c44.18 0 80 35.82 80 80 0 8.8-7.2 16-16 16zm224-64H368c-8.8 0-16-7.2-16-16s7.2-16 16-16h128c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0-64H368c-8.8 0-16-7.2-16-16s7.2-16 16-16h128c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0-64H368c-8.8 0-16-7.2-16-16s7.2-16 16-16h128c8.8 0 16 7.2 16 16s-7.2 16-16 16z"/>
                        </svg>
                        <p class="poppinsBold hidden">Carte de visites</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="TCG" class="items-index-bar<?php 
                    if (strpos($_SERVER['PHP_SELF'], 'TCG.php') == true){
                        echo " active";
                    }
                ?>">
                    <div>
                        <svg width="22" height="20" viewBox="0 0 576 512">
                            <path d="M154.33 40c-19.443 0-35.096 16.353-35.096 36.666v366.668c0 20.313 15.653 36.666 35.096 36.666h210.574C384.347 480 400 463.647 400 443.334V76.666C400 56.353 384.347 40 364.904 40zm105.707 110c0 36.667 35.2 110 70.4 110-35.2 0-70.4 73.333-70.4 110 0-36.667-35.202-110-70.402-110 35.2 0 70.402-73.333 70.402-110z"/>
                        </svg>
                        <p class="poppinsBold hidden">TCG</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="items-index-bar option-index-bar">
                    <div>
                        <svg width="16" height="16" viewBox="0 0 512 512">
                            <path d="M495.9 166.6c3.3 8.6.5 18.3-6.3 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4 0 8.6-.6 17.1-1.7 25.4l43.3 39.4c6.8 6.3 9.6 16 6.3 24.6-4.4 11.9-9.7 23.4-15.7 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.3-6 7.1-15.7 9.6-24.5 6.8l-55.7-17.8c-13.4 10.3-29.1 18.9-44 25.5l-12.5 57.1c-2 9-9 15.4-18.2 17.8-13.8 2.3-28 3.5-43.4 3.5-13.6 0-27.8-1.2-41.6-3.5-9.2-2.4-16.2-8.8-18.2-17.8l-12.5-57.1c-15.8-6.6-30.6-15.2-44-25.5l-55.66 17.8c-8.84 2.8-18.59.3-24.51-6.8-8.11-9.9-15.51-20.3-22.11-31.3l-4.68-8.1c-6.07-10.9-11.35-22.4-15.78-34.3-3.24-8.6-.51-18.3 6.35-24.6l43.26-39.4C64.57 273.1 64 264.6 64 256c0-8.6.57-17.1 1.67-25.4l-43.26-39.4c-6.86-6.3-9.59-15.9-6.35-24.6 4.43-11.9 9.72-23.4 15.78-34.3l4.67-8.1c6.61-11 14.01-21.4 22.12-31.25 5.92-7.15 15.67-9.63 24.51-6.81l55.66 17.76c13.4-10.34 28.2-18.94 44-25.47l12.5-57.1c2-9.08 9-16.29 18.2-17.82C227.3 1.201 241.5 0 256 0s28.7 1.201 42.5 3.51c9.2 1.53 16.2 8.74 18.2 17.82l12.5 57.1c14.9 6.53 30.6 15.13 44 25.47l55.7-17.76c8.8-2.82 18.5-.34 24.5 6.81 8.1 9.85 15.5 20.25 22.1 31.25l4.7 8.1c6 10.9 11.3 22.4 15.7 34.3zM256 336c44.2 0 80-35.8 80-80.9 0-43.3-35.8-80-80-80s-80 36.7-80 80c0 45.1 35.8 80.9 80 80.9z"/>
                        </svg>
                        <p class="poppinsBold hidden">Options</p>
                    </div>
                </a>
            </li>
        </ul>
    </nav>