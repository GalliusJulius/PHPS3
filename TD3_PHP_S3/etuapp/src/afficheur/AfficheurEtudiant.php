<?php
namespace src\afficheur;

class AfficheurEtudiant extends AfficheurDePersonne{
    protected $personne;
    
    public function __construct($p){
        $this->personne = $p;    
    }
    
    public function vueCourte(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age.", num : ".$this->personne->numEtu."</p></div>";
    }
    
    public function vueDetail(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age.", ville :".$this->personne->ville.", num : ".$this->personne->numEtu."</p></div>";
    }
}