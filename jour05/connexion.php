<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <form action="connexion.php" method="POST">
        <label for="mail"> Email : </label>
        <input type="mail" name="mail" id="mail">

        </br>

        <label for="pass"> Password : </label>
        <input type="password" name="password" id="pass">
        
        </br>

        <input type="button" value="Envoyer" id="button_connexion">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
