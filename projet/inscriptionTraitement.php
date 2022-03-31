<?php require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && !empty($_POST['prenom']) && !empty($_POST['nom']))
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        
        

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT email FROM client WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){             
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password == $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO client(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');
                            $insert->execute(array(                                
                                'nom' => $nom,
                                'password' => $password,
                                'email' => $email,
                                'prenom' => $prenom                                
                            ));
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}          
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }