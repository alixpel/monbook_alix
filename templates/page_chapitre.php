<?php
include "../config.php";

$requeteChapitres = $bdd->query("SELECT * FROM chapter WHERE id_projet = " . $_GET["lien"]);
$resultChapitres = $requeteChapitres-> fetch();
if($_GET["lien"] > count($resultChapitres)) {
  header("location:nav_chapitres.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php echo NOM_DU_SITE; echo " - "; echo $resultChapitres["client"]; echo " - "; echo $resultChapitres["nom"];?> </title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo URL_TEMPLATE ?>css/style.css" />
    <!-- icons -->
    <script src="https://kit.fontawesome.com/030bc59c7c.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="assets/photos/favicon.ico">
  </head>
  <body>
    <header>
      <h2><?php echo MontrerValeur("mon_nom")?></h2>
      <?php include "include/nav.php" ?>
    </header>
    <main>
      <div class="one_chapter">
        <h1> <?php echo $resultChapitres["nom"];?> </h1>
        <p><span>Client : </span><?php echo $resultChapitres["client"]?></p>
        <p><span>Lien : </span><?php echo "<a href='" . $resultChapitres['lien'] . "' target='_blank'>github&nbsp&nbsp<sub><i class='fas fa-mouse-pointer fa-lg'></i></sub></a>"?></p>
        <p><span>Présentation :</span><br>
        <?php echo $resultChapitres["texte"]?></p>
      </div>
      <div class="image_chapitre">
        <?php echo html_image("img/chapter_img/" .  $resultChapitres['id_projet'] . ".jpg", "chapter_realsize");
              echo html_image("img/chapter_img_bis/" . $resultChapitres['id_projet'] . ".jpg", "chapter_realsize"); ?>
      </div>
    </main>
    <div class="pagination">
      <a href="<?php echo PATH_TEMPLATE . "/page_chapitre.php?lien=" .  ($_GET['page'] + 1) ?>"><i class="fas fa-chevron-left"></i></a>
      &nbsp
      <?php
      echo $resultChapitres["page"];
      ?>
      &nbsp
      <i class="fas fa-chevron-right"></i>
    </div>

<?php include "include/footer.php"; ?>
