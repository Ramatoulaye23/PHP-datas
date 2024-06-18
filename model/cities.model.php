<?php

/**
 * Renvoie la liste de toutes les Cities en BDD
 *
 * @return array Tableau contenant toutes les Cities
 */
function getAllCities() : array{
    return [];
}

/**
 * Renvoie la ville spécifiée
 *
 * @param integer $id Id de la ville à trouver
 * @return array|false Tableau contenant les données de l'City
 */
function getCityById(int $id) : array|false {
    return false;
}

/**
 * Ajoute une ville dans la BDD
 *
 * @return boolean true si la ville a bien été ajoutée
 */
function addCity() : bool {
    return false;
}

/**
 * Met à jour une ville dans la BDD
 *
 * @return boolean true si la ville a bien été modifiée
 */
function updateCity() : bool {
    return false;
}

/**
 * Supprime la ville spécifiée
 *
 * @param integer $id Id de la ville à trouver
 * @return bool true si la ville a bien été supprimée
 */
function deleteCity(int $id) : bool {
    return false;
}

