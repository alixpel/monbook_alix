<?php
// Cette page reçoit les informations du formulaire qui se trouve sur form_accueil.php
include "../../config.php";
proteger_page(); // on ne peut pas acceder à la page sans être connecté.
if(!empty($_POST)) {// si on a cliqué sur valider
  // on construit la requête
  if($_POST["id_projet"] == 0) {// 0 dans hidden
    // je n'envoie pas d'ID donc je dois ajouter un nouveau menu
    // on aurait pu faire comme ça mais l'écriture est difficile à comprendre et moins sécurisé.
    //$bdd -> query ("INSERT INTO menu (nom, titre, entree, plat, dessert, ordre) VALUES ('$_POST[nom]', '$_POST[titre]' , '$_POST[entree]', '$_POST[plat]', '$_POST[dessert]', '$_POST[ordre]')");
    $query = $bdd -> prepare ("INSERT INTO chapter (nom, techno_id, client, lien, texte, page) VALUES (:nom, :techno_id , :client , :lien , :texte , :page )");
    $query -> execute([
      ":nom" => $_POST["nom"],
      ":techno_id" =>  $_POST["techno_id"],
      ":client" =>  $_POST["client"],
      ":lien" => $_POST["lien"],
      ":texte" =>  $_POST["texte"],
      ":page" =>  $_POST["page"],
    ]);
    $chapterID = $bdd -> lastInsertId(); // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
    ajouterSuccess("Nous avons ajouté un nouveau chapitre, il a comme identifiant $chapterID");
} else {
    // un id est envoyé alors je modifie un enregistrement.
    $query = $bdd -> prepare ("UPDATE chapter SET
                                        nom = :nom,
                                        techno_id = :techno_id,
                                        client = :client,
                                        lien = :lien,
                                        texte = :texte,
                                        page = :page
                                        WHERE id_projet = :idProjet");
    $query -> execute(
      [
        ":nom" => $_POST["nom"],
        ":titre" =>  $_POST["titre"],
        ":entree" =>  $_POST["entree"],
        ":plat" => $_POST["plat"],
        ":dessert" =>  $_POST["dessert"],
        ":ordre" =>  $_POST["ordre"],
        ":idMenu" => $_POST["id_projet"],
      ]
    );
    $menuID = $_POST["id_projet"]; // lastInsertId Retourne l'identifiant de la dernière ligne insérée en base. ici, c'est l'ID du menu que nous venons tout juste d'ajouter dans la base.
    ajouterSuccess("Nous avons modifié le chapitre");
  }
}
if(!empty($_FILES)) {
  enregistrerFichier($_FILES["imageChapitre"],  "img/chapter_img/$chapterID.jpg");
}
changeDePage(BOOK_URL_SITE . "admin/chapter/chapter_list.php");
