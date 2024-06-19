<?php

// CHARGEMENT DES LIBRAIRIES
require_once 'lib/debug.php';
require_once 'lib/csv.php';
require_once 'lib/xml.php';

// CHARGEMENT DU MODÈLE
require_once './model/associations.model.php';

// CHARGE LES ASSOCIATIONS DEPUIS LE CSV
$datas = readCSVFile('./_datas/rna_import_20230602_dpt_01.csv');

// INITIALISER COMPTEUR À 0
$counter = 0;

// RETIRE LA PREMIÈRE LIGNE DES DATAS
array_shift($datas);

// POUR CHAQUE ASSOCIATION
foreach($datas as $association){
        
        // SI AJOUTER L'ASSOCIATION À LA DATABASE
        if (addAssociation(     $association[1], 
                                $association[8], 
                                $association[9], 
                                $association[12],
                                $association[13],
                                $association[14],
                                $association[15],
                                $association[16]) == true) {

                // INCRÉMENTER COMPTEUR 
                $counter++;
        // FIN SI
        }
       
// FIN POUR
}

// AFFICHER MESSAGE " n associations ont été importé avec succès."
