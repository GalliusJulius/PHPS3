<?php
class Personne{
    public $nom, $prenom, $age, $adress, $ville, $code, $postal, $mail, $tel, $mobile, $idSkype;
    
    public function __construct($n){
        $this->nom=$n;
    }
    
    public function __toString(){
        return "{ \"age\" :".$this->age. ", \"prenom\" :".$this->prenom.", \"nom\" :".$this->nom."}";
    }
    
    public function afficherAge(){
        printf("<br>");
        for($i = 1 ; $i<=$this->age;$i++){
            print $i . " ,";
        }
    }
    
    public function punition($p , $n){
        for($i =1 ; $i<=$n;$i++){
            printf($i . ") ".$p . "<br>");
        }
    } 
    
    public function calculerAge($n){
        echo(date('Y'));
        
    }
    
}