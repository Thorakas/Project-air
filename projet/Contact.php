<!DOCTYPE html>
<html lang="fr">
<head>
<title> Contact </title>
<meta charset="UTF 8">
<!-- boostrap et feuille de style css classique---->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"/>
</head>
 <body>
<?php include('entete.php') ?>
     <div class="container txt_placeholder">
<p>Ceci est la page de contact</p>
<p>
<label for="ameliorer">Des questions ? Des remarques ? Dites nous tout !</label><br/>
       <textarea name="ameliorer" id="ameliorer" rows="5" cols="40" placeholder="Quel est l'objet de votre demande ?"></textarea>
</p>

<p> Vous pouvez nous contacter via cette email : <a href="mailto:david78130p@gmail.com">exemple@gmail.com</a></p>


<!-- carte googlemap -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.569229617754!2d2.3720914158557216!3d48.94264610272402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66bfd8c795b8d%3A0x26bf49463e4b8b2e!2s21%20Rue%20Clovis%20Hugues%2C%2093200%20Saint-Denis!5e0!3m2!1sfr!2sfr!4v1644960781039!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
     
     <?php include('Pied_De_Page.php') ?>
 </body>
</html>