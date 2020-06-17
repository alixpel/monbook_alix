<?php
include "../config.php";
include "include/header.php";
 ?>

<div class="nav_chapitres">

  <h2>Les projets</h2>
    <?php
    $requeteChapitres = $bdd->query("SELECT * FROM chapter");
    $resultChapitres = $requeteChapitres->fetchAll();
    foreach ($resultChapitres as $key => $chapitre_a_afficher)  {
      $url_chapitre = "page_chapitre.php?lien=" . $chapitre_a_afficher["id_projet"];
      echo "<a href='$url_chapitre'>" . $chapitre_a_afficher["nom"] . "</a>";
      echo "<p>" . $chapitre_a_afficher["techno_id"] . "</p>";
      echo html_image("img/chapter_img/" .  $chapitre_a_afficher['id_projet'] . ".jpg", "chapter_thumbnail");
    }
    ?>
  <h2>Filtrer par technologie</h2>
    <?php
    $requeteTechno = $bdd->query("SELECT * FROM techno");
    $resultTechno = $requeteTechno->fetchAll();
    foreach ($resultTechno as $key2 => $techno_a_afficher) {
      $url_techno = "page_techno.php?lien=" . $techno_a_afficher["id_techno"];
      echo "<a href='$url_techno'>" . $techno_a_afficher["nom_techno"] . "</a>";
    }
     ?>
</div>

<?php
include "include/footer.php";
?>
