<?php
$gender = 'Femme';
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if ($gender == 'Homme'){ ?>
    <p> C'est un développeur!!! </p>
    <?php}else{ ?>
    <p> C'est une développeuse!!! </p>
  <?php}?>

  <!-- echo ($gender != 'Homme') ? 'C\'est une développeuse !!!'
             : 'C\'est un développeur !!!'; 
  </body>
</html>
