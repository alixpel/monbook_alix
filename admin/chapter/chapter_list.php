<?php
include "../config.php";
include "include/header.php";

proteger_page();

?>

<h2>Liste des chapitres</h2>

<?php
show_error();
show_success();
?>

<div class="chapter">
  <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a>
  <a href="<?php echo BOOK_URL_SITE ?>admin/chapter/chapter_form.php">Ajouter un chapitre</a>
</div>

<div class="list">
  <?php
    $results = $dataBase -> query("SELECT * FROM chapter order by id_projet") -> fetchAll();
    if(count($results) == 0) {
        echo "Aucun chapitre";
    } else {
        echo "<ul>";
      foreach($results as $result) {
        $lienModifier = html_a("Modifier", BOOK_URL_SITE . "admin/chapter/chapter_form.php?chapitreAAfficher=$result[id_projet]");
        $lienSupprimer = html_a("Supprimer", BOOK_URL_SITE . "admin/chapter/chapter_delete.php?chapitreASupprimer=$result[id_projet]", "alert", "Effacer ce chapitre ?");
        echo "<li>$result[nom]  ( $lienModifier | $lienSupprimer)</li>";
      }
      echo "</ul>";
    }
  ?>

</div>

<?php include "include/footer.php"; ?>
