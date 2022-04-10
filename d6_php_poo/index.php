<?php

use App\Autoloader;
use App\Core\Main;

//On défini une constante contenant le dossier racine du projet
define('ROOT', dirname(__DIR__));

// Importation de l'autoloader

require_once ROOT. '/d6_php_poo/Autoloader.php';
Autoloader::register();

// On instancie Main
$app = new Main();

// On démarre l'app
$app->start();

?>