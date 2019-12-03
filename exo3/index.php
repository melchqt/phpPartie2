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
    <p>
    <?php
    if ($gender == 'Homme')
      {
      echo 'C\'est un développeur!!!';
    }
    elseif ($gender == 'Femme')
      {
     echo 'C\'est une développeuse !!!';
   }
    ?>
  </p>
  </body>
</html>
