<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Accueil </title>       
    </head>
    <body> 
        <?php include('entete.php') ?>

        <div class="container">            
            
                <h1>Bienvenue sur Project'air ! le site ou vous pouvez planer en toutes securité</h1>
                <p>Vous trouverez ci-dessous les vols disponible (ramdom ou les dates les plus courtes)</p>                
            
            <?php
            $recipesStatement = $bdd->prepare('SELECT * FROM aeroport');
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();
            ?>
            
            
            <table class="table table-striped table-bordered table-hover">
                <figcaption> Passagers du vol A380</figcaption> 
                <tr>
                    <th>Aeroport</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Réservation</th>
                </tr>
                <?php foreach ($recipes as $recipe) { ?>
                    <tr>
                        <td><?php echo $recipe['nom'] ?></td>
                        <td><?php echo $recipe['ville'] ?></td>
                        <td><?php echo $recipe['pays'] ?></td>
                        <td><button class="btn btn-block btn-primary" onclick="window.location.href = 'reservation.php'">Reserver</button></td>
                    </tr>

                <?php } ?>
            </table>


        </div>
        
        <footer>
            <?php include('Pied_De_Page.php') ?>
        </footer>
    </body>
</html>
