<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>
<body>

    <!-- <a href="inscription.php" id = "inscription"> Inscription </a>

    <a href="connexion.php" id = "connexion"> Connexion </a> -->

    <form method="POST">
        <label for="nom"> Nom : </label>
        <input type="text" name="nom" id="nom">

        </br>

        <label for="prenom"> Prenom : </label>
        <input type="text" name="prenom" id="prenom">

        </br>

        <label for="mail"> Email : </label>
        <input type="texte" name="mail" id="mail">

        </br>

        <label for="pass"> Mot de passe : </label>
        <input type="password" name="pass" id="pass">

        </br>

        <input type="button" value="Envoyer" id="button">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>