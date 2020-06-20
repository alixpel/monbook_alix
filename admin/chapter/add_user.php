<?php
include "../../config.php";
proteger_page();

// AJOUTER CHAPITRE :
if(!empty($_POST)) {// si on a cliqué sur valider
  if($_POST["id_projet"] == 0) {// 0 dans hidden
    $query = $bdd -> prepare ("INSERT INTO user (nom, identifiant, motdepasse) VALUES (:nom, :identifiant , :motdepasse)");
    $query -> execute([
      ":nom" => $_POST["nom"],
      ":identifiant" =>  $_POST["identifiant"],
      ":motdepasse" =>  $_POST["motdepasse"],
    ]);
    $userID = $bdd -> lastInsertId();
    show_success("Le nouvel utilisateur $usererID a été ajouté.");
}
}

changeDePage(BOOK_URL_SITE . "admin/chapter/users.php");
