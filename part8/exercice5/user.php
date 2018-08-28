<?php
if (isset($_POST['login']) != NULL && isset($_POST['password']) != NULL){
  setcookie('login', $_POST['login'], time() + 100);
  setcookie('password', $_POST['password'], time() + 100);
  $_COOKIE['login'] = $_POST['login'];
  $_COOKIE['password'] = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <form method="POST" action="user.php">
      <p>Modifier le login(<?= $_COOKIE['login']; ?>) : <input type="text" name="login" /></p>
      <p>Modifier le mot de passe(<?= $_COOKIE['password']; ?>) : <input type="text" name="password" /></p>
      <input type="submit" value="Modifier" />
    </form>
  </body>
</html>
