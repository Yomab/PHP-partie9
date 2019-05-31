<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice8partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
        
        $date_debut = '2019-05-28';
        $date_fin = date('Y-m-d', strtotime($date_debut.' -22 days')); ?>
        <p><?= (' Nous sommes le ' . $date_debut . ' et il y a 22 jours nous étions le ' . $date_fin);?></p>
        
        
       
     </body>
</html>