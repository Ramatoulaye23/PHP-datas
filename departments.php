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

    // ICI, IL FAUT VALIDER CHAQUE DATA DU DÉPARTEMENT
    $errorCode = validateDepartment($departments[$i]);

    // CRÉATION DES CLASSES DE CHAQUE COLONNE
    $departments[$i]['col-classes'] = [];

    // SI ON A UNE ERREUR SUR LE CODE, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU CODE
    $departments[$i]['col-classes']['code'] = (($errorCode & ERROR_DEPARTMENT_CODE) == ERROR_DEPARTMENT_CODE) ? 'table-danger' : '';

    // SI ON A UNE ERREUR SUR LE NAME, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU NAME
    $departments[$i]['col-classes']['name'] = (($errorCode & ERROR_DEPARTMENT_NAME) == ERROR_DEPARTMENT_NAME) ? 'table-danger' : '';
    
    // SI ON A UNE ERREUR SUR LE UPPERCASE NAME, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU UPPERCASE NAME
    $departments[$i]['col-classes']['uppercase'] = (($errorCode & ERROR_DEPARTMENT_UPPERCASE) == ERROR_DEPARTMENT_UPPERCASE) ? 'table-danger' : '';

    // SI ON A UNE ERREUR SUR LE SLUG, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU SLUG
    $departments[$i]['col-classes']['slug'] = (($errorCode & ERROR_DEPARTMENT_SLUG) == ERROR_DEPARTMENT_SLUG) ? 'table-danger' : '';

    // SI ON A UNE ERREUR SUR LE SOUNDEX, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DU SOUNDEX
    $departments[$i]['col-classes']['soundex'] = (($errorCode & ERROR_DEPARTMENT_SOUNDEX) == ERROR_DEPARTMENT_SOUNDEX) ? 'table-danger' : '';

    // SI ON A UNE ERREUR SUR L'EMAIL, METTRE LA CLASSE CSS DANGER SUR LA COLONNE DE L'EMAIL
    $departments[$i]['col-classes']['email'] = (($errorCode & ERROR_DEPARTMENT_EMAIL) == ERROR_DEPARTMENT_EMAIL) ? 'table-danger' : '';

    // AJOUTER (OU PAS) UNE CLASSE CSS AU DÉPARTEMENT ACTUEL
    $departments[$i]['css-class'] = $errorCode ? 'table-warning' : '';

    // AJOUTER LE SOUNDEX ATTENDU
    $departments[$i]['expected_soundex'] = getSoundex($departments[$i]['name'], SOUNDEX_LANGUAGE_EN);
}

// CRÉATION DU TITRE
$title = 'Liste des départements de France';

//d($departments);

// CHARGEMENT DU TEMPLATE
require_once ('./templates/departments.phtml');