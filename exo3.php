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
    <h2>Exercice 3</h2>
    <?php
        $a = 1;
        while ($a <= 15) {
            echo 'on y arrive presque';
            $a++;
        }
    ?>
        <p>2 version</p>
    <?php
    for($i = 1; $i <= 15; $i++) {
    var_dump('on y arrive presque');
    }
    ?>
            <p>3 version</p>
    <?php
    for($i = 1; $i <= 15; $i++) {
    if($i !=15){
        echo 'on y presque. ';
    }else{
        echo 'on a atteint';
    }
    }
    ?>

<p>3 version</p>
    <?php
    for($i = 1; $i <= 15; $i++) {
    var_dump('on y arrive presque');
    }
    ?>

<p>4 version</p>
    <?php
$i=1
while($i<=15) {
  echo "<p>Tour $x : On y est presque</p>";
  $i++;
} echo "<p>Voilà fini</p>";
    ?>


</div>
</body>
</html>