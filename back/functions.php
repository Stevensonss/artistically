<?php
    function checkLoggedIn() {
        // Vérifier si l'utilisateur est connecté
        // Code de vérification ici
        // Retourner true ou false en fonction de l'état de connexion de l'utilisateur
    }
    
    // Autres fonctions et logique de gestion d'utilisateur
    
    // Vérifier la connexion à chaque fois que functions.php est inclus
    if (!checkLoggedIn()) {
        // Rediriger vers la page de connexion ou afficher un message d'erreur
        require_once 'back/include/sing_log.php';
    } else {
        require_once 'back/include/';
    }
