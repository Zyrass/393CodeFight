<?php

require_once './config.php';

if (isset($_GET['page']) && !empty($_GET['page'])) {
	$page = trim(strtolower($_GET['page']));
} else {
	$page = 'home';
}

$allPages = scandir('App/Controllers/');

if (in_array($page.'_controller.php', $allPages)) {
    require 'App/Models/' . $page . '_model.php';
    require 'App/Controllers/' . $page . '_controller.php';
    require 'Ressources/Views/' . $page . '_view.php';
} else {
    require './Ressources/Views/Errors/error-404.php';
}