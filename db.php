<meta charset="utf-8">
<?php

    try{
        if($_POST['user'] != null AND $_POST['password'] != null){
            echo "C'est fait";
        } else {
            ?>
            <h1>Veuillez vous connecter depuis la page principale</h1>
            <?php
        }
        // $bdd = new PDO("mysql:host=".$host.";port=".$port.";dbname=laville;charset=utf8", "pi", "123");

        // $reponse = $bdd->query("SELECT * FROM ");

        // while($donnes = $reponse->fetch()){
        // }

        // $reponse->closeCursor();
    } catch (Exception $e){
        die("Erreur : ".$e->getMessage());
    }

?>