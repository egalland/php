<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <?php
    if(!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])){
       echo $_POST['gender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
     }else{
    ?>
    <form action="index.php" method="POST">
      <select name="gender">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="lastname" />
      <input type="text" name="firstname" />
      <input type="submit" value="Envoyer" />
    </form>
    <?php } ?>
  </body>
</html>
