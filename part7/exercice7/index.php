<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <?php
    if(!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['sendFile'])){
        $pathFile = pathinfo($_FILES['sendFile']['name']);
       echo $_POST['gender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $pathFile['filename'] . ' ' . $pathFile['extension'];
     }else{
    ?>
    <form enctype="multipart/form-data" action="index.php" method="POST">
      <select name="gender">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="lastname" />
      <input type="text" name="firstname" />
      <input type="file" name="sendFile" />
      <input type="submit" value="Envoyer" />
    </form>
    <?php }?>
  </body>
</html>
