<?php
include "../config.php";
//include "header.php"
 ?>

<nav>
  <ul>
    <li>
      <a href="<?php BOOK_PATH_SITE ?>../accueil.php">Accueil</a>
    </li>
      <?php /*foreach( tousLesChapitres() as $chapitre ) {
        echo "<li>";
        echo html_a($chapitre["nom"], BOOK_URL_SITE . "chapitre.php?chapitreAAfficher=$chapitre[id_projet]");
        echo "</li>";
      }*/
      $requeteChapitres = $bdd->query("SELECT * FROM chapter");
      $resultChapitres = $requeteChapitres->fetchAll();

      echo "<h2>Les projets</h2>";
      foreach ($resultChapitres as $key => $chapitre_a_afficher)  {
        $url_chapitre = "page_chapitre.php?lien=" . $chapitre_a_afficher["id_projet"];
        echo "<a href='$url_chapitre'>Titre : " . $chapitre_a_afficher["nom"] . "</a><br>";
      }
      ?>

  </ul>
</nav>

<?php
//include "footer.php";
?>
