<?php
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <title>Exo4 Partie2</title>
</head>
<body>
  <!-- Si tu as 18 ans ou plus tu es majeur. -->
    <?php if ($age >= 18){ ?>
      <p>Tu es majeur</p>
      <!-- Sinon tu n'es pas majeur. -->
    <?php } else { ?>
      <p>Tu n'es pas majeur</p>
    <?php } ?>
</body>
</html>
