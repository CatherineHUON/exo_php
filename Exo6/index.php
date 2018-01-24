<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo6</title>
  </head>
  <body>
    <?php echo "Présentez vous:" ?>
    <form action="" method="post">
      <p>
      <input type="text" name="Nom" />
      <input type="number" min=1 name="Age" />
      <input type="submit" value="Valider" />
      </p>
    </form>
    <?php
    if (!empty($_POST['Nom']) && $_POST['Age']) {

     echo "Bonjour ".$_POST['Nom']." vous avez ".$_POST['Age']." ans.";
    }
    ?>

  </body>
</html>
