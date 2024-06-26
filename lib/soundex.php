<?php
/**
 * Ce fichier contient des fonctions relatives aux soundex
 */

 const REGEX_CATCH_SOUNDEX_UNWANTED = '/[^A-Z]/';
 const SOUNDEX_LANGUAGE_EN = 'en';
 const SOUNDEX_LANGUAGE_FR = 'fr';

 /**
  * Renvoie le soundex du texte fourni 
  *
  * @param string $original Texte à convertir en soundex
  * @param string $format Format de soundex voulu
  * @return string Chaîne soundex du texte fourni
  */
 function getSoundex(string $original, string $format = SOUNDEX_LANGUAGE_EN) : string {

   // 1 - SUPPRIMER LES ESPACES
   $final = str_replace(' ', '', $original);

   // 2 - METTRE TOUT EN CAPITALES
   $final = strtoupper($final);

   // 1.5 - SUPPRIMER TOUT CE QUI N'EST PAS ENTRE A et Z
   $final = preg_replace(REGEX_CATCH_SOUNDEX_UNWANTED, '', $final);

   // 3 - GARDER LA PREMIÈRE LETTRE (variable)
   $firstLetter = $final[0];

   // 3.5 - SUPPRIMER LA PREMIÈRE LETTRE
   $final = substr($final, 1);

   // 4 - SUPPRIMER LES VOYELLES ET MUETTES (A, E, I, O, U, Y, H, W)
   $final = str_replace(['A', 'E', 'I', 'O', 'U', 'Y', 'H', 'W'], '', $final);

   // 5 - ATTRIBUER UN NOMBRE AU CONSONNES RESTANTES
   // 5.1 - EN ANGLAIS :
   if ($format == SOUNDEX_LANGUAGE_EN) {
      $enLetters = str_split('BFPVCGJKQSXZDTLMNR');
      $enNumbers = str_split('111122222222334556');
      $final = str_replace($enLetters, $enNumbers, $final);
   }
   // 1 = B, F, P, V
   // 2 = C, G, J, K, Q, S, X, Z
   // 3 = D, T
   // 4 = L
   // 5 = M, N
   // 6 = R

   // 5.2 - EN FANÇAIS :
   if ($format == SOUNDEX_LANGUAGE_FR) {
      $frLetters = str_split('BPCKQDTLMNRGJXZSFV');
      $frNumbers = str_split('112223345567788899');
      $final = str_replace($frLetters, $frNumbers, $final);
   }   
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
   $result   = '';
   $previous = '';
   // POUR CHAQUE CARACTÈRE DANS LA CHAINE FINALE
   foreach(str_split($final) as $letter){

      // SI LE CARACTÈRE EST DIFFÉRENT DU PRÉCÉDENT
      if ($letter != $previous){

         // AJOUTER CE CARACTÈRE AU RÉSULTAT
         $result .= $letter;

         // PRENDRE SE CARACTÈRE COMME "PREVIOUS" POUR LA PROCHAINE COMPARAISON
         $previous = $letter;
      }
   }
   
   // 7 - REMETTRE LA PREMIÈRE LETTRE DEVANT LES AUTRES
   $final = $firstLetter . $result;
   
   // 8 - SI ON A PAS AU MOINS 4 CARACTÈRES, REMPLIR AVEC DES 0
   $final = str_pad($final, 4, '0');

   // 9 - RENVOIE LE RÉSULTAT FINAL
   return $final;
 }