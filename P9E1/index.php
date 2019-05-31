<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice1partie9</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <h1>'Aujourd'hui nous sommes le'</h1>
        <div class="jour">
        <?php
    $today = date("j/m/Y");?>
    
    <?= ' ' . $today;?>
        </div>
        <h2>Nous vous souhaitons une agréable journée !!!</h2>      
        </body>
</html> 