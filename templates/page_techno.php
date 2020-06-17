<?php
include "../config.php";
include "include/header.php";

$requeteTechno = $bdd->query("SELECT * FROM chapter, techno, chapter_techno
WHERE chapter.id_projet = chapter_techno.projet_id
AND techno.id_techno = chapter_techno.techno_id
AND techno.nom_techno = '$_GET[lien]'");

$resultat_liste_techno = $requeteTechno->fetchAll();
var_dump($resultat_liste_techno);

// var_dump($requeteTechno);

// if($_GET["lien"] > count($resultTechno)) {
//   header("location:nav_chapitres.php");
//   exit;
// }


?>
<?php include "include/footer.php"; ?>
