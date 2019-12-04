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
      if ($age >= 18 && $age < 140) { ?>
      Vous êtes majeur!
      <?php } elseif ($age >0 && $age <18){ ?>
      Vous êtes mineur!
      <?php} else { ?>
      Vous avez fait une erreur!
      <?php}?>
     </p>
  </body>
</html>
