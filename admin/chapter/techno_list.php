<?php
include "../../config.php";
include "../include/header.php";

proteger_page();


?>
<div class="user_page">
  <div class="chapter">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php">Retour à l'accueil&nbsp&nbsp<sub><i class='fas fa-mouse-pointer fa-lg'></i></sub></a>
  </div>
  <div class="users">
    <h2>Liste des technologies</h2>
    <?php
    $requeteTechnos = $bdd->query("SELECT * FROM techno");
    $resultTechnos = $requeteTechnos->fetchAll();
    echo "<div class=\"techno_list\">";
    echo "<table><tr>";
    echo "<th>nom</th>";
    echo "<th>supprimer</th>";
    echo "</tr>";
    foreach ($resultTechnos as $key => $techno_a_afficher)  {
      echo "<tr>";
      echo "<td>" . $techno_a_afficher["nom_techno"] . "</td>";
      echo "<td><a href=\"delete_techno.php?url_techno_delete=$techno_a_afficher[id_techno]\" onclick=\"return confirm('Voulez-vous supprimer cette technologie ?')\" class=\"delete_link\">supprimer</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
    <!-- &nbsp&nbsp<sub><i class='fas fa-mouse-pointer fa-lg'></i></sub> -->
    <h2>ajouter une technologie</h2>
    <form class="add_techno" action="add_techno.php" method="post">
      <div class="field">
        <label for="nom_techno">nom : </label><input type="text" name="nom_techno" value="">
      </div>
      <hr>
      <input type="submit" value="Envoyer" class="send-button" />
      <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php" class="cancel-button">Annuler</a>
    </form>
  </div>
</div>


<?php
include "../include/footer.php";
