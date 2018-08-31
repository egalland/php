<?php
// DECLARATION DU NUMERO DE LA CASE
$caseNumber = 0;
// CHOIX DE BASE
$monthChoice = 8;
$yearChoice = 2018;
// CHANGEMENT DU CALENDRIER EN FONCTION DU CHOIX
if (isset($_POST['monthChoice']) && isset($_POST['yearChoice'])){
  $monthChoice = $_POST['monthChoice'];
  $yearChoice = $_POST['yearChoice'];
}
// NOMBRE DE JOURS DANS LE MOIS CHOISIT
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $monthChoice, $yearChoice);
// RECUPERATION DU 1ER JOUR EN FONCTION DU MOIS ET DE L'ANNEE
$firstDayOfWeekNumber = gregoriantojd($monthChoice, 1, $yearChoice);
// TRANSFORMATION DU 1ER JOUR EN NOMBRE DE LA SEMAINE
$emptyStartCases = jddayofweek($firstDayOfWeekNumber, 0)-1;
// DIMANCHE -1 DEVIENT 6
$emptyStartCases = ($emptyStartCases == -1) ? 6 : $emptyStartCases;
// RECUPERATION DU DERNIER JOUR EN FONCTION DU MOIS ET DE L'ANNEE
$lastDayOfWeekNumber = gregoriantojd($monthChoice, $daysInMonth, $yearChoice);
// TRANSFORMATION DU DERNIER JOUR EN NOMBRE DE LA SEMAINE
$emptyEndCases = jddayofweek($lastDayOfWeekNumber, 0)-1;
// DIMANCHE -1 DEVIENT 600
$emptyEndCases = ($emptyEndCases == -1) ? 6 : $emptyEndCases;
// CALCUL POUR SAVOIR LE NOMBRE DE CASES VIDES A LA FIN DU TABLEAU
$emptyEndCases = 6-$emptyEndCases;
// NOMBRE DE CASES DANS LE CALENDRIER
$casesCalendar = $emptyStartCases + $emptyEndCases + $daysInMonth;
// NOMBRE DE LIGNES DANS LE CALENDRIER
$numberRows = $casesCalendar / 7;
// DECLARATION ET INITIALISATION DU JOUR A 1
$daynumber = 1;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>TP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- CHOIX DU MOIS ET DE L'ANNEE -->
    <form action="index.php" method="post">
      <!-- SELECTEUR POUR LE MOIS -->
      <select name="monthChoice">
        <?php for ($month = 1; $month <= 12; $month++) { ?>
          <option value="<?= $month; ?>"><?= $month; ?></option>
        <?php } ?>
      </select>
      <!-- SELECTEUR POUR L'ANNEE -->
      <select name="yearChoice">
        <?php for ($year = 2000; $year <= 2018; $year++) { ?>
          <option value="<?= $year; ?>"><?= $year; ?></option>
        <?php } ?>
      </select>
      <input type="submit" value="Changer la date" />
    </form>
    <table>
      <thead>
        <tr>
          <th>Lundi</th>
          <th>Mardi</th>
          <th>Mercredi</th>
          <th>Jeudi</th>
          <th>Vendredi</th>
          <th>Samedi</th>
          <th>Dimanche</th>
        </tr>
      </thead>
      <tbody>
        <?php /*boucle créant les rows*/ for ($numberRows; $numberRows !=0; $numberRows--){ ?>
        <tr>
          <?php /*boucle pour les jours*/ for ($days = 7; $days != 0; $days--) { ?>
          <td>
            <?php /*affichage du jour si on a passé les cases vides et qu'on n'a pas dépassé le nombre de jours dans le mois et on incrémente le jour*/
            if($caseNumber >= $emptyStartCases && $daynumber <= $daysInMonth){
              echo $daynumber;
              $daynumber++;
            }
            // incrémentation de la case du tableau
            $caseNumber++;
           ?>
          </td>
          <?php } ?>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </body>
</html>
