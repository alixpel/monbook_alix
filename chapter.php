<?php
include "config.php";

$chapitre_a_afficher = unMenu($_GET["chapitreAAfficher"]);

include PATH_TEMPLATE . "page_chapitre.php";
