<?php

//var_dump($_POST); 
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$pass = $_POST['pass']; 
$confirm_pass = $_POST['confirm_pass']; 
$email = $_POST['mail']; 

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
$sql = "INSERT INTO utilisateurs (nom,prenom,email,password) VALUES ('$nom','$prenom','$email','$pass')";
//var_dump($sql);

if(!empty($nom) && !empty($prenom) && !empty($pass) && !empty($email))
{
    if($pass == $confirm_pass)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $requete = $bdd->prepare($sql); 

            if($requete->execute())
                echo 'success' ; 
            else
                echo 'error_admin'; 
        }
        else{
            echo'error_mail'; 
        }
    }
    else{
        echo 'error_pass'; 
    }
}
else{
    echo 'error_champs_vide'; 
}
