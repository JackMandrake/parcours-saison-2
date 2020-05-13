<?php
error_reporting(E_ALL & ~E_NOTICE);

require_once 'datas.php';

function insertData(){
    $_SESSION['dirty_strings'] = [
        'je suis gentil@pirate',
        'https://secure.php.net/manual/fr/function.filter-var.php',
        'allo@service.fr',
        'http://test.com',
        'marc.quisuisje.fr',
        'http:localhost/production/index.html',
        'bouclier.man@herocorp.com',
        'http://oclock.io',
        'mauvais@email',
        'bon@email.fr',
        'http:mauvaise.url',
        'http://bonneurl.com',
    ];
}

function cleanData() {
    unset(
        $_SESSION['clean_urls'],
        $_SESSION['clean_emails']
    );
}

function check($exo) {
    $result = null;
    $content = '';
    switch ($exo) {
        case 1:
            if (function_exists('addition')) {
                $res1 = addition(4,2);
                $res2 = addition(1,3);
                $res3 = addition(4,9);

                if ($res1 === 6 && $res2 === 4 && $res3 === 13) {
                    $result = true;

                    $res1 = addition(4,10);
                    $res2 = addition(1,3,9);
                    $res3 = addition(4,9,10);
                    if ($res1 === 14 && $res2 === 13 && $res3 === 23) {
                        $content = '<br>Bonus réussi !';
                    }
                    else {
                        $content = '<br>Le bonus n\'est pas réussi, mais tu peux passer à l\'exo suivant, et revenir sur le bonus plus tard.';
                    }
                }
                else if (empty($res1) && empty($res2) && empty($res3)) {
                    $result = false;
                    $content = 'La fonction effectue peut-être son calcul, mais elle ne "répond" rien...';
                }
                else {
                    $result = false;
                    $content = 'Es-tu sûr du calcul ? Récupères-tu bien les nombres fournis en arguments ?';
                }
            }
            else {
                $result = false;
                $content = 'La fonction "addition" n\'existe pas.';
            }
            break;
        case '2a':
            global $result2a, $content2a;
            $characters = $GLOBALS['characters'];

            $result = false;
            if (!isset($characters)) {
                $result2a = false;
                $content2a = 'La variable n\'existe pas';
            }
            else if (!is_array($characters)) {
                $result2a = false;
                $content2a = 'La variable n\'est pas un tableau';
            }
            else if (empty($characters)) {
                $result2a = false;
                $content2a = 'Le tableau est vide';
            }
            else if (sizeof($characters) !== 3) {
                $result2a = false;
                $content2a = 'Le tableau n\'a pas le nombre d\'éléments escompté';
            }
            else if (!in_array('Stan', $characters)) {
                $result2a = false;
                $content2a = 'Tu n\'aurais pas oublié Stan par hasard ?';
            }
            else if (!in_array('Kyle', $characters)) {
                $result2a = false;
                $content2a = 'Tu n\'aurais pas oublié Kyle par hasard ?';
            }
            else if (!in_array('Kenny', $characters)) {
                $result2a = false;
                $content2a = 'Tu n\'aurais pas oublié Kenny par hasard ?';
            }
            else {
                $result2a = true;
                global $kennyIndex;
                $kennyIndex = array_search('Kenny', $characters);
                $content2a = '1ère étape : création du tableau OK<br>';
            }
            return '';
            break;
        case '2b':
            global $result2a, $content2a,$result2b, $content2b;
            $content2b = $content2a;
            
            if ($result2a === true) {
                $characters = $GLOBALS['characters'];
                if (!isset($characters)) {
                    $result2b = false;
                    $content2b .= 'La variable n\'existe plus';
                }
                else if (!is_array($characters)) {
                    $result2b = false;
                    $content2b .= 'La variable n\'est plus un tableau';
                }
                else if (empty($characters)) {
                    $result2b = false;
                    $content2b .= 'Le tableau est vide';
                }
                else if (sizeof($characters) === 3) {
                    $result2b = false;
                    $content2b .= 'Aucun ajout effectué dans le tableau';
                }
                else if (sizeof($characters) !== 4) {
                    $result2b = false;
                    $content2b .= 'Le tableau n\'a pas le nombre d\'éléments escompté';
                }
                else if (!in_array('Stan', $characters)) {
                    $result2b = false;
                    $content2b .= 'Tu n\'aurais pas oublié Stan par hasard ?';
                }
                else if (!in_array('Kyle', $characters)) {
                    $result2b = false;
                    $content2b .= 'Tu n\'aurais pas oublié Kyle par hasard ?';
                }
                else if (!in_array('Kenny', $characters)) {
                    $result2b = false;
                    $content2b .= 'Tu n\'aurais pas oublié Kenny par hasard ?';
                }
                else if (!in_array('Cartman', $characters)) {
                    $result2b = false;
                    $content2b .= 'Tu n\'aurais pas oublié Cartman par hasard ?';
                }
                else {
                    $result2b = true;
                    $content2b .= '2e étape : ajout d\'un élément au tableau OK';
                }
            }
            else {
                $result2b = false;
            }
            return '';
            break;
        case '2c':
            global $result2b, $content2b,$kennyIndex;
            $content = $content2b;
            
            if ($result2b === true) {
                $result = true;
                $bonusOk = false;
                $characters = $GLOBALS['characters'];
                $content .= '<br><br><strong>Bonus</strong><br>';
                if (!isset($characters)) {
                    $content .= 'La variable n\'existe plus';
                }
                else if (!is_array($characters)) {
                    $content .= 'La variable n\'est plus un tableau';
                }
                else if (empty($characters)) {
                    $content .= 'Le tableau est vide';
                }
                else if (in_array('Kenny', $characters)) {
                    $content .= 'Kenny est toujours dans le tableau...';
                }
                else if (sizeof($characters) !== 3) {
                    $content .= 'Le tableau n\'a pas le nombre d\'éléments escompté';
                }
                else if (array_key_exists($kennyIndex, $characters)) {
                    $content .= 'Il semblerait que le tableau contiennent les bonnes valeurs, mais que tu ne sois pas passé par une suppression pour y arriver...';
                }
                else {
                    $bonusOk = true;
                    $content .= 'suppression d\'un élément au tableau OK';
                }
                if (!$bonusOk) {
                    $content .= '<br>Le bonus n\'est pas réussi, mais tu peux passer à l\'exo suivant, et revenir sur le bonus plus tard.';
                }
            }
            else {
                $result = false;
            }
            break;
        case 3:
            if (function_exists('addRotative')) {
                $res1 = addRotative(4,10);
                $res2 = addRotative(50,80);
                $res3 = addRotative(-45,12);

                if ($res1 === 49 && $res2 === 2015 && $res3 === -957) {
                    $result = true;
                    $content = '<br>Bien joué !';
                }
                else if (empty($res1) && empty($res2) && empty($res3)) {
                    $result = false;
                    $content = 'La fonction effectue peut-être son calcul, mais elle ne "répond" rien...';
                }
                else {
                    $result = false;
                    $content = 'Es-tu sûr du calcul ? Récupères-tu bien les nombres fournis en arguments ?';
                }
            }
            else {
                $result = false;
                $content = 'La fonction "addRotative" n\'existe plus !? Où est-elle passée ?';
            }
            break;
        case 4:
            if (function_exists('displayStatusHTTP')) {
                $httpStatus2xx = func_get_args()[1];
                
                if (isset($httpStatus2xx) && !empty($httpStatus2xx)) {

                    $res = displayStatusHTTP($httpStatus2xx);
                    
                    if (count(explode('</li><li>', $res)) === count($httpStatus2xx)) {
                        $verif = array_map(function($keys, $values){return $keys.$values;}, array_keys($httpStatus2xx), array_values($httpStatus2xx));
                        
                        if (str_replace(' ', '', strip_tags($res)) === str_replace(' ', '', implode('', $verif))) {
                            $result = true;
                            $content = '<br>Bien joué !';
                        }
                        else {
                            $result = false;
                            $content = 'As-tu affiché toutes les informations comme demandé dans l\'exemple ?';
                        }
                    }
                    else {
                        $result = false;
                        $content = 'Il ne manquerait pas certains codes HTTP dans cette liste ? As-tu utilisé une liste non-ordonnée ?';
                    }
                }
                else {
                    $result = false;
                    $content = 'La liste des codes HTTP s\'est fait la malle ! Que personne ne sorte ! Impossible de continuer si tu ne la retrouves pas...';
                }
            } 
            else {
                $result = false;
                $content = 'La fonction "displayStatusHTTP" a disparu !? Elle n\'a quand même pas pu s\'envoler... ?';
            }
            break;
        case 5:
            $result = false;
            if (!isset($GLOBALS['jeu'])) {
                $content = 'La variable "jeu" n\'existe pas';
            }
            else if (!isset($GLOBALS['premierJoueur'])) {
                $content = 'La variable "premierJoueur" n\'existe pas';
            }
            else if (!isset($GLOBALS['secondJoueur'])) {
                $content = 'La variable "secondJoueur" n\'existe pas';
            }
            else if (!empty($_GET['step1']) && $_GET['step1'] == 'ok') {
                if ($GLOBALS['jeu'] != 'Télémagouille') {
                    $content = 'Bien tenté ! Mais la variable "jeu" ne contient pas dynamiquement la valeur du paramètre d\'URL';
                }
                else  if ($GLOBALS['premierJoueur'] != 'Mamdou') {
                    $content = 'Bien tenté ! Mais la variable "premierJoueur" ne contient pas dynamiquement la valeur du paramètre d\'URL';
                }
                else if ($GLOBALS['secondJoueur'] != 'Véronique') {
                    $content = 'Bien tenté ! Mais la variable "secondJoueur" ne contient pas dynamiquement la valeur du paramètre d\'URL';
                }
                else {
                    $result = true;
                }
            }
            else {
                if ($GLOBALS['jeu'] != 'Kamoulox') {
                    $content = 'La variable "jeu" ne contient pas la bonne valeur';
                }
                else if ($GLOBALS['premierJoueur'] != 'Steve Nathalie') {
                    $content = 'La variable "premierJoueur" ne contient pas la bonne valeur';
                }
                else if ($GLOBALS['secondJoueur'] != 'Herbert Mollard') {
                    $content = 'La variable "secondJoueur" ne contient pas la bonne valeur';
                }
                else {
                    header('Location: exo5.php?game=Télémagouille&player2=Véronique&player1=Mamdou&step1=ok');
                    exit;
                }
            }
            break;
        case 6:
            $algood1 = [base64_decode('ZMOpZmluaXIgbGUgbm9tYnJlIMOgIDQy'),base64_decode('b24gcsOpY3Vww6hyZSBsZSBub21icmUgc2Fpc2kgcGFyIGwndXRpbGlzYXRldXIgZW4gcGFyYW3DqHRyZSBkJ1VSTA=='),base64_decode('c2kgbGUgbm9tYnJlIHNhaXNpIGVzdCBwbHVzIHBldGl0IHF1ZSBsZSBub21icmUgYXR0ZW5kdQ=='),base64_decode('YWxvcnMgYWZmaWNoZXIgbGUgbWVzc2FnZSA6ICdMZSBub21icmUgc2Fpc2kgZXN0IHRyb3AgcGV0aXQgISc='),base64_decode('c2lub24='),base64_decode('c2kgbGUgbm9tYnJlIHNhaXNpIGVzdCBwbHVzIGdyYW5kIHF1ZSBsZSBub21icmUgYXR0ZW5kdQ=='),base64_decode('YWxvcnMgYWZmaWNoZXIgbGUgbWVzc2FnZSA6ICdMZSBub21icmUgc2Fpc2kgZXN0IHRyb3AgZ3JhbmQgISc='),base64_decode('c2lub24='),base64_decode('YWZmaWNoZXIgbGUgbWVzc2FnZSBkZSB2aWN0b2lyZQ==')];
            $algood2 = [base64_decode('ZMOpZmluaXIgbGUgbm9tYnJlIMOgIDQy'),base64_decode('b24gcsOpY3Vww6hyZSBsZSBub21icmUgc2Fpc2kgcGFyIGwndXRpbGlzYXRldXIgZW4gcGFyYW3DqHRyZSBkJ1VSTA=='),base64_decode('c2kgbGUgbm9tYnJlIHNhaXNpIGVzdCBwbHVzIGdyYW5kIHF1ZSBsZSBub21icmUgYXR0ZW5kdQ=='),base64_decode('YWxvcnMgYWZmaWNoZXIgbGUgbWVzc2FnZSA6ICdMZSBub21icmUgc2Fpc2kgZXN0IHRyb3AgZ3JhbmQgISc='),base64_decode('c2lub24='),base64_decode('c2kgbGUgbm9tYnJlIHNhaXNpIGVzdCBwbHVzIHBldGl0IHF1ZSBsZSBub21icmUgYXR0ZW5kdQ=='),base64_decode('YWxvcnMgYWZmaWNoZXIgbGUgbWVzc2FnZSA6ICdMZSBub21icmUgc2Fpc2kgZXN0IHRyb3AgcGV0aXQgISc='),base64_decode('c2lub24='),base64_decode('YWZmaWNoZXIgbGUgbWVzc2FnZSBkZSB2aWN0b2lyZQ==')];
            global $instructionList;
            $result = $instructionList === $algood1 || $instructionList === $algood2;
            break;
        case 7:
            $fn = func_get_args()[1];
            $result = (
                is_array($fn())
                && count($fn()) === 6
                && is_int($fn()[0])
                && ($fn()[0] >= 1 && $fn()[1] < 50)
                && ($fn()[1] >= 1 && $fn()[1] < 50)
                && ($fn()[2] >= 1 && $fn()[1] < 50)
                && ($fn()[3] >= 1 && $fn()[1] < 50)
                && ($fn()[4] >= 1 && $fn()[1] < 50)
                && $fn()[5] <= 10
            );
            break;
        case 8: 
            $content = ob_get_contents();
            ob_end_clean();
            break;
        case 9: 
            $content = ob_get_contents();
            ob_end_clean();
            break;

    }
    displayExo($exo, $result, $content);
}
function isSecretCode($code) {
     return $code === NBTOFIND;
}
function displayResult($bool, $id, $content='') {
    if (is_bool($bool)) {
        if ($bool) {
            echo '<section id="test" class="success">'.$content.'</section>';
        }
        else {
            echo '<section id="test" class="error">'.$content.'</section>';
        }
    }
    else {
        echo '<section id="test">'.$content.'</section>';
    }
}

