<?php
include "../../config.php";
include "../include/header.php";

proteger_page();

?>

<h2>Modification de la page d'accueil</h2>

<?php
show_error();
show_success();
?>

  <div class="form">
    <!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
    <form enctype="multipart/form-data" action="form_reponse.php" method="post">
      <hr>
      <div class="field">
        <label for="titre">Titre</label><input type="text" name="titre" value="<?php echo montrerValeur("TITRE_ACCUEIL")?>" placeholder="Titre de la page d\'accueil" />
      </div>
      <hr>
      <div class="field">
        <label for="texteAccueil">Texte : </label><textarea name="texteAccueil" cols="40" rows="5"><?php echo montrerValeur("TEXTE_ACCUEIL")?></textarea>
      </div>
      <hr>
      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
      <div class="image_accueil">
        <?php echo html_image("img/accueil.jpg", "mini_image");?>
      </div>
      <label for="imageAccueil">Image de la page d'accueil : </label><input name="imageAccueil" type="file"  accept="image/jpeg" />
      <hr>
      <input type="submit" value="Envoyer" class="send-button"/>
      <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php" class="cancel-button">Annuler</a>
    </form>

  </div>

<?php

include "../include/footer.php";
