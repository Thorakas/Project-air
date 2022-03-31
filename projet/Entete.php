<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Accueil </title>
        <meta charset="UTF 8">
        <!-- boostrap et feuille de style css classique-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>



        <header>
            <nav class="menu_topbar navbar navbar-expand-lg  shadow p-3 mb-5 bg-body rounded p-3 mb-2 ">
                
                <div class="col "      
                     <!--logo du site -->
                     <img src="../image/logo_avion" title="Logo_Project'air" class="logo rounded"/>
                </div>

                <!-- menu principal de l'en-tête -->

                <div class="col">
                    <ul class="nav nav-fill container ">                        
                        <li class="nav-item border-right border-secondary"><button class="btn btn-block active" onclick="window.location.href = 'Accueil.php'">Accueil</button></a></li>
                        <li class="nav-item border-right border-secondary"><button class="btn btn-block active" onclick="window.location.href = 'Reservation.php'">Reservation</button></a></li>
                        <li class="nav-item border-right border-secondary"><button class="btn btn-block" onclick="window.location.href = 'Reserve.php'">Mes reservations</button></a></li>
                        <li class="nav-item "><button class="btn btn-block" onclick="window.location.href = 'Contact.php'">Contact</button></li>
                    </ul>
                    
                </div>
                
                 <!-- bouton de connexion -->
                <div class="col d-md-flex justify-content-md-end">
                   
               
                    <?php 
                    if(!isset($_SESSION['user']))
                    {
                      ?>
                    <a class="btn btn-primary " <button type="button"href="Connexion.php"><img src="../icons/person-fill.svg" alt="Icon" > Connexion</button></a>
                    <?php
                    }
                    else {
                        echo 'Bonjour ' . $_SESSION['user'];
                                
                    ?>
                    &nbsp&nbsp
                    <a href="deconnexion.php" class="btn btn-primary btn"><img src="../icons/box-arrow-right.svg" alt="Icon" > Déconnexion</a>
                    <?php
                   }
                   ?> 
                </div>
            </nav>


            
        </header>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>