<?php include "include/header.php" ?>

<main>
  <div class="container">
    <h1><?php echo MontrerValeur("titre_contact")?></h1>
    <div class="row">
      <div class="col-6">
        <div class="pr-20 texte">
          <?php echo nl2br(MontrerValeur("texte_contact"))?>
        </div>
      </div>
      <div class="col-6">
        <?php echo html_image("../img/accueil.jpg")?>
      </div>
    </div>
  <div>
</main>

<?php include "include/footer.php" ?>
