<?php

/**
 * Lit puis retourne le contenu d'un fichier CSV
 *
 * @param string $filename Fichier à lire
 * @return array Tableau contenant les données du fichier
 */
function readCSVFile(string $filename) : array {
    // CREER UN TABLEAU VIDE
    $datas = [];
// sanity check
if (!file_exists($filename)) return [];


    // OUVRE LE FICHIER EN LECTURE SEULE
    $filename = './_datas/rna_import_20230602_dpt_01.csv';
    $handle = fopen($filename, 'r');


    // CHARGE LES DONNÉES DU FICHIER CSV DANS UNE BOUCLE
    while (($data = fgetcsv ($handle,1000,";"))  !== false) {


      // ajouter les données de la ligne au tableau donnée
      $datas[] = $data;
    }
    // FERMER LE FICHIER

    fclose($handle);
    // RENVOIE LES DONNÉES FINALES
    return $datas;
}
