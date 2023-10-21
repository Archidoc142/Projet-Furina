<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Valider la valeur
   $stmt = $bdd->prepare("SELECT * FROM material WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();
   $bddResults = $stmt->fetch(PDO::FETCH_ASSOC);   include_once '../inc/header.inc.php';
?>
<main>
   <h1 class="objectPageName"><?php echo $bddResults['name'];?></h1>
   <div class="gridHalf whitneyBold">
      <div class="objectPageContainer">
         <div class="containerPageInfo">
            <div class="flex mainInfo c<?php echo $bddResults['rarity']; ?>">
               <div class="statPageObject">
                  <div class="typeObject"><?php echo $bddResults['type'];?></div>
                  <div class="flex starContainerP">
                     <?php for ($i = 0; $i < $bddResults['rarity'];$i++){ echo "<svg viewBox='0 0 576 512'><path d='M381.2 150.3l143.7 21.2c11.9 1.7 21.9 10.1 25.7 21.6 3.8 11.6.7 24.2-7.9 32.8L438.5 328.1l24.6 146.6c2 12-2.9 24.2-12.9 31.3-9.9 7.1-23 8-33.7 2.3l-128.4-68.5-128.3 68.5c-10.8 5.7-23.9 4.8-33.8-2.3-9.9-7.1-14.9-19.3-12.8-31.3l24.6-146.6L33.58 225.9c-8.61-8.6-11.67-21.2-7.89-32.8 3.77-11.5 13.74-19.9 25.73-21.6L195 150.3l64.4-132.33C264.7 6.954 275.9-.04 288.1-.04c12.3 0 23.5 6.994 28.8 18.01l64.3 132.33z'/></svg>";}?>
                  </div>
               </div>
               <div class="divStatImg">
                  <img src="img/material/<?php echo $bddResults['name']; ?>.png" alt="object_icon">
               </div>
            </div>
            <div class="descriptionObject">
               <p class="descObj"><?php echo $bddResults['description']; ?></p>
               <?php 
                  if ($bddResults['source'] != null){ ?>
                     <div class="flex svgSrc">
                        <svg viewBox='0 0 384 512' width="16" height="16" class="greyText"><path d='M168.3 499.2C116.1 435 0 279.4 0 192 0 85.96 85.96 0 192 0c106 0 192 85.96 192 192 0 87.4-117 243-168.3 307.2-12.3 15.3-35.1 15.3-47.4 0zM192 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z'/></svg>
                     <p class="greyText">Source</p>
                     </div>
                     <div class="sourceObject">
                        <p><?php echo $bddResults['source']; ?></p>
                     </div>   
            <?php } ?>               
            </div>
         </div>
      </div>
   </div>

<?php include_once '../inc/footer.inc.php';?>