<?php
require_once './lib/strings.php';
require_once './lib/soundex.php';

/**
 * Contient des fonction de validation de données
 */

/**
 * Valide un département et retourne un code d'erreur si au moins une colonne
 * n'est pas conform
 *
 * @param array $department Tableau représentant le département
 * @return integer 0 si tout va bien, ou un integer en cas d'erreur (masque binaire)
 */
function validateDepartment(array $department) : int {

    // INITIALISATION À OK


    // SI LE CODE DÉPARTEMENT N'EST PAS VALIDE ACTIVE LE BIT ASSIGNÉ À L'ERREUR "MAUVAIS CODE DE DEPARTEMENT"

    // CODE D'ERREUR SI LE NOM N'EST PAS BON

    // CODE D'ERREUR SI LE NOM EN CAPITALE N'EST PAS BON

    // CODE D'ERREUR SI LE SLUG N'EST PAS BON

    // CODE D'ERREUR SI LE SOUNDEX N'EST PAS BON

    // CODE D'ERREUR SI L'EMAIL N'EST PAS BON
    
    return 0;
}

/**
 * Dit si la chaine reçue est un numéro de département valide
 *
 * @param string $code Code de département à tester
 * @return boolean true si la chaine est un code de département valide
 */
function isValidDepartmentCode(string $code) : bool {
    return false;
}

/**
 * Dit si la chaine reçue est un nom de département valide
 *
 * @param string $name Nom de département à tester
 * @return boolean true si la chaine est un code de nom valide
 */
function isValidDepartmentName(string $name) : bool {
    return false;
}

