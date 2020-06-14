<?php
include "../../config.php";
include "../include/header.php";

proteger_page();
if(!empty($_GET["chapitreAAfficher"])) {
    $chapitreAModifier = $bdd -> query("SELECT * from chapter where id_projet = " . $_GET["chapitreAAfficher"]) -> fetch();
} else {
    $chapitreAModifier = [];
}
?>

<h1>Gestion des chapitres</h1>

<?php
show_error();
show_success();
?>

<div class="form">
  <form enctype="multipart/form-data" action="chapter_reponse.php" method="post">
    <input type="hidden" name="id_projet" value="<?php echoKey($chapitreAModifier, "id_projet", 0)  ?>">
    <!-- champ caché -->
    <div class="field">
      Nom : <input name="nom" placeholder="Nom" type="text" value="<?php echoKey($chapitreAModifier, "nom")  ?>">
    </div>
    <div class="field">
      Technologie : <input name="techno_id" placeholder="Technologie" type="text" value="<?php echoKey($chapitreAModifier, "techno_id")  ?>">
    </div>
    <div class="field">
      Client : <input name="client" placeholder="Client" type="text" value="<?php echoKey($chapitreAModifier, "client")?>">
    </div>
    <div class="field">
      Lien : <input name="lien" placeholder="Lien" type="text"  value="<?php echoKey($chapitreAModifier, "lien")?>">
    </div>
    <div class="field">
      Description : <textarea name="texte" placeholder="Description" type="text" cols="40" rows="5" value="<?php echoKey($chapitreAModifier, "texte")?>"></textarea>
    </div>
    <div class="field">
      Page : <input name="page" placeholder="Page" type="number" value="<?php echoKey($chapitreAModifier, "page")?>">
    </div>
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
    <div class="image_admin">
    <?php
    if(!empty($_GET["chapitreAAfficher"])) {
      echo html_image("img/chapter/$_GET[chapitreAAfficher].jpg", "mini_image");
      }
    ?>
    </div>
    <div>
    Image du chapitre : <input name="imageChapitre" type="file"  accept="image/jpeg" />
    </div>
    <input type="submit" value="Envoyer" />
    <a href="<?php echo BOOK_URL_SITE ?>admin/form_accueil/form.php" class="button">Annuler</a>
  </form>
</div>

<?php

include "../include/footer.php";
