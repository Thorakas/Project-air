<?php
session_start();
require_once 'config.php';






    

    if(isset($_POST['email']) && isset($_POST['password'])) 
    {
        // Patch XSS        
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT nom, motdepasse, email, prenom FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['motdepasse']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['prenom'];
                    header('Location: Accueil.php');
                    die();
                }else{ header('Location: Connexion.php?login_err=password'); die(); }
            }else{ header('Location: Connexion.php?login_err=email'); die(); }
        }else{ header('Location: Connexion.php?login_err=already'); die(); }
    }else{ header('Location: Connexion.php'); die();} // si le formulaire est envoyé sans aucune données









?>
