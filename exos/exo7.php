<?php

/**
 * Pas touche ! 
 */
require_once '../inc/functions.php';

/**
 * 
 * Voilà le plan : Il va falloir coder un petit programme permettant de générer une grille de 5 numéros du loto choisis aléatoirement.
 * Les numéros sont compris entre 1 et 49 et il faudra aussi ajouter le numéro complémentaire compris entre 1 et 10 !
 * On veut obtenir ces numéros dans un tableau, par exemple : [45, 5, 1, 13, 28].
 * 
 * Il faudra stocker le résultat dans un array $grilleLoto.
 * 
 */

// c'est parti !

function numerosLoto() {

    // préparer la liste des nombres (vide)
    
    // tant qu'on a pas 5 nombres dans notre liste
    
        // on tire un nombre au hasard entre 1 et 49
        
        // s'il n'est pas déjà dans la liste (voir plus bas)
        
            // on l'ajoute à la liste
    
    // on recommence

    // on ajoute un nombre au hasard entre 1 et 10 (numéro complémentaire)

    // retourner la liste
}
 

////// Déterminer si un numéro est déjà dans la liste //////
// En entrée, on aura besoin de la liste et du nombre à rechercher
function isAlreadyInList() {
    // pour chaque nombre dans la liste

    // s'il y a égalité entre le nombre de la liste et le nombre qu'on veut ajouter

        // alors le nombre est déjà dans la liste

    // sinon le nombre n'est pas dans la liste
}    

/** 
 * Tests
 * Pas touche !
 */
check(7, 'numerosLoto');
