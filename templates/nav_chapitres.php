<?php
include "../config.php";
include "include/header.php"
 ?>

<div class="nav_chapitres">
  <a href="<?php BOOK_PATH_SITE ?>accueil.php">Accueil</a>
  <?php echo "<h2>Les projets</h2>"; ?>
  <nav>
    <ul>
      <?php
      $requeteChapitres = $bdd->query("SELECT * FROM chapter");
      $resultChapitres = $requeteChapitres->fetchAll();
      foreach ($resultChapitres as $key => $chapitre_a_afficher)  {
        $url_chapitre = "page_chapitre.php?lien=" . $chapitre_a_afficher["id_projet"];
        echo "<li><a href='$url_chapitre'>" . $chapitre_a_afficher["nom"] . "</a></li>";
      }
      ?>

    </ul>
  </nav>
</div>

<?php
include "include/footer.php";
?>
