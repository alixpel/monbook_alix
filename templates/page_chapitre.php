<?php
include "../config.php";
include "include/header.php";

$requeteChapitres = $bdd->query("SELECT * FROM chapter WHERE id_projet = " . $_GET["lien"]);
$resultChapitres = $requeteChapitres-> fetch();

if($_GET["lien"] > count($resultChapitres)) {
  header("location:nav_chapitres.php");
  exit;
}
?>

<main>
  <div class="one_chapter">
    <h1> <?php echo $resultChapitres["nom"];?> </h1>
    <h2>Client</h2>
    <p><?php echo $resultChapitres["client"]?></p>
    <h2>Lien</h2>
    <p><?php echo "<a href='" . $resultChapitres['lien'] . "' target='_blank'>github</a>"?></p>
    <h2>Présentation</h2>
    <p><?php echo $resultChapitres["texte"]?></p>
  </div>
  <div class="image_chapitre">
    <?php echo html_image("img/chapter_img/" .  $resultChapitres['id_projet'] . ".jpg", "chapter_realsize");?>
  </div>
</main>
<div class="pagination">
  <?php echo $resultChapitres["page"]?>
</div>

<?php include "include/footer.php"; ?>