function displayHtml($data, $result, $content='') {
    global $datas;
    $id = $data['id'];
    ?><!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>Le Parcours PHP - Exo <?= $id ?> : <?= $data['title'] ?></title>
            <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,500i" rel="stylesheet" />
            <link rel="stylesheet" href="../css/base.min.css" />
            <?php if ($id === 8): ?>
                <link rel="stylesheet" href="../css/exo8.css" />
            <?php endif ?>
            <?php if ($id === 9): ?>
                <link rel="stylesheet" href="exo9/css/styles.css" />
            <?php endif ?>
        </head>
        <body>
            <header id="header">
        		<h1 id="title">Le parcours
        			<i>🔥</i>
        			<span>PHP</span>
        		</h1>
        	</header>
        	<nav id="nav"></nav>
            <main id="main">
		<div id="epreuve">
			<div class="summary">
                <h2><?= $data['title'] ?></h2>
                <p><?= $data['subtitle'] ?></p>
                <?php echo isset($data['desc']) ? $data['desc'] : '' ?>
			</div>
		</div>

		<?php displayResult($result, $id, $content) ?>

	</main>

	<footer id="footer">
		<p>
			<strong>Besoin d'aide ?</strong> Direction les
			<a href="https://github.com/O-clock-Alumnis/fiches-recap">
				<i>📚</i> Fiches recap
			</a>
		</p>
		<p>O'clock</p>
	</footer>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/app.js"></script>

        </body>
    </html>
    <?php
}

function displayExo($exo, $result, $content='') {
    global $datas;
    displayHtml($datas[$exo], $result, $content);
}

function random($min, $max) {
  return rand($min, $max);
}
/* Exo 7 */
define('NBTOFIND', random(0, 1000));
