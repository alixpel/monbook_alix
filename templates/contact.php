<?php
include "../config.php";
include "include/header.php" ?>

<main>
  <h1><?php echo MontrerValeur("TITRE_CONTACT")?></h1>
  <h3><?php echo nl2br(MontrerValeur("TEXTE_CONTACT")) ?></h3>
  <div class="contacts">
    <a href="<?php echo MontrerValeur("TELEPHONE_DIRECT") ?>"><?php echo MontrerValeur("TELEPHONE") ?></a>
    <a href="<?php echo MontrerValeur("email") ?>">e-mail</a>
    <a href="<?php echo MontrerValeur("CV") ?>">C.V.</a>
  </div>
</main>

<?php include "include/footer.php" ?>
