<?php

session_start();
require_once('../utils/autoload.php');

$article = new Model_Article(); 
$display = new View_Article();
$controller_article = new Controller_Article();
$repere_page_acceuil = 0;

View_Navigation::affichage_navigation($repere_page_acceuil);
View_Article::Presentation_accessoires();

$controller_article->catProduits("accessoires",5,$article,$display);

View_Footer::Footer($repere_page_acceuil);

