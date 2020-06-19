<?php
include "../../config.php";
proteger_page();

if(!isset($_GET["chapitreASupprimer"])) {
    ajouterErreur("Choisir le chapitre à supprimer.");
} else {
    $bdd -> query("DELETE FROM chapter WHERE id_projet = " . $_GET["chapitreASupprimer"]);
    show_Success("Le chapitre a été supprimé.");
}

changeDePage(BOOK_URL_SITE . "admin/chapter/chapter_list.php");
