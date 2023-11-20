<?php
   require_once 'classe/PDOFactory.php';
   $bdd = PDOFactory::getMySQLConnection();

   include_once 'inc/header.inc.php';
?>
<main>
   <div class="error404">
      <h1>Page non trouvé ou en progression!</h1>
      <p>L'URL pourrait être erronée ou inexistante.<br>Il est possible que cette page soit en progression et ne soit pas actuellement disponible.<br>Désolée de l'inconvénient!</p>
   </div>

<?php include_once 'inc/footer.inc.php';?>