<?php
$calendar = ['1' => 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
$years = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
$days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$caseNb = 1; // On définit 1 le Lundi de la semaine
$dayInMonth = 1;
if (isset($_POST['selectMonths']) && isset($_POST['selectYears'])) {
    $selMonths = intval(($_POST['selectMonths']));
    $selYears = intval(($_POST['selectYears']) + 2000);
    $calendarNumber = cal_days_in_month(CAL_GREGORIAN, $selMonths, $selYears);
    $firstOfMonth = date('N', mktime(0, 0, 0, $selMonths, 1, $selYears)); //premier jour du mois étant un 'exp: Mardi' [2]
    $nmbDay = date('t', mktime(0, 0, 0, $selMonths, 1, $selYears)); //nombre de jour dans le mois sélectionné
}
?>
<!Doctype html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UFT-8" />
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier</title>
    </head>
    <body>
        <form class="calendarYears bg-primary" method="post">
            <select name="selectMonths">
                <option disabled="Mois">Mois</option>
                <?php for ($i = 1; $i <= 12; $i++) {
                    ?>
                    <option name="months" value="<?= $i ?>" >
                        <?php echo $calendar[$i];
                        ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <select name="selectYears">
                <?php for ($j = 0; $j <= 20; $j++) {
                    ?>
                    <option name="years" value="<?= $j ?>">
                        <?php echo $years[$j];
                        ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <button type="submit">Voir</button>
        </form>

        <?php if (isset($_POST['selectMonths']) && (isset($_POST['selectYears']))) {
            ?>
            <p><?php
                echo 'nombre de jour dans le mois ' . $calendarNumber . ' pour ' . $selMonths . ' de' . $selYears . ' et ' . $firstOfMonth . ' ' . $nmbDay;
                ?></p>
            <table class = "table table-bordered bg-secondary">
                <thead class="bg-warning">
                    <tr class="border rounded-sm border-success>
                        <?php foreach ($days as $day) {
                            ?>
                            <th><?= $day ?></th>
                            <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <!--Je fais un boucle pour faire mes 6 TR-->
                    <?php for ($i = 1; $i <= 6; $i++) { ?> 
                        <tr class="border rounded-sm border-success>
                            <!--Je fais une boucle pour faire mes 7 cases-->
                            <?php for ($j = 1; $j <= 7; $j++) { ?>
                                <td scope="col-2">
                          <!--Nous allons définir le contenu des <td>-->
                                    <?php
                                    if ($firstOfMonth <= $caseNb && $caseNb <= ($nmbDay + $firstOfMonth - 1)) {
                                        echo $dayInMonth;
                                        $dayInMonth++;
                                    }
                                    $caseNb++;
                                } // de la boucle du TD 
                                ?>
                        </tr>
                    <?php } // Fin de la boucle du TR  ?>
                </tbody>
            </table>
            <?php
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

       
            </td>    
            </tr>
            </tbody>
    </table>

            </body>
            </html>