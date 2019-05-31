<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice5partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
$date1 = "31-05-2019"; //date fr le 28 mai 2019
$date2 = "16-05-2016"; // date fr le 16 mai 2016
// On transforme les 2 dates en timestamp
$date3 = strtotime($date1);
$date4 = strtotime($date2);
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date4 - $date3;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24 ?>
 
<p><?= "Nombre de jours entre le 28/05/2019 et le 16/05/2016 = ".$nbJours;// dans mon exemple : Nombre de jours : 153
 
?></p>
     </body>
</html>     