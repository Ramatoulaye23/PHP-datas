<?php
/**
 * Ce fichier contient des fonctions relatives aux soundex
 */

 /**
  * Renvoie le soundex du texte fourni 
  *
  * @param string $original Texte à convertir en soundex
  * @param string $format Format de soundex voulu
  * @return string Chaîne soundex du texte fourni
  */
 function getSoundex(string $original, string $format = 'en') : string {

    // 1 - SUPPRIMER LES ESPACES

    // 2 - METTRE TOUT EN CAPITALES

    // 1.5 - SUPPRIMER TOUT CE QUI N'EST PAS ENTRE A et Z

    // 3 - GARDER LA PREMIÈRE LETTRE (variable)

    // 3.5 - SUPPRIMER LA PREMIÈRE LETTRE

    // 4 - SUPPRIMER LES VOYELLES ET MUETTES (A, E, I, O, U, Y, H, W)

    // 5 - ATTRIBUER UN NOMBRE AU CONSONNES RESTANTES
    // 5.1 - EN ANGLAIS :
    // 1 = B, F, P, V
    // 2 = C, G, J, K, Q, S, X, Z
    // 3 = D, T
    // 4 = L
    // 5 = M, N
    // 6 = R

    // 5.2 - EN FANÇAIS :
    // 1 = B, P
    // 2 = C, K, Q
    // 3 = D, T
    // 4 = L
    // 5 = M, N
    // 6 = R
    // 7 = G, J
    // 8 = X, Z, S
    // 9 = F, V



    // 6 - RETIRER LES DOUBLONS EX : 55 => 5 ou 777 => 7



    // 7 - REMETTRE LA PREMIÈRE LETTRE DEVANT LES AUTRES


    // 8 - SI ON A PAR AU MOINS 4 CARACTÈRES, REMPLIR AVEC DES 0

    // 9 - RENVOIE LE RÉSULTAT FINAL
    return '';
 }