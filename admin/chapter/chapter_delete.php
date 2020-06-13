<?php
// Quand on a cliqué sur le lien "supprimer" dans la liste des chapitress.
include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!isset($_GET["chapitreASupprimer"])) { // on verifie que nous avons bien l'identifiant de notre chap à supprimer.
    ajouterErreur("Merci de choisir le chapitre à supprimer.");
} else {
    // on a l'identifiant, nous supprimons le chap
    $bdd -> query("DELETE FROM chapter WHERE id_projet = " . $_GET["chapitreASupprimer"]);
    ajouterSuccess("Le chapitre a été supprimé.");

}

changeDePage(BOOK_URL_SITE . "admin/chapter/chapter_list.php");
