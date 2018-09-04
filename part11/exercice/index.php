<!--Compléter le fichier fourni pour que la calculatrice fonctionne.
Bonus : Ajouter un bouton de remise à zéro. -->
<?php
$result = 0;
$chiffre1 = 0;
$chiffre2 = 0;
// Verification des nombres et changement de leur valeur
(!empty($_POST['chiffre1']) && is_numeric($_POST['chiffre1']))? $chiffre1 = $_POST['chiffre1'] : $chiffre1 = $chiffre1;
(!empty($_POST['chiffre2']) && is_numeric($_POST['chiffre2']))? $chiffre2 = $_POST['chiffre2'] : $chiffre2 = $chiffre2;
// Si on envoi une requete on execute le code
if(!empty($_POST)){
        // addition
    if (isset($_POST['addition'])){
        $result = $chiffre1 + $chiffre2;
    }
        // soustraction
    if(isset($_POST['soustraction'])){
        $result = $chiffre1 - $chiffre2;
    }
        // multiplication
    if(isset($_POST['multiplication'])){
        $result = $chiffre1 * $chiffre2;
    }
        // division
    if(isset($_POST['division'])){
        $result = $chiffre1 / $chiffre2;
    }
        // reset
    if(isset($_POST['reset'])){
        $result = 0;
        $chiffre1 = 0;
        $chiffre2 = 0;
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Calculatrice</title>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
      <input type="text" name="chiffre1" value="<?= $chiffre1; ?>"/>
      <input type="text" name="chiffre2" value="<?= $chiffre2; ?>"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="reset" value="C"/>
    </form>
    <p>Résultat : <?= $result; ?></p>
  </body>
</html>