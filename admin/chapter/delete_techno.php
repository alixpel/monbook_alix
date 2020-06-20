<?php
include "../../config.php";
proteger_page();

$requeteDeleteTechno = "DELETE FROM techno WHERE id_techno = $_GET[url_techno_delete]";
$bdd ->query($requeteDeleteTechno);
show_Success("La technologie a été supprimée.");
changeDePage(BOOK_URL_SITE . "admin/chapter/techno_list.php");
exit;
