<?php
include "../config.php";
include "include/header.php";

$requeteChapitres = $bdd->query("SELECT * FROM chapter WHERE id_projet = " . $_GET["lien"]);
$resultChapitres = $requeteChapitres-> fetch();

if($_GET["lien"] > count($resultChapitres)) {
  header("location:../accueil.php");
  exit;
}
?>

<main>
  <div class="container">
    <h1> <?php echo $resultChapitres["nom"];?> </h1>
    <div class="row">
      <div class="col-6">
        <h2>Client</h2>
        <?php echo $resultChapitres["client"]?>
        <h2>Lien</h2>
        <?php echo $resultChapitres["lien"]?>
        <h2>Présentation</h2>
        <?php echo $resultChapitres["texte"]?>
      </div>
      <div class="image_chapitre">
        <?php echo html_image("img/chapter/$_GET[chapitreAAfficher].jpg");?>
      </div>
    </div>
  </div>
</main>
<div class="pagination">
  <?php echo $resultChapitres["page"]?>
</div>

<?php include "include/footer.php"; ?>
