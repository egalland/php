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
    <title>Exercice 4</title>
  </head>
  <body>
    <p><?= $_COOKIE['login']; ?></p>
    <p><?= $_COOKIE['password']; ?></p>
  </body>
</html>
