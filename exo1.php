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
    <h2>Exercice 1</h2>
    <p>version 1</p>
    <?php
        for($i = 0; $i <= 10; $i++) {
            echo($i);
        }
    ?>
    <p>version 2</p>
    <?php
    $number = 0;
        while($number <= 10) {
            echo $number. '<br>';
            $number ++;
            
        }
    ?>
    <p>version 3</p>
    <?php
    $number = 0;
    while($number <= 10) {
        ?>
        <p><?= $number ?></p>
        <?php $number++ ;
    }
    ?>
</div>
</body>
</html>