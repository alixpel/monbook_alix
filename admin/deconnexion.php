<?php

include "../config.php";

unset($_SESSION["connected_user"]);
// destruction de la variable
changeDePage( BOOK_URL_SITE . "/admin/connexion.php");
