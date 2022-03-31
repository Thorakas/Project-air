<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Reservation</title>
        <meta charset="UTF 8">
        <!-- boostrap et feuille de style css classique---->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
        <?php include('entete.php') ?> 

        <?php
        $recipesStatement = $bdd->prepare('SELECT * FROM aeroport');
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();
        ?>

        <div class="container">




            <form method="post" action="ReservationTraitement.php" class="card form_reservation">

                <p> 
                    <label for="paysDepart">Aeroport de départ :</label>                    
                    <select name="paysD" id="paysDepart">     
                        <option></option>
                        <?php foreach ($recipes as $recipe) { ?>
                            <option><?php echo $recipe['nom'] . ' - ' . $recipe['pays'] ?></option>
                        <?php }
                        ?>
                    </select>
                </p>
                <p>
                    <label for="paysArriver">Aeroport de destination :</label>
                    <select name="paysA" id="paysArriver">
                        <option></option>
                        <?php foreach ($recipes as $recipe) { ?>
                            <option><?php echo $recipe['nom'] . ' - ' . $recipe['pays'] ?></option>
                        <?php }
                        ?>

                    </select>
                </p>
                <p>         
                    <label for="D_depart">date de depart :</label>
                    <input type="date" name="D_depart" id="D_depart" />
                </p>
                <p>
                    <label for="D_retour">date de retour :</label>
                    <input type="date" name="D_retour" id="D_retour" />
                </p>
                <p>
                    <label for="A_Arrive">Nombre de place(s) :</label>
                    <input type="number" name="N_billet" id="N_billet" min="1" max="30" value="1"/>
                </p>


                <input type="submit" value="Voir les vols disponible"/>

            </form>
        </div>
    </body>
</html>
