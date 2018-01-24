<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo5</title>
  </head>
  <body>
    <?php echo "Table de multiplication de 13<br/>" ?>

  <?php
  $X = 13;
  $Y = 0;

  while ($Y <= 10) {
    echo $X." x ".$Y." = ".$X*$Y."<br/>";

    $Y++;
  }

  ?>
  </body>
</html>
