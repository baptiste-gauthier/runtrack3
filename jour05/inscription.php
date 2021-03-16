    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    </head>
    <body>
        
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

        <label for="confirm_pass"> Confirmation du mot de passe : </label>
        <input type="confirm_password" name="confirm_pass" id="confirm_pass">

        </br>

        <input type="button" value="Envoyer" id="button_inscription">
    </form>

    <p class="message" id="error_pass"></p>
    <p class="message" id="error_mail"></p>
    <p class="message" id="error_admin"></p>
    <p class="message" id="error_champs_vide"></p>
    <p class="message" id="success"></p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    </body>
    </html>
