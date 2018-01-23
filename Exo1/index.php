<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo1</title>
  </head>
  <body>
    <?php echo "Afficher tous les nombres impairs entre 0 et 1000 en ordre croissant"; ?>
    <?php
    $nb = 1;
    while ($nb < 1000) {
      echo $nb."<br/>";
      $nb = $nb +2;
    }
    echo "C'est fini !!!";

     ?>
  </body>
</html>
