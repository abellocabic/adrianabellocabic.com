<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'adrianabellocabic');
define('DB_USER', 'abellocabic');
define('DB_PASSWORD', 'W3b.C0ns8lt');


try {
	$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', ''.DB_USER.'', ''.DB_PASSWORD.'');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // c'est le meilleur mode pour la gestion des erreurs
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // voir http://php.net/manual/fr/pdo.setattribute.php
} catch(PDOException $e) {
	print "Erreur : " . $e->getMessage() . "<br>";
	die();
}
