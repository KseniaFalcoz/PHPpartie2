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
    <h2>Exercice bonus</h2>

    <p>Version 1</p>
<?php
    $dropdown = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $show='<select name="drop_down">';
        for($i = 0, $c = count($dropdown); $i < $c; $i++) {
        $show.='<option value="'.$i.'">'.$dropdown[$i].' </option>';
        }
        echo $show;
?>

    <p>Version 2</p>
    <?php
        $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
      ?>
      <select>
        <?php
        foreach ($tab as $value) {
          ?>
          <option><?= $value ?></option>
          <?php
        }
        ?>
      </select>


</div>
</body>
</html>