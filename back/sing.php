<?php

    // Traitement du formulaire d'inscription

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $passwordUp = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $bornDate = isset($_POST['bornDate']) ? $_POST['bornDate'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';
   

    if (!empty($_POST)) {
        
        // Ont vérifie que toutes les données sont présentes
        if (!empty($name) && !empty($email) && !empty($passwordUp) && !empty($confirmPassword) && !empty($bornDate) && !empty($gender) && !empty($terms)) {
           if ($passwordUp === $confirmPassword) {
                $passwordUp = password_hash($passwordUp, PASSWORD_DEFAULT);
                //tout est validé
                //ont retire les balises du contenu
                $name = strip_tags($name);
                $email = strip_tags($email);
                $passwordUp = strip_tags($passwordUp);
                $confirmPassword = strip_tags($confirmPassword);

                //enregistrement
                // Inclure le fichier de configuration
                require_once 'config.php';

                //requête
                $sql = "INSERT INTO `users` (`name`, `email`, `password`, `confirmPassword`, `birthDate`, `gender`, `terms`) 
                VALUES 
                (:name, :email, :password, :confirmPassword, :birthDate, :gender, :terms)";

                //préparation de la reqête
                $query = $db->prepare($sql);

                //injection des valeurs
                $query->bindValue(":name", $name, PDO::PARAM_STR);
                $query->bindValue(":email", $email, PDO::PARAM_STR);
                $query->bindValue(":password", $passwordUp, PDO::PARAM_STR);
                $query->bindValue(":confirmPassword", $confirmPassword, PDO::PARAM_STR);
                $query->bindValue(":birthDate", $bornDate, PDO::PARAM_STR);
                $query->bindValue(":gender", $gender, PDO::PARAM_INT);
                $query->bindValue(":terms", $terms, PDO::PARAM_INT);


                //exécute la requête
                if(!$query->execute()) {
                    die("Une erreur est survenue");
                }

                $_POST = array();
                unset($_POST);

                //récupère l'id de l'entité
                $id = $db->lastInsertId();          
                // Redirection vers une autre page
                header("Location: inscription_valide.php?parametre=true");
                exit;
           } else{echo('Ecrivez deux fois le même mot de pass.');}
        }
    }

    
    // Inclure le fichier de configuration
    require_once 'config.php';
    
    // Récupérer le nom d'utilisateur depuis la variable $username
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if (!empty($_POST)) {
        // Requête pour récupérer l'entité correspondant au nom d'utilisateur
        $sql = "SELECT * FROM users WHERE name = :username";
        $query = $db->prepare($sql);
        $query->bindValue(':username', $username, PDO::PARAM_STR);
    
        try {
            // Exécute la requête
            $query->execute();
    
            // Récupère les résultats sous forme de tableau associatif
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                // Vérifier si le mot de passe correspond
            if (password_verify($password, $user['password'])) {
                

                // Mot de passe correct, l'utilisateur est connecté
                 // Démarre la session
                session_start();
                
                // Stocke les données de l'utilisateur connecté dans la session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                
                // Redirige l'utilisateur vers la page de contenu réservé aux utilisateurs connectés
                header("Location: ../artistically.php?parametre=true");
                echo("testa");
                exit;

            } else {
                // Mot de passe incorrect
                echo "Le Nom d'utilisateur ou Mot de passe incorrect";
            }

            } else {
                echo "Le Nom d'utilisateur ou Mot de passe incorrect";
            }
        } catch (PDOException $e) {
            echo "Erreur dans la requête SQL : " . $e->getMessage();
        }
    }