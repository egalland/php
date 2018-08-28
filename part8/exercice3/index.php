<?php
// création des cookies pour le login et le password
if (isset($_POST['login']) != NULL && isset($_POST['password']) != NULL){
  setcookie('login', $_POST['login'], time() + 10);
  setcookie('password', $_POST['password'], time() + 10);
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <form action="index.php" method="POST">
    <input type="text" name="login" />
    <input type="password" name="password" />
    <input type="submit" value="Envoyer">
  </form>
  </body>
</html>
