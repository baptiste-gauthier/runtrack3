<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <meta name="description" content="Baptiste GAUTHIER, étudiant dans le développement web Front End & Back End à l'école de La Plateforme_ à Marseille. Venez découvrir mon portfolio, en recherche d'alternance pour septembre 2021.">
    <link rel="stylesheet" href="style/style_accueil.css">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/hover.css">
    <link rel="stylesheet" href="style/page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    
    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>

    <header id="link_header" >
        <article class="contenu_header">

            <ul>
                <li><i class="fa fa-bars" id="burger"></i></li>
                <li id="li_about" class="lien_header">About</li>
                <li id="li_portfolio" class="lien_header">Portfolio</li>
                <li id="li_contact" class="lien_header">Contact</li>
            </ul>
        </article>
        
    </header>
    
    <div class="scroll_container" data-scroll-container>
    <main>

        <section id="pres" data-scroll-section>
            <span id="header_smooth"></span>

            <div class="contenu_pres">
                <div class="message" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true">
                    <div id="hello" style="display: none;" > Bonjour, je suis Baptiste Gauthier.</div>
                    <div id="message_hello"></div>
                    <p id="message_pres"> Je suis actuellement étudiant dans le domaine du développement web.</p>
                </div>

                <div class="bouton">
                    <div>
                      
                        <button class="btn_mon_travail"> Découvrez mon travail</button>
                        
                    </div>
                </div>

            </div>

        </section>

        <section id="about" data-scroll-section>
            <h1 class="titre" id="link_about"> About </h1>
            <div class="contenu_about"  data-scroll data-scroll-speed="-2" >

                <div class="description vue">
                    <div class="content_des">
                        <h2> Actuellement à l'école de La Plateforme_ à Marseille, je suis en recherche d'alternance pour septembre 2021.</h2>
                        <p> Passionné depuis toujours par le domaine informatique, j’ai décidé d’intégrer cette formation, qui propose une pédagogie par projet permettant de développer des compétences techniques dans le développement web tout en travaillant sur des projets concrets.
                            </p>
                        <p>Je suis également titulaire d'un DUT Métiers du multimédia et de l’Internet. Cette formation m’a permis de mettre un premier pied dans le monde du numérique et du multimédia. J'ai pu aquérir grâce à ces deux ans des compétences en graphisme, web design, montage vidéo et motion design.</p>
                    </div>
                </div>

                

                <div class="photo vue">
                    <div class="image">
                        <img src="images/portrait.jpg" alt="photo_portrait">
                    </div>

                    <div class="rs">
                        <ul>
                            <li><a href="https://www.instagram.com/?hl=fr"><i class="fa fa-instagram fa-lg"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href="https://fr.linkedin.com/"><i class="fa fa-linkedin fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" data-scroll-section >
            <h1 class="titre" id="link_portfolio" > Portfolio </h1>
            <article class="contenu_portfolio" data-scroll data-scroll-speed="-1">
                <!-- <div class="tri">
                    <ul>
                        <li> Runtrack1 (1)</li>
                        <li> Project Pool1 (5)</li>
                    </ul>
                </div> -->


                <div class="galerie">

                    
                    <div class="vignette voyage">
                        <div class="bloc_click">
                            voir le projet
                        </div>
                    </div>

                    
                    <div class="vignette reser">
                        <div class="bloc_click">
                            voir le projet
                        </div>
                    </div>
                    
                    <div class="vignette forum">
                        <div class="bloc_click">
                            voir le projet
                        </div>
                    </div>

                    <div class="vignette boutique">
                        <div class="bloc_click">
                            voir le projet
                        </div>
                    </div>

                </div>

            </article>
        </section>

        <section id="skills" data-scroll-section>
            <h1 class="titre"> Skills </h1>
            <article class="contenu_skills vue">
                <div class="logo">
                    <img src="images/logo_html.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/logo_css.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/sass.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/logo_php.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/JavaScript-logo.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/jquery.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/kisspng-microsoft-azure-sql-database-microsoft-sql-server-database-5abeaece9df699.271102961522446030647.png" alt="logo_php">
                </div>
                <div class="logo">
                    <img src="images/bootstrap.png" alt="logo_php">
                </div>
            </article>
        </section>

        <section id="projet_flex"></section>

        <section id="contact" data-scroll-section>
            <h1 class="titre" id="link_contact"> Contact</h1>
            <article class="contenu_contact">
                <p> baptiste.gauthier@laplateforme.io </p>
                <p> 0772139190 </p>
                <p>
                    <a class="github-button" href="https://github.com/baptiste-gauthier" aria-label="Github">GitHub</a>
                </p>
                <a href="#link_header" class="animate__animated animate__bounce animate__infinite redirection_top"><i class="fa fa-arrow-up"></i></a>
            </article>
        </section>
        
    </main>

    <section id="scroll_footer" data-scroll-section>
    <footer >
        <nav class="contenu_footer" >

            <div class="rs">
                <div>
                    <a href="https://www.instagram.com/?hl=fr"><i class="fa fa-instagram fa-2x"></i></a>
                </div>

                <div>
                    <a href="https://fr.linkedin.com/"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>

                <div>
                    <a href="https://fr.linkedin.com/"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
            </div>

        </nav>
    </footer>
    </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="script/script.js"></script>
    <script src="script/scrool.js"></script>
</body>

</html>