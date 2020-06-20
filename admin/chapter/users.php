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
    <h2>Liste des utilisateurs</h2>
    <?php
    $requeteUsers = $bdd->query("SELECT * FROM user");
    $resultUsers = $requeteUsers->fetchAll();
    echo "<div class=\"users_list\">";
    echo "<table><tr>";
    echo "<th>nom</th>";
    echo "<th>identifiant</th>";
    echo "<th>supprimer</th>";
    echo "</tr>";
    foreach ($resultUsers as $key => $user_a_afficher)  {
      echo "<tr>";
      echo "<td>" . $user_a_afficher["nom"] . "</td>";
      echo "<td>" . $user_a_afficher["identifiant"] . "</td>";
      echo "<td><a href=\"delete_user.php?url_user_delete=$user_a_afficher[id_user]\" onclick=\"return confirm('Voulez-vous supprimer cet utilisateur ?')\">supprimer</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
    <!-- &nbsp&nbsp<sub><i class='fas fa-mouse-pointer fa-lg'></i></sub> -->
    <h2>ajouter un utilisateur</h2>
    <form class="add_user" action="add_user.php" method="post">
      <div class="field">
        <label for="nom">nom : </label><input type="text" name="nom" value="">
      </div>
      <div class="field">
        <label for="identifiant">identifiant : </label><input type="text" name="identifiant" value="">
      </div>
      <div class="field">
        <label for="motdepasse">mot de passe</label><input type="password" name="motdepasse" value="">
      </div>
      <input type="submit" value="Envoyer" class="send-button" />
      <a href="<?php echo BOOK_URL_SITE ?>admin/accueil.php" class="cancel-button">Annuler</a>
    </form>
  </div>
</div>


<?php
include "../include/footer.php";
