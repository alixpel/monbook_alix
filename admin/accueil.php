<?php
include "../config.php";
include "include/header.php";
proteger_page();
?>

<div class="main">
  <h1>Bienvenue dans votre espace administration</h1>

  <?php
  show_error();
  show_success();
  ?>

  <div class="intro">
    <div class="menu_accueil">
      <a href="<?php echo BOOK_URL_SITE ?>" target="_blank">Aller au site</a>
      <a href="<?php echo BOOK_URL_SITE ?>admin/form_accueil/form.php">Modifier la page d'accueil</a>
      <a href="<?php echo BOOK_URL_SITE ?>admin/chapter/chapter_list.php">Ajouter, modifier ou supprimer un chapitre</a>
      <!-- <a href="#">Ajouter, modifier ou supprimer un utilisateur</a> -->
      <a href="<?php echo BOOK_URL_SITE ?>admin/deconnexion.php">Se déconnecter</a>
    </div>
  </div>
</div>

<?php
include "include/footer.php";
