<?php
    include "include/head.php";
?>

<main>
  <div class="container">
    <h1> <?php echo $chapitre_a_afficher["nom"]?> </h1>
    <div class="row">
      <div class="col-6">
        <h2>Client</h2>
        <?php echo $chapitre_a_afficher["client"]?>
        <h2>Lien</h2>
        <?php echo $chapitre_a_afficher["lien"]?>
        <h2>Présentation</h2>
        <?php echo $chapitre_a_afficher["texte"]?>
      </div>
      <div class="col-6">
        <?php echo html_image("img/$_GET[chapitreAAfficher].jpg");?>
      </div>
    </div>
  </div>
</main>
<div class="pagination">
  <?php echo $chapitre_a_afficher["page"]?>
</div>

<?php
include "include/footer.php";
?>
