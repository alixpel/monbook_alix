<?php
include "../../config.php";
include "../include/header.php";

proteger_page();
if(!empty($_GET["chapitreAAfficher"])) {
    $chapitreAModifier = $bdd -> query("SELECT * from chapter where id_projet = " . $_GET["chapitreAAfficher"]) -> fetch();
} else {
    $chapitreAModifier = [];
}

show_error();
show_success();
?>
<div class="main">
  <h1>Gestion des chapitres</h1>
  <div class="chapter">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a>
    <hr>
    <h2><?php echoKey($chapitreAModifier, "nom")  ?></h2>
  </div>
  <div class="form">
    <form enctype="multipart/form-data" action="chapter_reponse.php" method="post">
      <input type="hidden" name="id_projet" value="<?php echoKey($chapitreAModifier, "id_projet", 0)  ?>">
      <!-- champ caché -->
      <hr>
      <div class="field">
        <label for="nom">Nom : </label><input name="nom" placeholder="Nom" type="text" value="<?php echoKey($chapitreAModifier, "nom")  ?>">
      </div>
      <hr>
      <div class="field">
        <label for="techno_id">Technologie : </label><input name="techno_id" placeholder="Technologie" type="text" value="<?php echoKey($chapitreAModifier, "techno_id")  ?>">
      </div>
      <hr>
      <div class="field">
        <label for="client">Client : </label><input name="client" placeholder="Client" type="text" value="<?php echoKey($chapitreAModifier, "client")?>">
      </div>
      <hr>
      <div class="field">
        <label for="lien">Lien : </label><input name="lien" placeholder="Lien" type="text"  value="<?php echoKey($chapitreAModifier, "lien")?>">
      </div>
      <hr>
      <div class="field">
        <label for="texte">Description : </label><textarea name="texte" placeholder="Description" type="text" cols="40" rows="5" value="<?php echoKey($chapitreAModifier, "texte")?>"></textarea>
      </div>
      <hr>
      <div class="field">
        <label for="page">Page : </label><input name="page" placeholder="Page" type="number" value="<?php echoKey($chapitreAModifier, "page")?>">
      </div>
      <hr>
      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
      <div class="image_admin field">
      <?php
      if(!empty($_GET["chapitreAAfficher"])) {
        echo html_image("img/chapter/$_GET[chapitreAAfficher].jpg", "mini_image");
        }
      ?>
      </div>
      <div class="image_du_chapitre">
      <label for="imageChapitre">Image du chapitre : </label><input name="imageChapitre" type="file"  accept="image/jpeg" />
      </div>
      <input type="submit" value="Envoyer" class="send-button" />
      <a href="<?php echo BOOK_URL_SITE ?>admin/form_accueil/form.php" class="cancel-button">Annuler</a>
    </form>
  </div>
</div>

<?php

include "../include/footer.php";
