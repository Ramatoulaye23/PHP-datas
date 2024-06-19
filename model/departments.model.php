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
            departement_nom_uppercase AS uppercase_name ,

    // ECRITURE DU SQL
    $SQL = "SELECT  `departement_id` AS `id`, 
                    `departement_code` AS `code`, 
                    `departement_nom`  AS `name`, 
                    `departement_nom_uppercase` AS `uppercase_name`, 
                    `departement_slug` AS `slug`, 
                    `departement_nom_soundex` AS `soundex`, 
                    `departement_email` AS `email` FROM `departements`;";

    // PRÉPARATION DE LA REQUÊTE SQL
    $query = $database->prepare($SQL);

    // EXÉCUTION DE LA REQUÊTE
    $query->execute();

    // RÉCUPÈRE LES DATAS
    $datas = $query->fetchAll();

    // RENVOIE TRUE SI TOUT S'EST BIEN PASSÉ
    return $datas;
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

