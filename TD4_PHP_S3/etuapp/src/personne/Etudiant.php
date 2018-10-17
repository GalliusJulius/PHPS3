<?php
namespace src\personne;

class Etudiant extends Personne{
    protected $numEtu, $ref, $formation, $groupe, $note; 
    
    public function __construct($n, $num, $r){
        parent::__construct($n);
        $this->numEtu=$num;
        $this->ref=$r;
    }
    
    public function punition($p , $n){
        for($i =1 ; $i<=$n;$i++){
            printf($i . ") ".$p . "<br>");
        }
    } 
    
    public function associerJour($numJ){
        $tab= [1=>'Lundi',2=>'Mardi',3=>'Mercredi',4=>'Jeudi',5=>'Vendredi',6=>'Samedi',7=>'Dimanche'];
        if(array_key_exists($numJ,$tab)){
            printf("Le numéro $numJ est le jour : $tab[$numJ] <br>");
        }
        else if(in_array($numJ,$tab)){
            $val=array_search($numJ,$tab);
            printf("Le jour $numJ est le $val jour dela semaine <br>");
        }
    }
    
    public function ajouterNote($nomMat, $n){
            printf("RECURSION2");
            $this->note[$nomMat][]=$n;
    }
    
    public function calculerMoyenne($nomMat){
        $somme = 0;
        $i = 0;
        foreach($this->note[$nomMat] as $val){
            $somme+=$val;
            $i++;
        }
        if($i!=0){
            return $somme/$i;
        }
    }
    
    public function ajoutMultiple($mat,$listeNote){
        $tab = explode(';',$listeNote);
        foreach($tab as $val){
            printf("RECURSION");
            $this->ajouterNote($mat,$val);
            printf("RECURSION3");
        }
    }
    
    public function moyenneGene(){
        $somme = 0;
        $i=0;
        $res = [];
        foreach($this->note as $key=>$val){
            $temp = $this->calculerMoyenne($key);
            $somme+=$temp;
            $res[$key] = $temp;
            $i++;
        }
        $res['Général'] = $somme/$i;
        return $res;
    }
    
    public function modifNote($mat,$num,$n){
         if(array_key_exists($mat,$this->note)){
            if(count($this->note[$mat])<$num){
                $this->note[$mat][$num] = $n;
            }
         }
    }
    
    
    
}