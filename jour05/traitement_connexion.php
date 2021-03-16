<?php

session_start(); 

$pass = $_POST['pass']; 
$email = $_POST['mail']; 

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');

$requete = $bdd->prepare("SELECT email,password,prenom
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
    echo 'connecte' ; 
    $_SESSION['prenom'] = $result['prenom']; 
}
else{
    echo 'erreur' ; 
}

