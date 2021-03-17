<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Accueil</li>
                <li>Inscription</li>
                <li>Connexion</li>
                <li>Rechercher</li>
            </ul>
        </nav>
    </header>    

    <main>
        <form>
            <p>Civilité :</p>

            <div>
                <input type="radio" id="civilite_mr" name="civilite" value="mr">

                <label for="civilite_mr"> Mr </label>
            </div>  
            <div>
                <input type="radio" id="civilite_mme" name="civilite" value="mme">
                <label for="civilite_mme">Mme</label>
            </div>

            <div>
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>

            <div>
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>

            <div>
                <label for="email"> Email : </label>
                <input type="text" id="email" name="email">
            </div>

            <div>
                <label for="pass"> Mot de passe : </label>
                <input type="password" id="pass" name="pass">
            </div>

            <div>
                <label for="confirm_pass"> Confirmer le mot de passe : </label>
                <input type="password" id="confirm_pass" name="confirm_pass">
            </div>

            <p> Hobbies : </p>

            <div>
                <input type="checkbox" id="informatique" name="passion">
                        
                <label for="informatique">Informatique</label>
            </div>

            <div>
                <input type="checkbox" id="sport" name="passion">
                <label for="sport">Sport</label>
            </div>

            <div>
                <input type="checkbox" id="lecture" name="passion">
                <label for="lecture">Lecture</label>
            </div>

            <div>
                <input type="checkbox" id="voyage" name="passion">
                <label for="voyage">Voyage</label>
            </div>

            <input type="button" value="Envoyer">

        </form>

    </main>
</body>
</html>