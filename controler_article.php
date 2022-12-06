<?php
include('vue_article.php');

include('connect_bdd.php');




if (
    isset($_POST['nom_article']) and $_POST['nom_article'] != ''
    and isset($_POST['prix_article']) and $_POST['prix_article'] != '') 
{
    $nom_article = $_POST['nom_article'];
    $prix_article = $_POST['prix_article'];


    //utilitaire de connexion à la BDD


    include('model_article.php');

}





?>