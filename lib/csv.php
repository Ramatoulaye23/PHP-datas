<?php

/**
 * Lit puis retourne le contenu d'un fichier CSV
 *
 * @param string $filename Fichier à lire
 * @return array Tableau contenant les données du fichier
 */
function readCSVFile(string $filename) : array {

    // CRÉER UN TABLEAU DE DATAS VIDE
    $datas = [];

    // SANITY CHECK
    if (!file_exists($filename)) return [];

    // OUVRE LE FICHIER EN LECTURE SEULE
    $handle = fopen($filename, 'r');

    // CHARGE LES DONNÉES DU FICHIER CSV DANS UNe BOUCLE
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

        // AJOUTER LES DONNÉES DE LA LIGNE AUX TABLEAU DE DONNÉES COMPLET
        $datas[] = $data;
    }
    // FERMER LE FICHIER
    fclose($handle);
 
    // RENVOIE LES DONNÉES FINALES
    return $datas;
}