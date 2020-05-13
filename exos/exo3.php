<?php
require_once '../inc/functions.php';

/* === Exo 3 : Addition rotative ===
 *
 * 
 * Imagine un tourbillon, que dis-je ? Une tornade d'additions !
 * Qui irait toujours plus haut, toujours plus loin... Wow ! ヽ(´▽`)/ 
 * 
 * Malheureusement, en programmation, nous sommes obligé de toujours prévoir une fin
 * Au risque de casser la machine à tourbillons ¯\_(ツ)_/¯
 * 
 * 
 * Ta mission est donc la suivante :
 * -- Construis une fonction qui additionne tous les nombres
 * compris entre une valeur minimum et une valeur maximum 
 * un à un.
 *
 * Par exemple :
 *   addRotative(4,10) doit renvoyer 49 (= 4 + 5 + 6 + 7 + 8 + 9 + 10)
 *
 * Utilise ce code déjà fourni pour réussir ta machine à additions rotatives :
 */


function addRotative($minimum, $maximum) {
    $resultat = 0;
    // A toi de jouer !
    //$minimum = 4;
    //$maximum = 10;
/**
 * Dans la correction de la boucle for ils ont réatribué $minimum sur une autre variable $compteur, ce qui est
 * judicieux pour conserver les valeurs initiales sans les altérer
 */
// AVEC LA BOUCLE FOR
    for ($minimum; $minimum <= $maximum; $minimum++) { // $compteur = $minimum ; $compteur <= $maximum ; $compteur++
        $resultat = $resultat + $minimum;
    }

    var_dump($resultat);
    return $resultat;
}

// AVEC LA BOUCLE WHILE

/**
 * $compteur = $minimum  (comme ci-dessus initialisation de la variable qui récupère la valeure minimum)
 * while ($compteur <= $maximum) { (condition d'arrêt de la boucle)
 *  $resultat += compteur; (addition du compteur au résultat obtenu le tour précédent)
 *  $compteur++; (et on incrémente le compteur)
 * }
 */



/*
 * Tests
 * Pas touche !
 */
check(3);
