<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo3</title>
  </head>
  <body>
    <?php echo "Calculer la factorielle de 10<br/>" ?>

    <?php
    $nbr = 10;
    function factorielle($nbr)
    {
       if($nbr === 0) {
           return 1;
       }
      else
          {
           return $nbr*factorielle($nbr-1);
         }

    }
      echo number_format(factorielle(10),0,',',' ');
    ?>


  </body>
</html>
