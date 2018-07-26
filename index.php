<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
<?php
  $pas = 1;
  while($pas < 100){
    echo $pas . ' pas, on tient le bon bout<br />';
    $pas += 15;
  }
?>
    </p>
  </body>
</html>
