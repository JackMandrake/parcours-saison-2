<?php
require_once '../inc/functions.php';

/* === Exo 1 : Additionner ===
 *
 * C'est le moment d'appliquer nos connaissances sur les fonctions en PHP
 *
 * Rien d'extraordinaire dans la fonction qu'on va vous demander de définir :
 *
 * nom de la fonction : addition
 * but de la fonction : additionner 2 nombres fournis en arguments
 *
 * Exemples :
 * $somme = addition(1, 3); // => $somme sera égal à 4
 * $somme = addition(2, 4); // => $somme sera égal à 6
 * $somme = addition(5, 4); // => $somme sera égal à 9
 *
 * 
 * En bonus
 * 
 * On aimerait pouvoir additionner 3 nombres
 * Tout en laissant la possibilité de vouloir additionner que 2 nombres
 * 
 * Exemples :
 * $somme = addition(1, 3); // => $somme sera égal à 4
 * $somme = addition(1, 3, 1); // => $somme sera égal à 5
 */

function addition ($nombre1, $nombre2, $nombre3 = null) {
    $somme = $nombre1 + $nombre2;
    // En commentaire, on tiens compte du 3ème si celui-ci n'est pas null 
    //if (isset($nombre3)){
    //    $somme += $nombre3;
    //};
    return $somme;
};
// exo1 réussi avec succès 
/** 
 *  pour le bonus, réussi aussi avec l'auto correction, j'ai bien définir ma valeur en nulle
 * par contre, l'utilisation de la variable $nombre3 dans le calcul somme, n'était pas judicieuse, malgré la réussite du bonus
 * j'aurais du y mettre une condition pour qu'il soit utilisé si non null
 * */



/*
 * Tests
 * Pas touche !
 */
check(1);
