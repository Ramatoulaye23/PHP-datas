<?php


/**
 * Crée une connexion à la BDD
 */
function dbConnect(){
    // TENTATIVE DE CONNEXION À LA BDD
    $dsn = 'mysql:dbname=fr_assos;host=127.0.0.1;port=3306';
    $user = 'root';
    $password = ''; // root sur macos avec mamp
    $password = 'root'; // root sur macos avec mamp

    $database = new PDO($dsn, $user, $password);
    return $database;
}