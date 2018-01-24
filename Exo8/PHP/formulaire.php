<section id="Contact">
    <h1 class="t3">Contact</h1>
    <div class="contacts">
      <form class="contact1">
        <p class="pc1">
          <label>VOS NOM & PRENOM:</label>
          <input class="contact" type= "text">
        </p>
        <p class="pc2">
        <label for="email">VOTRE ADRESSE MAIL:</label>
        <input type="email" name="email" size="20"
         maxlength="40"  id="email" />
        </p>
        <p class="pc3">
        <label for="message">VOTRE MESSAGE:</label>
         <textarea name="message" id="message" cols="70" rows="8">
         </textarea>
       </p>
      </form>
      <button type="submit" value="Envoyer">Envoyer</button>
        <?php include('./PHP/footer.php'); ?>
    </div>
  </section>
