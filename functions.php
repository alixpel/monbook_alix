<?php
function proteger_page() {
        // fonction qui permet de vérifier que la variable $_SESSION["connected_user"] existe
        // si c'est le cas, nous sommes connecté sinon, on retourne à l'accueil
        // et on ajoute un message d'erreur.
        if(empty($_SESSION["connected_user"])) {
            // je ne suis pas connecté.
            changeDePage(BOOK_URL_SITE . "admin/connexion.php");
        }
}

function html_image($urlImage, $classHtml = "") {
        // on affiche le tag vers l'image seulement si l'image existe.

        if(is_file(BOOK_PATH_SITE .$urlImage)) {
            return "<img src='".RESTO_URL_SITE."/$urlImage' class='$classHtml'>";
        }
        return "";
}

function html_a($text, $lien = "#", $class="", $confirm="") {
        // fabrique la balise <a href></a>

    if($confirm != "") {
        $confirm = "onclick=\"return confirm('$confirm')\"";
    }

    return "<a href='$lien' class='$class' $confirm >$text</a>";
}

// =================================================================
function tousLesChapitres () {
    global $bdd;// va chercher la var en dehors de la fonction
    return $bdd -> query("select * from chapitre order by ordre") -> fetchAll(PDO::FETCH_ASSOC);
}

// FETCH_ASSOC : permet d'associer les noms et pas leurs clés
//
// function tousLesUsers () {
//   global $bdd;
//   return $bdd -> query("select * from user order by id_user") -> fetchAll(PDO::FETCH_ASSOC);
// }
//
// function unMenu ($idMenu) {
//     // retourne toutes les informations du menu qui a comme identifiant $idMenu par exemple unMenu(3)
//     global $bdd;
//
//     $query = $bdd -> prepare("SELECT * FROM menu WHERE id_menu = :maValeurDeMenu"); // :idMenu = étiquette
//     $query -> execute([":maValeurDeMenu" => $idMenu]);
//     return $query -> fetch(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.
// }
