<?php         
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=bdd_project'air;", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }    