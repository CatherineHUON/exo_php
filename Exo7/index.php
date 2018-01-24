<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo7</title>
  </head>
  <body>
    <?php echo "Présentez vous:" ?>
    <form action="" method="post">
      <p>
      <label for="type">Sexe: </label>
      <select id="type" name="sexe" size=1>
        <option value="Monsieur">Homme
        <option value="Madame">Femme
      </select>
      <br>
      Nom: <input type="text" name="Nom" />
      <input type="submit" value="Valider" />
      </p>
    </form>
    <?php
    if (!empty($_POST['sexe']) && $_POST['Nom']) {

     echo "Bonjour ".$_POST['sexe']." ".$_POST['Nom'].".";
    }
    ?>

  </body>
</html>
