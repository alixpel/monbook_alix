<?php
include "../../config.php";
proteger_page();

// AJOUTER CHAPITRE :
if(!empty($_POST)) {// si on a cliqué sur valider
  if($_POST["id_techno"] == 0) {// 0 dans hidden
    $query = $bdd -> prepare ("INSERT INTO techno (nom_techno) VALUES (:nom_techno)");
    $query -> execute([
      ":nom_techno" => $_POST["nom_techno"],
    ]);
    $technoID = $bdd -> lastInsertId();
    show_success("La nouvelle technologie $technoID a été ajoutée !");
}
}

changeDePage(BOOK_URL_SITE . "admin/chapter/techno_list.php");
