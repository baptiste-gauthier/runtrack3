<?php

require_once("Database.php") ; 

class Model extends Database {

    public $bdd; 

    public function __construct(){
        $this->bdd = Database::connection_bdd();
    }

    public function findProjet($id)
    {
        $requete = $this->bdd->prepare("SELECT * 
                                            FROM projet
                                                WHERE id = :id"); 
        $requete->bindParam(':id', $id) ; 
        $requete->execute(); 

        return $requete->fetchAll() ; 
    }
}