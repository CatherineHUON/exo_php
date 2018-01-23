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
  // $Y = n;

  while ($n <= 10) {
    echo $X." x ".$n." = ".$X*$n;
    $n++;
  }
  // function factorielle($nbr)
  // {
  //    if($nbr === 0) {
  //        return 1;
  //    }
  //   else
  //       {
  //        return $nbr*factorielle($nbr-1);
  //      }
  //
  // }
  //   echo number_format(factorielle(10),0,',',' ');
  ?>
  </body>
</html>
