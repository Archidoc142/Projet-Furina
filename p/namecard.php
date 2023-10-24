<?php
   require_once '../classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();
   $id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Valider la valeur
   $stmt = $bdd->prepare("SELECT * FROM namecard WHERE id = :id");
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   $stmt->execute();
   $bddResults = $stmt->fetch(PDO::FETCH_ASSOC);   include_once '../inc/header.inc.php';
?>
<main>
   <h1 class="objectPageName"><?php echo $bddResults['name'];?></h1>
   <div class="gridHalf whitneyBold">
      <div class="objectPageContainer">
         <div class="containerPageInfo">
            <div class="flex mainInfo">
               <img src="img/namecard/<?php echo $bddResults['name'];?>2.png" alt="namecard" class="nmv2W">
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