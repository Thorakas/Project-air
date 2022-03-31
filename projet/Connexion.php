<!DOCTYPE html>
<html lang="fr">
<head>
<title>Connexion</title>
<meta charset="UTF 8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
     <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    
                    }
                }
                ?>
    
    
<form action="VerificationConnexion.php" method="post">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        <div class="card bg-secondary text-light " style="border-radius: 1rem;">
          <div class="card-body p-5 text-center ">
            <div class="mb-md-2 mt-md-4 pb-5 ">
              <h2 class="fw-bold mb-2 text-uppercase mb-5 ">Connectez-vous</h2>   
              <div class="form-outline form-white mb-5">
                  <input type="email" name="email" class="form-control form-control-lg txt_placeholder" placeholder="Adresse e-mail" required/>
              </div>
              <div class="form-outline form-white  mb-4">
                  <input type="password"  name="password" class="form-control form-control-lg txt_placeholder" placeholder="Mot de passe" required/>
              </div>
              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="Mot_De_Passe_Oublie.php">Mot de passe oublié ?</a></p>
              <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Connexion">
            </div>
            <div>
              <p class="mb-0">Pas encore inscrit ? <a href="inscription.php" class="text-white-50 fw-bold">Inscrivez-vous</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>



</body>
</html>