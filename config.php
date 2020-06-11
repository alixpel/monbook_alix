<?php
include "functions.php";

session_start();

$serveur = 'localhost';
$user = 'root';
$password = 'root';
$dataBase = 'monbook_alix';

$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("BOOK_URL_SITE", "http://localhost:8888/coursdenicolas/pages/site_resto/");
define("BOOK_PATH_SITE", __DIR__ . "/");

define("URL_TEMPLATE", BOOK_URL_SITE . "template/");
define("PATH_TEMPLATE", BOOK_PATH_SITE . "template/");
