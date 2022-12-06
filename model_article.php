<?php


    try {

        $req = $bdd->prepare('insert into article (nom_article, prix_article) values (?,?)');
        $req->bindParam(1,$nom_article,PDO::PARAM_STR);
        $req->bindParam(2,$prix_article,PDO::PARAM_STR);
        $req->execute();

        echo "<p>Votre article : $nom_article, dont le contenu prix est de  : $prix_article.</p>";


    } catch (Exception $error) {
        //affichage d'une exception en cas d’erreur
        die('Erreur : ' . $error->getMessage());
    }



?>