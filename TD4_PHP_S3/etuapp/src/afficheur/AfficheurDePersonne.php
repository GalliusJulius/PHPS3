<?php
namespace src\afficheur;

abstract class AfficheurDePersonne{
    protected $personne;
    
    public function __construct($p){
        $this->personne = $p;    
    }
    
    abstract public function vueCourte();
    
    abstract public function vueDetail();
    
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