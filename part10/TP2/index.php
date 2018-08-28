<!--Faire une page permettant de saisir les informations suivantes :
- Civilité (liste déroulante)
- Nom
- Prénom
- Age
- Société

A la validation, les données saisies devront aparaitre sous le formulaire. 
Attention les données devront rester dans les différents éléments du formulaire même après la validation. -->
<?php
include 'regex.php';
$lastname = '';
$gender = '';
$firstname = '';
$age = '';
$society = '';
!empty($_POST['gender'])? $gender = $_POST['gender'] : $gender = $gender;
!empty($_POST['lastname'])? $lastname = $_POST['lastname'] : $lastname = $lastname;
!empty($_POST['firstname'])? $firstname = $_POST['firstname'] : $firstname = $firstname;
!empty($_POST['age'])? $age = $_POST['age'] : $age = $age;
!empty($_POST['society'])? $society = $_POST['society'] : $society = $society;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>TP 2</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="index.php" method="POST">
            <p>
            <select name="gender">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
                <?= $gender; ?>
            </p>
            <p><input type="text" name="lastname" value="<?= $lastname; ?>" /><?= $lastname; ?></p>
            <p><input type="text" name="firstname" value="<?= $firstname; ?>" /><?= $firstname; ?></p>
            <p><input type="text" name="age" value="<?= $age; ?>" /><?= $age; ?></p>
            <p><input type="text" name="society" value="<?= $society; ?>" /><?= $society; ?></p>
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
