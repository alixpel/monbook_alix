<?php
include "../config.php";
include "include/header.php";

$requeteTechno = $bdd->query("SELECT * FROM chapter, techno, chapter_techno
WHERE chapter.id_projet = chapter_techno.projet_id
AND techno.id_techno = chapter_techno.techno_id
AND techno.id_techno = '$_GET[lien]'");

$resultat_liste_techno = $requeteTechno->fetchAll();
// var_dump($resultat_liste_techno);
?>
<div class="nav_chapitres">
  <h2>Les projets</h2>
  <div class="chapter_list">
    <?php
    $requeteChapitres = $bdd->query("SELECT * FROM chapter");
    $resultChapitres = $requeteChapitres->fetchAll();
    foreach ($resultChapitres as $key => $chapitre_a_afficher)  {
      $url_chapitre = "page_chapitre.php?lien=" . $chapitre_a_afficher["id_projet"];
      echo "<div class='chapter_preview'>";
      echo "<a href='$url_chapitre'>" . $chapitre_a_afficher["nom"] . "</a>";
      echo "<p>" . $chapitre_a_afficher["techno_id"] . "</p>";
      echo html_image("img/chapter_img/" .  $chapitre_a_afficher['id_projet'] . ".jpg", "chapter_thumbnail");
      echo "</div>";
    }
    ?>
  </div>
</div>

<?php include "include/footer.php"; ?>
