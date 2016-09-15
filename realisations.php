<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
	'debug' => 'true',
	'cache' => 'cache',
));

$data['tags'] = array(
		'uha' => 'Projet UHA 4.0',
		'php' => 'PHP',
		'sql' => 'MySQL',
		'html' => 'HTML',
		'css' => 'CSS',
		'jq' => 'jQuery',
		'js' => 'Javascript',
		'ps' => 'Photoshop',
);

$data['realisations'] = array(
	array(
		'nom' => 'Vitrines de Mulhouse',
		'nom_court' => 'vitrines',
		'tags' => array('uha', 'php', 'sql', 'html', 'css'),
		'desc' => '<p>Graphique interactif à partir d\'une base de données.</p>'
	),
	array(
		'nom' => 'From-US',
		'nom_court' => 'fromus',
		'tags' => array('uha', 'php', 'html', 'css', 'jq', 'ps'),
		'url' => 'http://fromusgroupe3.robinb.fr',
		'desc' => '<p>Site de présentation du système de franchise de l\'entreprise From-US.</p>',
		'images' => 2
	),
	array(
		'nom' => 'Slider',
		'nom_court' => 'slider',
		'tags' => array('uha', 'html', 'css', 'js', 'ps'),
		'url' => 'http://slider.demo.robinb.fr',
		'desc' => '<p>Création d\'un slider en Javascript.</p>',
		'images' => 1
	),
	array(
		'nom' => 'Pointage',
		'nom_court' => 'pointage',
		'tags' => array('uha', 'php', 'sql', 'html', 'css', 'jq'),
		'url' => 'http://pointage.demo.robinb.fr',
		'desc' => '<p>Application Web permettant aux élèves d\'enregistrer leurs heures de départ et d\'arrivée en cours</p>',
		'images' => 2
	),
	array(
		'nom' => 'Électricité',
		'nom_court' => 'elec',
		'tags' => array('php', 'sql', 'html', 'css', 'jq', 'ps'),
		'url' => 'http://www.elec.demo.robinb.fr',
		'desc' => '<p>Site web créé pour un artisan électricien.</p>
			<ul class="competences">
				<li>Galerie photo avec gestion complète dans le backend (upload, tagging, description, ordre d\'affichage)</li>
				<li>Formulaire de contact</li>
				<li>Contenu dynamique (actualités, coordonnées)</li>
				<li>Génération de sitemap dynamique</li>
				<li>Design responsive</li>
				<li>Création du logo et d\'une carte de visite sur Photoshop</li>
			</ul>',
		'images' => 2
	),
	array(
		'nom' => 'Algorithme réservation chambres',
		'nom_court' => 'hotel',
		'tags' => array('uha', 'php', 'sql', 'html', 'css', 'jq'),
		'url' => 'http://hotel.demo.robinb.fr/reserver.php',
		'desc' => '<p>Algorithme et interface d\'attribution de chambres dans un hôtel.</p>',
		'images' => 1
	),
);

echo $twig->render('realisations.twig', $data);

?>