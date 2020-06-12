<?php
// Cette page reçoit les informations du formulaire qui se trouve sur form.php

include "../../config.php";

proteger_page();

if(!empty($_POST)) {
enregistreValeur("TITRE_ACCUEIL", $_POST["titre"]);
enregistreValeur("TEXTE_ACCUEIL", $_POST["texteAccueil"]);
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageAccueil"],  "img/accueil.jpg");
}

ajouterSuccess("Nous avons enregistré la page d'accueil");

changeDePage(BOOK_URL_SITE . "admin/accueil.php");
