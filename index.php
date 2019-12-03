<?php
$age = 19;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie2 exo1</title>
  </head>
  <body>
    <p>
      <?php
      if ($age < 18) { ?>
        Vous êtes mineur
      <?php } else { ?>
        Vous êtes majeur
      <?php } ?>
    </p>
  </body>
</html>
