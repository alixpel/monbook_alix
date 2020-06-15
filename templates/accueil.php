<?php
include "../config.php";
include "include/header.php" ?>

<main>
  <div class="container">
    <div class="titre_accueil">
      <h1><?php echo MontrerValeur("TITRE_ACCUEIL")?></h1>
    </div>
    <div class="accueil_texte_image">
      <div class="texte_accueil">
        <p><?php echo nl2br(MontrerValeur("TEXTE_ACCUEIL"))?></p>
      </div>
      <div class="image_accueil">
        <?php echo html_image("img/accueil.jpg", "image_d_accueil")?>
      </div>
    </div>
  <div>
</main>

<?php include "include/footer.php" ?>
