<?php
  $isEasy = true;
  if($isEasy == true){
    $isEasyEcho = 'C\'est facile!!';
  }else{
    $isEasyEcho = 'C\'est difficile !!!';
  };
  $isEasyEcho = ($isEasy == true) ? 'C\'est facile!!' : 'C\'est difficile !!!';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      <?= $isEasyEcho ?>
   </p>
  </body>
</html>
