<?php

// Inclusion des fichiers importants au bon fonctionnement du site.
require './config.php';
require PATH_REQUIRE.'/App/Libs/function.php';

// Verification des paramètre GET de la page
if (isset($_GET['page']) && !empty($_GET['page'])) {
	$page = trim(strtolower($_GET['page']));
} else {
	$page = 'home';
}

// Scan du dossier Controllers afin de lister les fichiers
$allPages = scandir('App/Controllers/');

// Vérification et affichage des fichiers issue du tableau 
// généré par la fonction scandir précédemment effectué.
if (in_array($page.'_controller.php', $allPages)) {

	// Si la page existe alors on charge en premier le MODEL puis le CONTROLLER et enfin la VUE.
    require 'App/Models/' . $page . '_model.php';
    require 'App/Controllers/' . $page . '_controller.php';
    require 'Ressources/Views/' . $page . '_view.php';

} else {

	// Si une erreur existe alors on charge directement l'erreur 404.
    require './Ressources/Views/Errors/error-404.php';

}