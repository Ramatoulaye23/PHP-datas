<?php
require_once './lib/strings.php';
require_once './lib/soundex.php';

const REGEX_MATCH_DEPARTMENT_CODE = "/^((0[1-9])|(1[0-9])|(2[AB1-9])|([3-8][0-9])|(9[0-5])|(97[1-8])|(98[46-9]))$/i";
const REGEX_MATCH_DEPARTMENT_NAME = "/^[ôèéàëêâäïçùêa-z]([ôèéàëêâäïçùêa-z]|[- ']){1,}$/i";

const ERROR_DEPARTMENT_CODE      = 1;
const ERROR_DEPARTMENT_NAME      = 2;
const ERROR_DEPARTMENT_UPPERCASE = 4;
const ERROR_DEPARTMENT_SLUG      = 8;
const ERROR_DEPARTMENT_SOUNDEX   = 16;
const ERROR_DEPARTMENT_EMAIL     = 32;
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
    $errorCode = 0;

    // SI LE CODE DÉPARTEMENT N'EST PAS VALIDE ACTIVE LE BIT ASSIGNÉ À L'ERREUR "MAUVAIS CODE DE DEPARTEMENT"
    if(!isValidDepartmentCode($department['code']))
        $errorCode += ERROR_DEPARTMENT_CODE;

    // CODE D'ERREUR SI LE NOM N'EST PAS BON
    if(!isValidDepartmentName($department['name']))
        $errorCode += ERROR_DEPARTMENT_NAME;
    // CODE D'ERREUR SI LE NOM EN CAPITALE N'EST PAS BON
    if(mb_strtoupper($department['name']) != $department['uppercase_name'])
        $errorCode += ERROR_DEPARTMENT_UPPERCASE;

    // CODE D'ERREUR SI LE SLUG N'EST PAS BON 
    if(slugify($department['name']) != $department['slug'])
        $errorCode += ERROR_DEPARTMENT_SLUG;

    // CODE D'ERREUR SI LE SOUNDEX N'EST PAS BON
    if(getSoundex($department['name'], SOUNDEX_LANGUAGE_EN) != $department['soundex'])
        $errorCode += ERROR_DEPARTMENT_SOUNDEX;
    
    // CODE D'ERREUR SI L'EMAIL N'EST PAS BON
    if(!filter_var($department['email'], FILTER_VALIDATE_EMAIL))
        $errorCode += ERROR_DEPARTMENT_EMAIL;

    return $errorCode;
}

/**
 * Dit si la chaine reçue est un numéro de département valide
 *
 * @param string $code Code de département à tester
 * @return boolean true si la chaine est un code de département valide
 */
function isValidDepartmentCode(string $code) : bool {
    return preg_match(REGEX_MATCH_DEPARTMENT_CODE, $code);
}

/**
 * Dit si la chaine reçue est un nom de département valide
 *
 * @param string $name Nom de département à tester
 * @return boolean true si la chaine est un code de nom valide
 */
function isValidDepartmentName(string $name) : bool {
    return preg_match(REGEX_MATCH_DEPARTMENT_NAME, $name);
}

