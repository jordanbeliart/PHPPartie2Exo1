<?php
$age = 12;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie2 exo1</title>
  </head>
  <body>
    <?php
      if ($age < 18) {
        echo 'Vous êtes mineur';
      } else {
        echo 'Vous êtes majeur';
      }
      ?>
  </body>
</html>
