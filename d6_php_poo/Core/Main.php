<?php

namespace App\Core;

use App\Controllers\AccueilController;

class Main
{
    public function start()
    {
        // On retire le trailing slash de l'url pour éviter le duplicate content
        // On récupère l'url

        $uri = $_SERVER['REQUEST_URI'];

        // On vérifie que uri n'est pas vide et se termine par un /

        if (!empty($uri) && $uri != "/" && $uri = "" && $uri[-1] === "/") {
            // On enlève le /
            $uri = substr($uri, 0, -1);

            // Code de redirection permanente
            http_response_code(301);

            // Redirection vers l'url sans /
            header('Location: ' . $uri);
        }

        // On gère les paramètres d'url avec p=controlleur/methode/
        // On sépare les param dans un tableau
        $params = [];
        if (isset($_GET['p']))
            $params = explode('/', $_GET['p']);

        if (!empty($params) && $params[0] != '') {
            $controller = '\\App\\Controllers\\' . ucfirst(array_shift($params)) . 'Controller';

            // On instancie le controller
            $controller = new $controller();

            // On récupère le 2e paramètre de l'url            
            if (isset($params[0])) {
                $action = array_shift($params);
            } else {
                $action = 'index';
            }
            
            // Methode 2
            // Verification si une méthode existe
            if (method_exists($controller, $action)) {
                if (isset($params[0])) {
                    $controller->$action($params);
                } else {
                    $controller->$action();
                }              
            } else{
                http_response_code(404);
                echo "la méthode n'existe pas";
            }
                        
        } else {
            // Pas de paramètres
            $controller = new AccueilController;

            // On appelle la méthode inde
            $controller->index();
        }
    }
}
