<?php
require_once './model/database.php';

/**
 * Renvoie la liste de toutes les associations en BDD
 *
 * @return array Tableau contenant toutes les associations
 */
function getAllAssociations() : array{
    return [];
}

/**
 * Renvoie l'association spécifiée
 *
 * @param integer $id Id de l'association à trouver
 * @return array|false Tableau contenant les données de l'association
 */
function getAssociationById(int $id) : array|false {
    return false;
}

/**
 * Renvoie l'association spécifiée par son id_ex
 *
 * @param integer $id_ex Id de l'association à trouver
 * @return array|false Tableau contenant les données de l'association
 */
function getAssociationByIdEx(int $id_ex) : array|false {
    return false;
}

/**
 * Ajoute une association dans la BDD
 *
 * @return boolean true si l'association a bien été ajoutée
 */
function addAssociation(string $id_ex, 
                        string $name, 
                        string $object, 
                        string $address1,
                        string $address2,
                        string $address3,
                        string $zip,
                        string $city) : bool {

    d("Demande d'ajout de $name");
    // CONNEXION À LA DB
    $database = dbConnect();

    // ECRITURE DU SQL
    $SQL = "INSERT INTO `associations` 
                    (`id_ex`, `name`, `object`, `address1`, `address2`, `address3`, `zip`, `city`) 
            VALUES  (:id_ex, :name, :object, :address1, :address2, :address3, :zip, :city)";
  
    // PRÉPARATION DE LA REQUÊTE SQL
    $query = $database->prepare($SQL);

    // EXÉCUTION DE LA REQUÊTE
    $success = $query->execute([
        ':id_ex'    => $id_ex,
        ':name'     => $name,
        ':object'   => $object,
        ':address1' => $address1,
        ':address2' => $address2,
        ':address3' => $address3,
        ':zip'      => $zip,
        ':city'     => $city,
    ]);
     
    // RENVOIE TRUE SI TOUT S'EST BIEN PASSÉ
    return $success;
}


/**
 * Met à jour une association dans la BDD
 *
 * @return boolean true si l'association a bien été modifiée
 */
function updateAssociation() : bool {
    return false;
}

/**
 * Supprime l'association spécifiée
 *
 * @param integer $id Id de l'association à trouver
 * @return bool true si l'association a bien été supprimée
 */
function deleteAssociation(int $id) : bool {
    return false;
}

