<?php
include "../../config.php";
proteger_page();

$requeteDelete = "DELETE FROM user WHERE id_user = $_GET[url_user_delete]";
$bdd ->query($requeteDelete);
show_Success("L'utilisateur' a été supprimé.");
changeDePage(BOOK_URL_SITE . "admin/chapter/users.php");
exit;
