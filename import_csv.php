<?php

// CHARGEMENT DES LIBRAIRIES
require_once 'lib/debug.php';
require_once 'lib/csv.php';
require_once 'lib/xml.php';
//connexion DB


// CHARGEMENT DU MODÈLE
require_once './model/associations.model.php';

// CHARGE LES ASSOCIATIONS DEPUIS LE CSV


 $datas= readCSVFile('./_datas/rna_import_20230602_dpt_01.csv');//_datas car ne doit pas etre sur github le fichier vindor aussi ne doit pas y etre car trop lourd
//d($datas);

 // INITIALISER COMPTEUR À 0
 $counter = 0;
 //enlever la première ligne
array_shift($datas);
// POUR CHAQUE ASSOCIATION
foreach ($datas as $association ) {
 
        // SI AJOUTER L'ASSOCIATION À LA DATABASE
     if (addAssociation (
        $association [1],  
        $association[8], 
        $association[9],  
        $association[12], 
        $association [13],
        $association [14],
        $association [13],
        $association [14],
        $association [15],
        $association [16],
        $association [17]) == true ) {
                // incrementer le compteur
                $counter ++;
   

}}


        // INCRÉMENTER COMPTE UR 

        // FIN SI
       
// FIN POUR

// AFFICHER MESSAGE " n associations ont été importé avec succès."
$datacsv = './_datas/rna_import_20230602_dpt_01.csv';
d(readCSVFile($datacsv));