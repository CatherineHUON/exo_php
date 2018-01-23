<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo4</title>
  </head>
  <body>
    <?php echo "Calcul factoriel" ?>
    <form action="" method="post">
      <p>
      <input type="number"  min="1" max="50" name="nombre">
      <input type="submit" value="Valider" />
      </p>
    </form>
    <?php
      if(!empty($_POST['nombre'])){
        $nbr = $_POST['nombre'];
        echo "Resultat : ".number_format(factorielle($nbr));
      }


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

      ?>
</body>
</html>
