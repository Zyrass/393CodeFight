<?php

/***********************************************************************
 * DISPLAY ERRORS * 
 ***********************************************************************/
error_reporting(E_ALL);
ini_set("display_errors", true);

/***********************************************************************
 * SESSIONS * 
 ***********************************************************************/
ini_set('session_cookie_lifetime', false);
session_start();

/***********************************************************************
 * PATH * 
 ***********************************************************************/
define('PATH_REQUIRE', substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
define('PATH', substr($_SERVER['PHP_SELF'], 0, -9));
define('PATH_IMAGE', './Public/assets/images/');

/***********************************************************************
 * CONSTANTES CONNEXION DATABASE * 
 ***********************************************************************/
define('HOSTNAME', 'localhost');
define('DBNAME', '393codefight');
define('CHARSET', 'UTF8');
define('USER', 'zyrass');
define('PASSWORD', '');

/***********************************************************************
 * CONSTANTES META-TAGS * 
 ***********************************************************************/
define('WEBSITE_TITLE', '393CodeFight');
define('WEBSITE_DESCRIPION', 'Projet créé afin d\'obtenir mon diplôme à la 3WA.');
define('WEBSITE_AUTHOR', 'Alain Guillon');
define('WEBSITE_URL', '');