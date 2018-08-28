<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      <select name="gender">
        <option selected disabled>----</option>
        <!--create an option disabled-->
        <option value="M">M</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="lastname" />
      <input type="text" name="firstname" />
      <input type="submit" value="Envoyer" />
    </form>
  </body>
</html>
