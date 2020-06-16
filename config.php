<?php
include "functions.php";
include "fonctions_contenu_front.php";

session_start();

$server = 'localhost';
$user = 'root';
$password = 'root';
$dataBase = 'monbook_alix';

$bdd = new PDO("mysql:host=$server;dbname=$dataBase", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("BOOK_URL_SITE", "http://localhost:8888/coursdenicolas/pages/monbook_alix/");
define("BOOK_PATH_SITE", __DIR__ . "/");

define("URL_TEMPLATE", BOOK_URL_SITE . "templates/");
define("PATH_TEMPLATE", BOOK_PATH_SITE . "templates/");

define("NOM_DU_SITE", "Alix Pelletier Book");
