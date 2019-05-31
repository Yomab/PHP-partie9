<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice7partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
        
        $date_debut = '2019-05-28';
        $date_fin = date('Y-m-d', strtotime($date_debut.' +20 days')); ?>
        <p><?= (' Nous sommes le ' . $date_debut . ' et dans 20 jours nous seront le ' . $date_fin);?></p>
        
        
       
     </body>
</html>