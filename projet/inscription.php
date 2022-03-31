<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <meta charset="UTF 8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
                    ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
            <?php
            break;

        case 'password':
            ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe différent
                    </div>
            <?php
            break;

        case 'email':
            ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email non valide
                    </div>
            <?php
            break;

        case 'email_length':
            ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email trop long
                    </div>
            <?php
            break;

        case 'pseudo_length':
            ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> pseudo trop long
                    </div>
        <?php
        case 'already':
            ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte deja existant
                    </div>
        <?php
    }
}
?>
        <form action="inscriptionTraitement.php" method="post">
            <div class="container py-5 h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-100 ">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
                        <div class="card bg-secondary text-light " style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center ">

                                <div class="mb-md-2 mt-md-4 pb-5 ">

                                    <h3 class="fw-bold mb-2 text-uppercase mb-5 ">Inscription</h3>         
                                </div>
                                <div class="form-outline form-white mb-5">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="E-mail" required/>                
                                </div>
                                <div class="form-outline form-white  mb-5">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" required/>                
                                </div>
                                <div class="form-outline form-white  mb-5">
                                    <input type="password" name="password_retype" class="form-control form-control-lg" placeholder="Re-taper le mot de passe" required/>                
                                </div>
                                <div class="form-outline form-white mb-5">
                                    <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom" required/>                
                                </div>
                                <div class="form-outline form-white mb-5">
                                    <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Prenom" required/>                

                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit">S'inscrire</button>       

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </form>


    </body>
</html>