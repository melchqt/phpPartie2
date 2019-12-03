<?php
$age = 18;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>partie2exo1</title>
  </head>
  <body>
    <p>
      <?php
      if ($age >= 18)
      {
          echo 'Vous êtes majeur';
      }
      elseif ($age < 18)
      {
          echo 'Vous êtes mineur';
      }
      ?>
     </p>
  </body>
</html>
