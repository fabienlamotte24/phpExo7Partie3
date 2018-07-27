<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
<?php
/*Détermination de la variable*/
  $pas = 1;
  /*Boucle while*/
  while($pas < 100){
    /*Affichage*/
    echo $pas . ' pas, on tient le bon bout<br />';
    /*Incrémentation par 15(on ajoute 15 à la variable)*/
    $pas += 15;
  }
?>
    </p>
  </body>
</html>
