<?php
class AfficheurDePersonne{
    protected $personne;
    
    public function __construct($p){
        $this->personne = $p;    
    }
    
    private function vueCourte(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age."</p></div>";
    }
    
    private function vueDetail(){
        return "<div> <p> nom : ".$this->personne->nom.", prenom :".$this->personne->prenom.", age :".$this->personne->age.", ville :".$this->personne->ville."</p></div>";
    }
    
    public function afficher($sel){
        switch($sel){
            case 1:
                echo($this->vueCourte());
                break;
            case 2:
                echo($this->vueDetail());
                break;
            default :
                echo("La séléction n'est pas valide");
        }
    }
}