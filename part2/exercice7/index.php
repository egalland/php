<?php
  $isOk = true;
  if($isOk == false){
    $isOkEcho = 'c\'est pas bon !!!';
  }else{
    $isOkEcho = 'c\'est ok !!';
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
      <?= $isOkEcho; ?>
   </p>
  </body>
</html>
