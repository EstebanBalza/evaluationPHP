<?php
    //utilitaire de connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=ticket','root','',
    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>