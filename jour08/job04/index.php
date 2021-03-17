<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="light-blue lighten-5 cyan-text text-darken-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo cyan-text text-darken-4">Logo</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons cyan-text text-darken-4">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down ">
                    <li><a href="#" class="cyan-text text-darken-4">Accueil</a></li>
                    <li><a href="#" class="cyan-text text-darken-4">Inscription</a></li>
                    <li><a href="#" class="cyan-text text-darken-4">Connexion</a></li>
                    <li><a href="#" class="cyan-text text-darken-4"><i class="material-icons left cyan-text text-darken-4">search</i>Rechercher</a></li>
                </ul>
                
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Inscription</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="#">Rechercher</a></li>
                </ul>
            </div>
        </nav>
    </header>    
    
    <main>
        <div class="container">
            <form class="col s12"> 
                <p>Civilité :</p>
<!--         
                <div>
                    <input type="radio" id="civilite_mr" name="civilite" value="mr">
                    
                    <label for="civilite_mr"> Mr </label>
                </div>   -->
                <p>
                    <label>
                        <input name="group1" type="radio"/>
                        <span>Mr</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input name="group1" type="radio"/>
                        <span>Mme</span>
                    </label>
                </p>

                <div>
                    <input type="radio" id="civilite_mme" name="civilite" value="mme">
                    <label for="civilite_mme">Mme</label>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Nom</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Prenom</label>
                    </div>
                </div>
                
                
                <div class="row">
                    <!-- <form class="col s12"> -->
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                        </div>
                    </div>
                    <!-- </form> -->
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
                
                <!-- <div>
                    <input type="checkbox" id="informatique" name="passion">
                    
                    <label for="informatique">Informatique</label>
                </div> -->
                <div>
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span>Informatique</span>
                    </label>
                </div>
                
                <!-- <div>
                    <input type="checkbox" id="sport" name="passion">
                    <label for="sport">Sport</label>
                </div> -->

                <div>
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span>Sport</span>
                    </label>
                </div>
                
                <!-- <div>
                    <input type="checkbox" id="lecture" name="passion">
                    <label for="lecture">Lecture</label>
                </div> -->

                <div>
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span>Lecture</span>
                    </label>
                </div>
                
                <!-- <div>
                    <input type="checkbox" id="voyage" name="passion">
                    <label for="voyage">Voyage</label>
                </div> -->

                <div>
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span>Voyage</span>
                    </label>
                </div>
                
                <a class="waves-effect waves-light btn" id="bouton_envoyer">Envoyer</a>

            </form>
        </div>
        
    </main>

    <footer class="page-footer cyan darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Mon super footer</h5>
                <p class="grey-text text-lighten-4">Powder jujubes gingerbread danish topping carrot cake caramels chocolate cake. Toffee cotton candy topping. Cake pie donut chocolate cake candy canes.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Rechercher</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Voir plus</a>
            </div>
          </div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="script.js"></script>
</body>
</html>