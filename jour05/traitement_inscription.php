<?php

//var_dump($_POST); 
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$pass = $_POST['pass']; 
$email = $_POST['mail']; 

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
$sql = "INSERT INTO utilisateurs (nom,prenom,email,password) VALUES ('$nom','$prenom','$email','$pass')";
//var_dump($sql);
$requete = $bdd->prepare($sql); 

if($requete->execute())
    echo 'Bravo '.$_POST['prenom'].'! Vous ête inscris' ; 
else
    echo 'erreur dans le système !'; 