<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice6partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31?>
<p><?= "Il y a  {$number} jours en février 2016";
?></p>
     </body>
</html>