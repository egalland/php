<?php
include 'nationnalite.php';
include 'pays.php';
include 'regex.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>TP1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous" />
</head>
<body class="container">
  <?php
  if(
    !empty($_POST['lastname']) && preg_match($regexName, $_POST['lastname']) &&
    !empty($_POST['firstname']) && preg_match($regexName, $_POST['firstname']) &&
    !empty($_POST['birthDate']) &&
    !empty($_POST['addressName']) && preg_match($regexAddress, $_POST['addressName']) &&
    !empty($_POST['email']) && preg_match($regexMail, $_POST['email']) &&
    !empty($_POST['phoneNumber']) && preg_match($regexPhoneNumber, $_POST['phoneNumber']) &&
    !empty($_POST['numberANPE']) && preg_match($regexText, $_POST['numberANPE']) &&
    !empty($_POST['numberBadge']) && preg_match($regexPhoneNumber, $_POST['numberBadge']) &&
    !empty($_POST['areaHero']) && preg_match($regexText, $_POST['areaHero']) &&
    !empty($_POST['areaHack']) && preg_match($regexText, $_POST['areaHack']) &&
    !empty($_POST['areaExp']) && preg_match($regexText, $_POST['areaExp'])
    ){
    ?>
    <p><?= $_POST['lastname']?></p>
    <p><?= $_POST['firstname']?></p>
    <p><?= $_POST['birthDate']?></p>
    <p><?= $nationnaliteFRfr[(($_POST['countryChoice']))]['title']?></p>
    <p><?= $countryCode[($_POST['nationChoice'])-1][3]?></p>
    <p><?= $_POST['addressName']?></p>
    <p><?= $_POST['email']?></p>
    <p><?= $_POST['phoneNumber']?></p>
    <p><?= $_POST['studyLevel']?></p>
    <p><?= $_POST['numberANPE']?></p>
    <p><?= $_POST['numberBadge']?></p>
    <p><?= $_POST['areaHero']?></p>
    <p><?= $_POST['areaHack']?></p>
    <p><?= $_POST['areaExp']?></p>
  <?php }else{ ?>
  <form class="pt-4" action="index.php" method="POST">
    <div class="form-group row">
      <label for="lastname" class="col-2 col-form-label">Nom</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Nom" id="lastname" name="lastname" />
      </div>
    </div>
    <div class="form-group row">
      <label for="firstname" class="col-2 col-form-label">Prénom</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Prénom" id="firstname" name="firstname"/>
      </div>
    </div>
    <div class="form-group row">
      <label for="birthDate" class="col-2 col-form-label">Date de naissance</label>
      <div class="col-10">
        <input class="form-control" type="date" value="2000-01-01" id="birthDate" name="birthDate"/>
      </div>
    </div>
    <div class="form-group row">
      <label for="countryChoice" class="col-2 col-form-label">Pays de naissance</label>
      <div class="col-10">
        <select class="custom-select" id="countryChoice" name="countryChoice">
          <?php for ($row = 0; $row < sizeof($countryCode); $row++){ ?>
            <option value="<?= $row; ?>"><?= $countryCode[$row][3]; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nationChoice" class="col-2 col-form-label">Nationalité</label>
      <div class="col-10">
        <select class="custom-select" id="nationChoice" name="nationChoice">
          <?php foreach ($nationnaliteFRfr as $value){ ?>
            <option value="<?= $value['id']; ?>"><?= $value['title']; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="addressName" class="col-2 col-form-label">Adresse</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Adresse" id="addressName" name="addressName"/>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-2 col-form-label">Email</label>
      <div class="col-10">
        <input class="form-control" type="mail" placeholder="exemple@exemple.com" id="email" name="email" />
      </div>
    </div>
    <div class="form-group row">
      <label for="phoneNumber" class="col-2 col-form-label">Téléphone</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="0600000000" id="phoneNumber" name="phoneNumber" />
      </div>
    </div>
    <div class="form-group row">
      <label for="studyLevel" class="col-2 col-form-label">Diplôme</label>
      <div class="col-10">
        <select class="custom-select" id="studyLevel" name="studyLevel" />
          <option value="0">Sans</option>
          <option value="1">Bac</option>
          <option value="2">Bac+2</option>
          <option value="3">Bac+3</option>
          <option value="4">Supérieur</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="numberANPE" class="col-2 col-form-label">Numéro pôle emploi</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Numéro pôle emploi" id="numberANPE" name="numberANPE"/>
      </div>
    </div>
    <div class="form-group row">
      <label for="numberBadge" class="col-2 col-form-label">Nombre de badge</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Nombre de badge" id="numberBadge" name="numberBadge" />
      </div>
    </div>
    <div class="form-group row">
      <label for="codecademyLink" class="col-2 col-form-label">Liens codecademy</label>
      <div class="col-10">
        <input class="form-control" type="text" placeholder="Liens codecademy" id="codecademyLink" name="codecademyLink" />
      </div>
    </div>
    <div class="form-group row">
      <label for="areaHero" class="col-2 col-form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
      <div class="col-10">
        <textarea class="form-control" id="areaHero" name="areaHero" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="areaHack" class="col-2 col-form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
      <div class="col-10">
        <textarea class="form-control" id="areaHack" name="areaHack" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="areaExp" class="col-2 col-form-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
      <div class="col-10">
        <textarea class="form-control" id="areaExp" name="areaExp" rows="3"></textarea>
      </div>
    </div>
    <div class="row pt-2">
      <input type="submit" class="col btn btn-dark" value="Envoyer" />
    </div>
  </form>
<?php } ?>
</body>
</html>
