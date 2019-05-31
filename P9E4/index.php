<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice4partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <h1>'Nombre de secondes'</h1>
        <div class="jour">        
<?php
 $jour = new DateTime();
 echo $jour->getTimestamp();
 $last = new DateTime("2016/08/02");?>
<p><?= $last->getTimestamp();?></p>

        </div>
        <h2>Nous vous souhaitons une agréable journée !!!</h2>      
        </body>
</html> 