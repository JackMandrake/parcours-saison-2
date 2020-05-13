<?php
require_once '../inc/functions.php';

/* === Exo 4 : L'erreur est HTTP ===
 *
 * Nous, humains, faisons plein d'erreurs et c'est comme cela que nous progressons. 
 * Certains vont même jusqu'à préciser les erreurs et leurs causes pour mieux guider la progression ! 
 * 
 * C'est le cas du HTTP qui décline en codes les différents résultats possibles d'une requête.
 * Ils nous informent au sujet de la réussite, de ce qu'elle a engendré. 
 * Mais aussi de l'erreur et de ce qui en est la cause. 
 * Pour en savoir plus : https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP
 * 
 *
 * Le but de l'exercice : 
 * - compléter la fonction displayStatusHTTP() pour qu'elle puisse afficher de manière lisible un tableau de codes HTTP fourni
 * 
 * Attention : pour cela, il vous faudra utiliser des balises HTML pour faire une liste non-ordonnée ! ƪ(ړײ)‎ƪ​​
 * 
 * 
 * Par exemple : 
 * 
 *  <li>
 *      <strong>200</strong> [OK] Requête traitée avec succès. La réponse dépendra de la méthode de requête utilisée.
 *  </li>
 *  <li>
 *      <strong>201</strong> [Created] Requête traitée avec succès et création d’un document.
 *  </li>
 */


function displayStatusHTTP($httpStatusList) {
    $html = '';
    // A vous de jouer ! 
    // Pour t'aider, n'hésite pas à écrire le plan des instructions à exécuter en commentaire
    
    return $html;
}

// Liste des status "Succès"
$httpStatus2xx = [
    200 => '[OK] Requête traitée avec succès. La réponse dépendra de la méthode de requête utilisée.',
    201 => '[Created] Requête traitée avec succès et création d’un document.',
    202 => '[Accepted] Requête traitée, mais sans garantie de résultat.',
    203 => '[Non-Authoritative Information] Information retournée, mais générée par une source non certifiée.',
    204 => '[No Content] Requête traitée avec succès mais pas d’information à renvoyer.',
    205 => '[Reset Content] Requête traitée avec succès, la page courante peut être effacée.',
    206 => '[Partial Content] Une partie seulement de la ressource a été transmise.',
    207 => '[Multi-Status] WebDAV : Réponse multiple.',
    208 => '[Already Reported] WebDAV : Le document a été envoyé précédemment dans cette collection.',
    210 => '[Content Different] WebDAV : La copie de la ressource côté client diffère de celle du serveur (contenu ou propriétés).',
    226 => '[IM Used] Le serveur a accompli la requête pour la ressource, et la réponse est une représentation du résultat d\'une ou plusieurs manipulations d\'instances appliquées à l\'instance actuelle.'
];

 //echo(displayStatusHTTP($httpStatus2xx));

// Liste non exhaustive des status "Erreurs du client web"
$httpStatus4xx = [
    400 => '[Bad Request] La syntaxe de la requête est erronée.',
    401 => '[Unauthorized] Une authentification est nécessaire pour accéder à la ressource.',
    402 => '[Payment Required] Paiement requis pour accéder à la ressource.',
    403 => '[Forbidden] Le serveur a compris la requête, mais refuse de l\'exécuter. Contrairement à l\'erreur 401, s\'authentifier ne fera aucune différence. Sur les serveurs où l\'authentification est requise, cela signifie généralement que l\'authentification a été acceptée mais que les droits d\'accès ne permettent pas au client d\'accéder à la ressource.',
    404 => '[Not Found] Ressource non trouvée.',
    405 => '[Method Not Allowed] Méthode de requête non autorisée.',
    406 => '[Not Acceptable] La ressource demandée n\'est pas disponible dans un format qui respecterait les en-têtes « Accept » de la requête.',
    407 => '[Proxy Authentication Required] Accès à la ressource autorisé par identification avec le proxy.',
    408 => '[Request Time-out] Temps d’attente d’une requête du client, écoulé côté serveur.',
    409 => '[Conflict] La requête ne peut être traitée en l’état actuel.',
    410 => '[Gone] La ressource n\'est plus disponible et aucune adresse de redirection n\'est connue.',
    414 => '[Request-URI Too Long] URI trop longue.',
    415 => '[Unsupported Media Type] Format de requête non supporté pour une méthode et une ressource données.',
    418 => '[I\'m a teapot] Je suis une théière !' // https://fr.wikipedia.org/wiki/Hyper_Text_Coffee_Pot_Control_Protocol
];

// echo(displayStatusHTTP($httpStatus4xx));


/*
 * Tests
 * Pas touche !
 */
check(4, $httpStatus2xx, $httpStatus4xx);
