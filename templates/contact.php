<?php
include "../config.php";
include "include/header.php" ?>

<main>
  <div class="contact_page">
    <h1><?php echo MontrerValeur("TITRE_CONTACT")?></h1>
    <img src="../img/contact/avatar.jpg" class="avatar" alt="">
    <h3><?php echo nl2br(MontrerValeur("TEXTE_CONTACT")) ?></h3>
    <div class="contacts">
      <a href="<?php echo MontrerValeur("TELEPHONE_DIRECT") ?>"><?php echo MontrerValeur("TELEPHONE") ?></a>
      <a href="<?php echo MontrerValeur("email") ?>">e-mail</a>
      <!-- <a href="#">Linkedin</a> -->
      <a href="<?php echo MontrerValeur("CV") ?>" target="_blank">C.V.</a>
    </div>
    <div class="mouse_pointer">
      <i class='fas fa-mouse-pointer fa-lg'></i>
    </div>
  </div>
</main>

<?php include "include/footer.php" ?>
