<?php
// CHARGEMENT DES LIBRAIRIES
require_once './lib/debug.php';
require_once './lib/bootstrap.php';
require_once './lib/validation.php';
require_once './lib/soundex.php';

// CHARGEMENT DU MODEL
require_once './model/departments.model.php';

// RÉCUPÉRATION DES DÉPARTEMENTS
$departments = getAllDepartments();

//  POUR CHAQUE DÉPARTEMENT
    
for ($i=0; $i < count($departments); $i++) { 


if(!filter_var($departments[email]))
//  }
    // ICI, IL FAUT VALIDER CHAQUE DATA DU DÉPARTEMENT
    $errorCode = validateDepartement($departments[$i]);

    // CRÉATION DES CLASSES DE CHAQUE COLONNE


//initiation a ok
    $errorCode = 0;
    // SI ON A UNE ERREUR SUR LE CODE, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU CODE


    // SI ON A UNE ERREUR SUR LE NAME, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU NAME

    // SI ON A UNE ERREUR SUR LE UPPERCASE NAME, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU UPPERCASE NAME

    // SI ON A UNE ERREUR SUR LE SLUG, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU SLUG

    // SI ON A UNE ERREUR SUR LE SOUNDEX, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU SOUNDEX

    // SI ON A UNE ERREUR SUR L'EMAIL, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DE L'EMAIL


    if (!filter_var($departments[`email`], FILTER_VALIDATE_EMAIL)) return
        # code...

    // AJOUTER (OU PAS) UNE CLASSE CSS AU DÉPARTEMENT ACTUEL

    // AJOUTER LE SOUNDEX ATTENDU

}
// CRÉATION DU TITRE
$title = 'Liste des départements de France';

//d($departments);

// CHARGEMENT DU TEMPLATE
require_once ('./templates/departments.phtml');