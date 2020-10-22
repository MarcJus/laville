<?php
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "admin", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    } catch (Exception $e){
        echo "Erreur : ".$e->getMessage();
    }
?>