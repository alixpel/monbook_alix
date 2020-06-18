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

    <p><span>Client : </span><?php echo $resultChapitres["client"]?></p>

    <p><span>Lien : </span><?php echo "<a href='" . $resultChapitres['lien'] . "' target='_blank'>github&nbsp&nbsp<sub><i class='fas fa-mouse-pointer fa-lg'></i></sub></a>"?></p>

    <p><span>Présentation :</span><br>
    <?php echo $resultChapitres["texte"]?></p>
  </div>
  <div class="image_chapitre">
    <?php echo html_image("img/chapter_img/" .  $resultChapitres['id_projet'] . ".jpg", "chapter_realsize");?>
  </div>
</main>
<div class="pagination">
  <i class="fas fa-chevron-left"></i>
  <?php
  echo $resultChapitres["page"];
  ?>
  <i class="fas fa-chevron-right"></i>
</div>

<?php include "include/footer.php"; ?>
