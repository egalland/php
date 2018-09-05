<!--Faire une page permettant de saisir les informations suivantes :
- Civilité (liste déroulante)
- Nom
- Prénom
- Age
- Société

A la validation, les données saisies devront aparaitre sous le formulaire. 
Attention les données devront rester dans les différents éléments du formulaire même après la validation. -->
<?php
//import
include 'regex.php';
include 'controllerForm.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
        <title>TP 2</title>
    </head>
    <body class="container">
        <form action="index.php" method="POST" class="pt-4">
            <div class="form-group row">
                <label for="gender" class="col-2 col-form-label">Civilité</label>
                <div class="col-10">
                    <select name="gender" id="gender" class="custom-select">
                        <option selected disabled>Selectionner une civilité</option>
                        <option value="M" <?php echo $gender == 'M' ? 'selected' : ''; ?>>M</option>
                        <option value="Mme" <?php echo $gender == 'Mme' ? 'selected' : ''; ?>>Mme</option>
                    </select>
                    <?php if(!empty($_POST)){ ?><p class="alert alert-danger"><?= empty($errorLog['gender'])? $gender : $errorLog['gender']; ?></p><?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-2 col-form-label">Nom</label>
                <div class="col-10">
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?= $lastname; ?>" />
                    <?php if(!empty($_POST)){ ?><p class="alert alert-danger"><?= empty($errorLog['lastname'])? $lastname : $errorLog['lastname']; ?></p><?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="firstname" class="col-2 col-form-label">Prénom</label>
                <div class="col-10">
                    <input class="form-control" id="firstname" type="text" name="firstname" value="<?= $firstname; ?>" />
                    <?php if(!empty($_POST)){ ?><p class="alert alert-danger"><?= empty($errorLog['firstname'])? $firstname : $errorLog['firstname']; ?></p><?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-2 col-form-label">Age</label>
                <div class="col-10">
                    <input class="form-control" id="age" type="text" name="age" value="<?= $age; ?>" />
                    <?php if(!empty($_POST)){ ?><p class="alert alert-danger"><?= empty($errorLog['age'])? $age : $errorLog['age']; ?></p><?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="society" class="col-2 col-form-label">Société</label>
                <div class="col-10">
                    <input class="form-control" id="society" type="text" name="society" value="<?= $society; ?>" />
                    <?php if(!empty($_POST)){ ?><p class="alert alert-danger"><?= empty($errorLog['society'])? $society : $errorLog['society']; ?></p><?php } ?>
                </div>
            </div>
                <input type="submit" value="Envoyer" name="submitForm" class="col btn btn-dark" />
        </form>
    </body>
</html>
