<?php

$pass = $_POST['pass']; 
$email = $_POST['mail']; 

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

$requete = $bdd->prepare("SELECT email,password 
                            FROM utilisateurs 
                                WHERE email = :email
                                    AND password = :pass"
);

$requete->bindParam(':email', $email); 
$requete->bindParam(':pass', $pass); 

$requete->execute(); 

$result = $requete->fetch(PDO::FETCH_ASSOC); 

// var_dump($result); 

if($result)
{
    echo 'bravo vous ete connecté ' ; 
}
else{
    echo 'Mot de passe ou login incorrect' ; 
}

