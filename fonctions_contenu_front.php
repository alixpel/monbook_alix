<?php
// ==============================================================================
function tousLesChapitres () {
    // retourne tous les menus
    global $bdd;// va chercher la var en dehors de la fonction
    return $bdd -> query("select * from chapter order by id_user") -> fetchAll(PDO::FETCH_ASSOC);
}
// ==============================================================================
// FETCH_ASSOC : permet d'associer les noms et pas leurs clés

function tousLesUsers () {
  global $bdd;
  return $bdd -> query("select * from user order by id_user") -> fetchAll(PDO::FETCH_ASSOC);
}
// ==============================================================================
function unChapitre ($idChapitre) {
    // retourne toutes les informations du chap qui a comme identifiant $idChapter par exemple unChapitre(3)
    global $bdd;
    $query = $bdd -> prepare("SELECT * FROM chapter WHERE id_projet = :idProjet");
    $query -> execute([":idProjet" => $idChapitre]);
    return $query -> fetch(PDO::FETCH_ASSOC); // on utilise fetch et non fetchAll car nous souhaitons retourner un seul résultat.
}
// ==============================================================================
