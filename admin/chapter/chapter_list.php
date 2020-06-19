<?php
include "../../config.php";
include "../include/header.php";

proteger_page();

show_error();
show_success();
?>

<div class="main">
  <h2>Liste des chapitres</h2>
  <div class="chapter">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php">Retour à l'accueil</a><span>&nbsp&nbsp&nbsp|&nbsp&nbsp</span>
    <a href="<?php echo BOOK_URL_SITE ?>admin/chapter/chapter_form.php">Ajouter un chapitre</a>
  </div>
  <div class="list_paragraph">
    <div class="yellow_line">

    </div>
    <div class="list">
      <?php
        $results = $bdd -> query("SELECT * FROM chapter order by id_projet") -> fetchAll();
        if(count($results) == 0) {
            echo "Aucun chapitre";
        } else {
            echo "<ul>";
          foreach($results as $result) {
            $lienModifier = html_a("Modifier", BOOK_URL_SITE . "admin/chapter/chapter_form.php?chapitreAAfficher=$result[id_projet]");
            $lienSupprimer = html_a("Supprimer", BOOK_URL_SITE . "admin/chapter/chapter_delete.php?chapitreASupprimer=$result[id_projet]", "alert", "Effacer ce chapitre ?");
            echo "<li>$result[nom] &nbsp<i class=\"fas fa-ellipsis-h\"></i>&nbsp ( $lienModifier | $lienSupprimer)</li>";
          }
          echo "</ul>";
        }
      ?>
    </div>
  </div>
</div>

<?php include "../include/footer.php"; ?>
