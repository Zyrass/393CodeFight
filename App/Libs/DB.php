<?php

/***********************************************************************
 * CONNEXION DATABASE * 
 ***********************************************************************/
try {
    $bdd = new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME.';charset='.CHARSET,USER,PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }
  catch(PDOException $e) {
    die('Connexion impossible, vous avez rencontré une erreur : '.$e->getMessage());
  }
