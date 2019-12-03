<?php
$age =10;
$gender ='femme';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      if ($age >= 18 AND $gender == 'homme')
      {
      echo 'vous etes majeur et un homme';
    }
      elseif ($age < 18 AND $gender == 'homme')
      {
      echo 'vous êtes mineur et un homme';
    }
      if ($age >= 18 AND $gender == 'femme')
      {
        echo 'vous êtes majeur et une femme';
      }
      elseif ($age < 18 AND $gender == 'femme')
    {
      echo 'vous etes mineur et une femme';
    }
       ?>
     </p>
  </body>
</html>
