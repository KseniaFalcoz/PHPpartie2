<!doctype html>
<html lang="fr">
<head>
    <title>Exercices PHP Partie 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Exercices PHP Partie 2</h1>
    <h2>Exercice 2</h2>

    <p>Version 1</p>
    <?php 
        $a = 0;
        $b = 15;
        while ($a <= 20) {
            echo($a*$b);
            $a++;
        }
    ?>

    <p>Version 2</p>
    <?php
        $a = 0;
        $b = 15;
        while ($a <= 20) {
            var_dump($a*$b);
            $a++;
    }
    ?>

    <p>Version 3</p>
    <?php
        $randomNumber = rand(1, 100);
        for ($number = 0; $number <=20; $number++) { // initialisation, condition, incrementation
            ?>
            <p><?= 'Ma premiere variable : '. $number ?></p>
            <p><?= 'Ma seconde variable : '. $randomNumber ?></p>
            <p><?= 'La multuplication des deux : '. $number * $randomNumber ?></p>
            <?php
        }
    ?>
</div>
</body>
</html>