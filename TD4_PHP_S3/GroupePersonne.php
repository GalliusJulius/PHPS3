<?php
namespace src\personne;

class GroupePersonne{
    protected $numSem, $nomGroupe, $formation, $listeEtu;
    
     public function __construct($num, $nom, $forma){
        $this->numSem=$num;
        $this->nomGroupe=$nom;
        $this->formation=$forma;
    }
    
    public function __get($att){
        if(property_exists($this,$att)){
            return $this->$att;
        }else throw new Exception("$att : n'éxiste pas");
    }
    
    public function __set($att,$val){
        if(property_exists($this,$att)){
            $this->$att = $val;
            return $this->$att;
        } else throw new Exception("$att : n'éxiste pas");
    }
    
    public function ajouterEtudiant(Etudiant $etu){
        $this->listeEtu[]=$etu;
    }
    
    public function calculerMoyenne($mat){
        $somme = 0;
        $indice = 0;
        foreach($this->listeEtu as $val){
            $somme+=$val->calculerMoyenne($mat);
            $indice++;
        }
        if($indice !=0){
            return $somme/$indice;
        }
    }

}