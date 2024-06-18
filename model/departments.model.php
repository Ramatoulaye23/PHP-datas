<?php
require_once './model/database.php';

/**
 * Renvoie la liste de toutes les Departments en BDD
 *
 * @return array Tableau contenant toutes les Departments
 */
function getAllDepartments() : array {

    // CONNEXION À LA DB

    $database = dbConnect();
    // ECRITURE DU SQL

    // PRÉPARATION DE LA REQUÊTE SQL

    // EXÉCUTION DE LA REQUÊTE

    // RÉCUPÈRE LES DATAS

    // RENVOIE TRUE SI TOUT S'EST BIEN PASSÉ
    return [];
}

/**
 * Renvoie le département spécifiée
 *
 * @param integer $id Id de le département à trouver
 * @return array|false Tableau contenant les données de le département
 */
function getDepartmentById(int $id) : array|false {
    return false;
}

/**
 * Ajoute un département dans la BDD
 *
 * @return boolean true si le département a bien été ajoutée
 */
function addDepartment() : bool {
    return false;
}

/**
 * Met à jour un département dans la BDD
 *
 * @return boolean true si le département a bien été modifiée
 */
function updateDepartment() : bool {
    return false;
}

/**
 * Supprime le département spécifiée
 *
 * @param integer $id Id de le département à trouver
 * @return bool true si le département a bien été supprimée
 */
function deleteDepartment(int $id) : bool {
    return false;
}

