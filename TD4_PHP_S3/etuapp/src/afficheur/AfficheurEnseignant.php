<?php
namespace src\afficheur;

class AfficheurEnseignant extends AfficheurDePersonne{
    protected $personne;
    
    public function __construct($p){
        $this->personne = $p;    
    }
    
    public function vueCourte(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age."
        , code_discipline :".$this->personne->code_discipline."</p></div>";
    }
    
    public function vueDetail(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age.", ville :".$this->personne->ville.", code_discipline :".$this->personne->code_discipline."</p></div>";
    }
}