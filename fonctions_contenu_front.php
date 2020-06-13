<?php

function tousLesMenus () {
    // retourne tous les menus
    global $bdd;// va chercher la var en dehors de la fonction
    return $bdd -> query("select * from menu order by ordre") -> fetchAll(PDO::FETCH_ASSOC);
}

// FETCH_ASSOC : permet d'associer les noms et pas leurs clés

function tousLesUsers () {
  global $bdd;
  return $bdd -> query("select * from user order by id_user") -> fetchAll(PDO::FETCH_ASSOC);
}

function unMenu ($idMenu) {
    // retourne toutes les informations du menu qui a comme identifiant $idMenu par exemple unMenu(3)
    global $bdd;

    $query = $bdd -> prepare("SELECT * FROM menu WHERE id_menu = :maValeurDeMenu"); // :idMenu = étiquette
    $query -> execute([":maValeurDeMenu" => $idMenu]);
    return $query -> fetch(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.
}
