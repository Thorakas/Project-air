<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Accueil </title>       
    </head>
    <body> 
        <?php include('entete.php') ?>

        <div class="container">     


<?php if(!empty($_POST['D_depart']) && !empty($_POST['D_retour']) && !empty($_POST['paysD']) && !empty($_POST['paysA']))
{ 
    $depart = $_POST['D_depart'];
    $retour = $_POST['D_retour'];
    $aeroportD = $_POST['paysD'];
    $aeroportA = $_POST['paysA'];
    
   $check = $bdd->prepare('SELECT * FROM vol inner join aeroport ON vol.idAeroport=aeroport.idAeroport');
   $check-> execute();
   $triss = $check->fetchAll();   
   
   
   
   foreach ($triss as $tri){
       if($tri['dateDépart'] == $depart){  
           echo'bon';
           if($tri['dateArrive'] == $retour){
               echo'même date arrive';   
               if($tri['nom'] == $aeroportD){
                   echo'yes';
               }
           }
       }  
   }
   
        ?>
   
   <table class="table table-striped table-bordered table-hover">
                <figcaption> Passagers du vol A380</figcaption> 
                <tr>
                    <th>Aeroport</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Réservation</th>
                </tr>
                <?php foreach ($triss as $tri) { ?>
                    <tr>
                        <td><?php echo $tri['idAeroport'] ?></td>
                        <td><?php echo $tri['ville'] ?></td>
                        <td><?php echo $tri['pays'] ?></td>
                        <td><button class="btn btn-block btn-primary" onclick="window.location.href = 'reservation.php'">Reserver</button></td>
                    </tr>

                <?php } ?>
            </table>
   <?php
            $recipesStatement = $bdd->prepare('SELECT * FROM reservation join vol ON (reservation.idVol = vol.idVol) join client ON (reservation.idClient = client.idClient');
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
                        <td><?php echo $recipe['idVol'] ?></td>
                        <td><?php echo $recipe['ville'] ?></td>
                        <td><?php echo $recipe['pays'] ?></td>
                        <td><button class="btn btn-block btn-primary" onclick="window.location.href = 'reservation.php'">Reserver</button></td>
                    </tr>

                <?php } ?>
            </table>
  <?php } else echo 'remplissez tout les champs';?>
    </body>
</html>