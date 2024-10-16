<?php
// Controleur Frontal => Router
// Toutes les requêtes des utilisateurs passent par ce fichier

//chargement des variables d'environnement

$entityManager = require_once __DIR__.'/../Config/bootstrap.php';

//mise en place du routing

$route = $_GET['route'] ?? 'accueil';
//tester la valeur de route
switch($route){
    case 'accueil':
        $accueilControleur = new \App\Controleurs\AccueilControleur();
        $accueilControleur ->Acceuil();
        break;
    case 'livre-list':
        $livreControleur = new \App\Controleurs\LivreControleur($entityManager);
        $livreControleur->liste($entityManager);
        break;
    case 'livre-detail' :
        $id = $_GET["id"] ?? 'null';
        if (empty($id)) {
            echo "<i>ID du livre non défini</i>";
            //echo "<i>window.location.replace('index.php?route=livre-list');</i>";
            exit;
        }
        $acceuilController = new \App\Controleurs\LivreControleur($entityManager);
        $acceuilController-> detail($entityManager,$id);
        break;
    case 'livre-form' :
        $acceuilController = new \App\Controleurs\LivreControleur($entityManager);
        $acceuilController-> form();

        break;
    case 'livre-ajout' :
        $acceuilController = new \App\Controleurs\LivreControleur($entityManager);
        $acceuilController-> ajouter($entityManager, $titre, $pages, $auteur);
        break;
    default :
        //erreur 404
        echo "page non trouvé";
        break;
}
