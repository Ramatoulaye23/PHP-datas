<?php
require_once './lib/strings.php';
require_once './lib/soundex.php';
const REGEX_MATCH_DEPARTMENT_CODE = '/^((0[1-9])|(1[0-9])|(2[AB1-9])|([3-8][0-9])|(9[0-5])|(97[1-8])|(98[46-9]))$/i';

const REGEX_MATCH_DEPARTMENT_NAME ="/^[ôèéàëêâäïçùêa-z]([ôèéàëêâäïçùêa-z]|[- ']){1,}$/i";

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

    return preg_match(REGEX_MATCH_DEPARTMENT_CODE , $code);
}

/**
 * Dit si la chaine reçue est un nom de département valide
 *
 * @param string $name Nom de département à tester
 * @return boolean true si la chaine est un code de nom valide
 */
function isValidDepartmentName(string $name) : bool {
 return preg_match(REGEX_MATCH_DEPARTMENT_NAME , $name);// preg_match donne 1 si c'est vrai 0 si c'est faux et false s il ya une erreur sur le regex
}

