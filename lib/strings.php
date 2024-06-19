<?php
/**
 * Ce fichier contient des fonctions de manipulation de chaînes
 */
const REGEX_CATCH_SLUG_UNWANTED = '/[^a-z0-9-]/';

function slugify(string $original) : string {

    // 1 - METTRE EN LOWER CASE
    $final = strtolower($original);

    // 2 - RETIRER TOUS LES ACCENTS (ATTENTION IL FAUT REMPLACER PAR LA LETTRE SANS ACCENT)
    // 3 - REMPLACE LES ESPACES PAR DES TIRETS
    $final = str_replace(
        ['à', 'â', 'é', 'è', 'ê', 'ë', 'ù', 'û', 'ü', 'ô', 'ö', 'î', 'ï', ' '],
        ['a', 'a', 'e', 'e', 'e', 'e', 'u', 'u', 'u', 'o', 'o', 'i', 'i', '-'],
        $final
    );
    
    // 4 - RETIRE TOUS LES CARACTÈRES SPÉCIAUX (pas a-z 0-9 et -)
    $final = preg_replace(REGEX_CATCH_SLUG_UNWANTED, '', $final);

    return $final;
 }