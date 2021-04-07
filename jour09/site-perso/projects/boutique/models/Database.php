<?php

class Database{


    public static function connection_bdd()
    {

            try 
            {
                $bdd = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'bapt_boutique_en_ligne', 'Boutique13390!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }


            return $bdd;

    }


}