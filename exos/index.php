<?php
include('../inc/functions.php') ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Parcours PHP</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,500i" rel="stylesheet" />
	<link rel="stylesheet" href="../css/base.min.css" />
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
		<div class="section-title">Exos sur les bases de la programmation (avec PHP)</div>
		<section class="section">
			<article class="exo">
				<div class="summary">
					<div class="category">Bases de PHP</div>
					<h2>Additionner</h2>
					<p>1 + 1 = ?</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">fonctions</span>
					<span class="tag">paramètres</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://secure.php.net/manual/fr/language.operators.arithmetic.php">Les opérateurs arithmétiques</a>
						</li>
						<li>
                            <a target="_blank" href="https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/fonctions.md#d%C3%A9finir-une-fonction">Définir une fonction</a>
                        </li>
                    </ul>
                </div>
			</article>
			<article class="exo">
				<div class="summary">
					<div class="category">Bases de PHP</div>
					<h2>South Park</h2>
					<p>On se fait une petite liste des personnages de South Park ?</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">tableaux</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.php.net/manual/fr/language.types.array.php">les tableaux</a>
						</li>
						<li>
                            <a target="_blank" href="https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#compos%C3%A9-plusieurs-valeurs-scalaires">les tableaux (fiche récap)</a>
                        </li>
                    </ul>
                </div>
			</article>
			<article class="exo">
				<div class="summary">
					<div class="category">Bases de PHP</div>
					<h2>Additionner une suite</h2>
					<p>
						- additionner une quoi ?!<br>
						- bah 1+2+3+4+5+6+7<br>
						- haaaaa, "additionner une suite" quoi !<br>
						- 😒
					</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">boucles</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://secure.php.net/manual/fr/language.operators.arithmetic.php">Les opérateurs arithmétiques</a>
						</li>
						<li>
                            <a target="_blank" href="https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/boucles.md">Les boucles</a>
                        </li>
                    </ul>
                </div>
			</article>
			<article class="exo">
				<div class="summary">
					<div class="category">Bases de PHP</div>
					<h2>Afficher les codes HTTP en HTML</h2>
					<p>
					compléter la fonction displayStatusHTTP() pour qu'elle puisse afficher de manière lisible un tableau de codes HTTP fourni et pour cela, il vous faudra utiliser des balises HTML pour faire une liste non-ordonnée !
					</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">boucles</span>
					<span class="tag">tableaux</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
						<li>
                            <a target="_blank" href="https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/boucles.md">Les boucles</a>
                        </li>
						<li>
                            <a target="_blank" href="https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#compos%C3%A9-plusieurs-valeurs-scalaires">les tableaux</a>
                        </li>
                    </ul>
                </div>
			</article>
			<article class="exo">
				<div class="summary">
					<div class="category">Bases de PHP</div>
					<h2>Paramètres d'URL</h2>
					<p>
						Une page Web peut recevoir des données via l'URL<br>
						Et c'est le moment de les récupérer...
					</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">GET</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="https://secure.php.net/manual/en/reserved.variables.get.php">$_GET</a>
                        </li>
                    </ul>
                </div>
			</article>
        </section>

		<div class="section-title">Exos plus complexes avec de l'algo</div>
		<section class="section">
			<article class="exo">
				<div class="summary">
					<div class="category">Algo</div>
					<h2>Algo puzzle</h2>
					<p>
						Je stocke la chaîne de caractère dans une variable nommée toto<br>
						Je bois du couscous et je nettoie un paysan<br>
						J'exécute une fonction tata avec la variable toto en argument<br>
						Je photocopie du sable et j'achète un hôtel<br>
						Je récupère le retour de la fonction dans une variable titi<br>
						KAMOULOX !<br>
					</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">bases de la programmation</span>
				</div>
			</article>
			<article class="exo">
				<div class="summary">
					<div class="category">Algo</div>
					<h2>Loto</h2>
					<p>
						Si on veut gagner d'l'argent en masse,<br>
						on peut aussi remplir une grille de loto...
					</p>
				</div>
				<div class="info">
					<h3>Notions</h3>
					<span class="tag">tableaux</span>
					<span class="tag">boucles</span>
					<span class="tag">fonctions</span>
				</div>
                <div class="info">
                    <h3>Ressources</h3>
                    <ul>
                        <li>
                            <a target="_blank" href="http://php.net/mt_rand">mt_rand</a>
						</li>
                    </ul>
                </div>
			</article>
        </section>


		<div class="section-title">BONUS</div>
		<section class="section">
			<article class="exo bonus">
				<div class="summary">
					<div class="category">PHP</div>
					<h2>ALECMONE &#x2426;</h2>
					<p>
						Un petit malin s'est amusé à découper le code dans plusieurs fichiers !
						Et maintenant, il n'est plus possible d'acheter son caméléon fétiche sur ce site. 
						Il faut absolument remettre de l'ordre dans ce bazar avant que nos fans s'en aperçoivent.
					</p>
				</div>
                <div class="info">
					<h3>Notions</h3>
					<span class="tag">inclusions</span>
				</div>
			</article>
			<article class="exo bonus">
				<div class="summary">
					<div class="category">PHP, usine à HTML</div>
					<h2>Un Comparateur de personnages</h2>
					<p>
						Tu as déjà vu des comparateurs d'articles, pour voir quel est le produit qui correspond le mieux à tes besoin, mais aussi pour évaluer le meilleur rapport qualité/prix. Et bien, tu vas pouvoir faire la même chose pour comparer les personnages principaux de South Park !
					</p>
				</div>
                <div class="info">
					<h3>Notions</h3>
					<span class="tag">tableaux</span>
					<span class="tag">boucles</span>
					<span class="tag">HTML</span>
				</div>
			</article>
		</section>
	</main>
	<footer id="footer">
		<p>
			<strong>Besoin d'aide ?</strong> Direction les
			<a href="https://github.com/O-clock-Alumnis/fiches-recap">
				<i>📚</i> Fiches recap</a>
		</p>
		<p>O'clock</p>
	</footer>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/app.js"></script>
</body>

</html>
