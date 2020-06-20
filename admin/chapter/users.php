<?php
include "../../config.php";
include "../include/header.php";

proteger_page();


?>
<div class="users">
  <h2>Liste des utilisateurs</h2>
  <?php
  $requeteUsers = $bdd->query("SELECT * FROM user");
  $resultUsers = $requeteUsers->fetchAll();
  echo "<div class=\"users_list\">";
  echo "<table><tr>";
  echo "<th>nom</th>";
  echo "<th>identifiant</th>";
  echo "</tr>";
  foreach ($resultUsers as $key => $user_a_afficher)  {
    echo "<tr>";
    echo "<td>" . $user_a_afficher["nom"] . "</td>";
    echo "<td>" . $user_a_afficher["identifiant"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
  ?>
</div>


<?php
include "../include/footer.php";
